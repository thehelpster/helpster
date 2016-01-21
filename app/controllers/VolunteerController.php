<?php

class VolunteerController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function createProfile()
	{
		return View::make('volunteer.create');
	}

	public function editProfile($id)
	{
		return View::make('volunter.edit');
	}

	public function storeProfile()
	{
		$post = new Post();

		Log::info('This is some useful information.');

		return $this->validateAndSave($post);
	}

	public function validateAndSave($post)
	{
	    $validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->user_id = Auth::id();

			$userEmail = Auth::user()->email;

			$result = $post->save();

			if($result) {
				return Redirect::action('VolunteerController@show', $post->id);
			} else {
				return Redirect::back()->withInput();
			}
		}

	}
}
