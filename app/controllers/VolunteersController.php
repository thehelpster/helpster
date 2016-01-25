<?php

class VolunteersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('volunteer.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('volunteer.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$volunteer = new Volunteer();
		Log::info('This is some useful information.', Input::all());

		return $this->validateAndSave($volunteer);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$volunteer = Volunteer::find($id);
		
		if(!$volunteer){
			App::abort(404);
		}
		return View::make('users.show')->with('volunteer', $volunteer);
	}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('volunteer.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$volunteer = Volunteer::find($id);

		return $this->validateAndSave($volunteer);	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$volunteer = Volunteer::find($id);
		$volunteer->delete();
		Session::flash('successMessage', 'Your delete was successful.');
		return Redirect::action('VolunteersController@index');
	}

	public function validateAndSave($volunteer)
	{
	    $validator = Validator::make(Input::all(), Volunteer::$rules);

		if ($validator->fails()) {
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$volunteer->email = Input::get('email');
			$volunteer->first_name = Input::get('first_name');
			$volunteer->last_name = Input::get('last_name');
			$volunteer->password = Input::get('password');
			$volunteer->birthday = Input::get('birthday');
			$volunteer->gender = Input::get('gender');
			$volunteer->zip = Input::get('zip');


			$result = $volunteer->save();

			if($result) {
				return Redirect::action('VolunteersController@show', $volunteer->id);
			} else {
				return Redirect::back()->withInput();
			}
		}

	}
}
