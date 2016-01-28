<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		$events = VolunteerEvent::take(3)->get();
        // dd($events);

        return View::make('hello')->with('events', $events);
	}

	public function about()
	{
		return View::make('about');
	}
	public function contact()
	{
		return View::make('contact');
	}

	public function profile()
	{
		$user = Auth::user();
		return View::make('users.profile')->with('user', $user);
	}

	// public function __construct()
	// {
	// 	$this->beforeFilter('auth', array("only"=>array("profile")));
	// }

	public function edit($id)
	{
		return View::make('users.edit')->with('user', $user);
	}

}
