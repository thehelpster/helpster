<?php
use Imanee\Imanee;
class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $rsvps = Rsvp::where('user_id','=', Auth::user()->id)->get();
        $organizations = Organization::get();

        $user = Auth::user();

	    if(empty($user->first_name)|| empty($user->last_name)|| empty($user->zip)) {

            return Redirect::action('UsersController@edit', [$user->id]);
        }

        return View::make('users.index')->with('rsvps',$rsvps);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{   
        return View::make('users.signup');
    }
    public function create2()
    {   
        return View::make('users.success');
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{ 
        // $inputs = Input::only(static::$createColumns);
        // $rules = static::$createValidation;

		$validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails())
        {
            $messages = $validator->errors();

            return Redirect::action('UsersController@create')
                ->withInput(Input::except('password','password_confirmation'))
                ->withErrors($messages);
                // ->with('error', $error);

        }
        else 
        {
            $repo = App::make('UserRepository');
            $user = $repo->signup(Input::all());

            if ($user->id) {
                if (Config::get('confide::signup_email')) {
                    Mail::queueOn(
                        Config::get('confide::email_queue'),
                        Config::get('confide::email_account_confirmation'),
                        compact('user'),
                        function ($message) use ($user) {
                            $message
                                ->to($user->email, $user->username)
                                ->subject(Lang::get('confide::confide.email.account_confirmation.subject'));
                        }
                    );
                }

                $userRole = Role::where('name', 'volunteer')->first();

                $user->attachRole($userRole->id);
                // $user->confirmed = true;
                // $user->save();
                // $result = Auth::attempt(['email' => $user->email, 'password' => Input::get('password')]);

                return Redirect::action('UsersController@create2')
                     ->with('notice', Lang::get('confide::confide.alerts.account_created'));
            } else {

                $error = $user->errors()->all(':message');
                // dd($error);
                            } //
        } //closes else for validator-if 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		
		if(!$user){
			App::abort(404);
		}
		return View::make('users.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function edit($id)
	{
		return View::make('users.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);

		return $this->validateAndSave($user);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		Session::flash('successMessage', 'Your delete was successful.');
		return Redirect::action('UsersController@index');
	}

	public function validateAndSave($user)
	{
	    $validator = Validator::make(Input::all(), User::$updateRules);

		if ($validator->fails()) {
            var_dump($validator->messages());
            die;
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			//$user = new User();
            $user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->zip = Input::get('zip');
            $user->birthday = Input::get('birthday');
            $user->gender = Input::get('gender');
            $user->quote = Input::get('quote');
            $user->about = Input::get('about');
            $image = Input::file('image');
            // $user->image = $image->getClientOriginalName();
            // $image->move(__DIR__ . '/../../public/img');
            if(Input::hasfile('image'))
            {
            Input::file('image')->move(__DIR__.'/../../public/images/users', Input::file('image')->getClientOriginalName());
                $image = new Imanee(__DIR__.'/../../public/images/users/'.Input::file('image')->getClientOriginalName());
                $image->resize(200,150)->write(__DIR__.'/../../public/images/users/'.Input::file('image')->getClientOriginalName());
                $user->image = Input::file('image')->getClientOriginalName();
            }

			$result = $user->save();
            //dd($result,$user);

			if($result) {
				return Redirect::action('UsersController@index');
			} else {
				return Redirect::back()->withInput();
			}
		}

	}


	  public function login()
    {
        if (Confide::user()) {
            return Redirect::action('UsersController@index');
        } else {
            return View::make('users.login');
        }
    }

    /**
     * Attempt to do login
     *
     * @return  Illuminate\Http\Response
     */
    public function doLogin()
    {
        $repo = App::make('UserRepository');
        $input = Input::all();

        $validator = Validator::make(Input::all(), User::$loginRules);

        if ($validator->fails())
        {
            $messages = $validator->errors();

            return Redirect::action('UsersController@login')
                ->withInput(Input::except('password'))
                ->withErrors($messages);
                // ->with('error', $error);

        }
        else {
            if ($repo->login($input)) {
                return Redirect::action('UsersController@index');
            } else {
                if ($repo->isThrottled($input)) {
                    $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
                } elseif ($repo->existsButNotConfirmed($input)) {
                    $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
                } else {
                    $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
                }
                return Redirect::action('UsersController@login')
                    ->withInput(Input::except('password'))
                    ->with('error', $err_msg);
            }  
        }
        
    }

    /**
     * Attempt to confirm account with code
     *
     * @param  string $code
     *
     * @return  Illuminate\Http\Response
     */
    public function confirm($code)
    {
        if (Confide::confirm($code)) {
            $notice_msg = Lang::get('confide::confide.alerts.confirmation');
            return Redirect::action('UsersController@login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_confirmation');
            return Redirect::action('UsersController@login')
                ->with('error', $error_msg);
        }
    }

    /**
     * Displays the forgot password form
     *
     * @return  Illuminate\Http\Response
     */
    public function forgotPassword()
    {
        return View::make(Config::get('confide::forgot_password_form'));
    }

    /**
     * Attempt to send change password link to the given email
     *
     * @return  Illuminate\Http\Response
     */
    public function doForgotPassword()
    {
        if (Confide::forgotPassword(Input::get('email'))) {
            $notice_msg = Lang::get('confide::confide.alerts.password_forgot');
            return Redirect::action('UsersController@login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_forgot');
            return Redirect::action('UsersController@doForgotPassword')
                ->withInput()
                ->with('error', $error_msg);
        }
    }

    /**
     * Shows the change password form with the given token
     *
     * @param  string $token
     *
     * @return  Illuminate\Http\Response
     */
    public function resetPassword($token)
    {
        return View::make(Config::get('confide::reset_password_form'))
                ->with('token', $token);
    }

    /**
     * Attempt change password of the user
     *
     * @return  Illuminate\Http\Response
     */
    public function doResetPassword()
    {
        $repo = App::make('UserRepository');
        $input = array(
            'token'                 =>Input::get('token'),
            'password'              =>Input::get('password'),
            'password_confirmation' =>Input::get('password_confirmation'),
        );

        // By passing an array with the token, password and confirmation
        if ($repo->resetPassword($input)) {
            $notice_msg = Lang::get('confide::confide.alerts.password_reset');
            return Redirect::action('UsersController@login')
                ->with('notice', $notice_msg);
        } else {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_reset');
            return Redirect::action('UsersController@resetPassword', array('token'=>$input['token']))
                ->withInput()
                ->with('error', $error_msg);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return  Illuminate\Http\Response
     */
    public function logout()
    {
        Confide::logout();

        return Redirect::to('/');
    }

    public function doContact()
    {
        $from = Input::get('from');
        $email = Input::get('email');
        $subject = Input::get('subject');
        $body = Input::get('body');

        $data = [
            'from'=> $from,
            'email'=> $email,
            'subject'=> $subject,
            'body'=> $body
        ];

        Mail::send('emails.contact', $data, function($message) use ($data)
        {
            $message->from($data['email'], $data['from']);
            $message->to('helpsterorganization@gmail.com', 'Helpster')->subject($data['subject']);
        });
        Session::flash('successMessage', 'Your email has been sent');
        return Redirect::action('UsersController@index');
    }

}
