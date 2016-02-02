<?php
use Imanee\Imanee;

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = VolunteerEvent::paginate(5);

		return View::make('events.index')->with('events', $events);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$organizations = Organization::where('user_id', '=', Auth::user()->id)->lists('name', 'id');
		return View::make('events.create', compact('organizations'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$event = new VolunteerEvent();

		return $this->validateAndCreate($event);
	}

	public function find($id)
	{
		$event = Volunteer::find($id);

		return $event;
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = VolunteerEvent::find($id);
		
		if(!$event){
			App::abort(404);
		}
		return View::make('events.show')->with('event', $event);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = VolunteerEvent::find($id);
		$organizations = Organization::where('user_id', '=', Auth::user()->id)->lists('id','name');
		return View::make('events.edit', compact('event','organizations'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = VolunteerEvent::find($id);

		return $this->validateAndUpdate($event);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function validateAndCreate($event)
	{
		$validator = Validator::make(Input::all(), VolunteerEvent::$rules);

		if ($validator->fails()) {
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			
			$event->org_id = Input::get('org_id');
			$event->name = Input::get('name');
			$event->description = Input::get('description');
			$event->location = Input::get('location');
			$event->event_date = Input::get('event_date');
			$event->volunteers_needed = Input::get('volunteers_needed');
			$event->signup_deadline = Input::get('signup_deadline');

			$result = $event->save();

			if(!$result)
			{
				return Redirect::back()->withInput();
			}
			else
			{
				return Redirect::action('EventsController@show', $event->id);
			}
		}
	}	

	public function validateAndUpdate($event)
	{
		$validator = Validator::make(Input::all(), VolunteerEvent::$updateRules);

		if ($validator->fails()) {
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			
			$event->org_id = Input::get('org_id');
			$event->name = Input::get('name');
			$event->description = Input::get('description');
			$event->location = Input::get('location');
			$event->event_date = Input::get('event_date');
			$event->volunteers_needed = Input::get('volunteers_needed');
			$event->signup_deadline = Input::get('signup_deadline');

			$result = $event->save();

			if(!$result)
			{
				return Redirect::back()->withInput();
			}
			else
			{
				return Redirect::action('EventsController@show', $event->id);
			}
			
		}
	}

	// public function save($result)
	// {

	// 	return Redirect::action('EventsController@show', $result->id);
		
	// }
	
	public function register($id)
	{
		if(Confide::user()){
			$event = VolunteerEvent::find($id);

			return View::make('events.register', array('event'=>$event));
		} else{
			Session::flash('successMessage', 'You must first be logged in to register for an event!!');
			return View::make('users.login');
		}
	}

	public function makeEventReservation($id)
	{
		
		if(Confide::user()){
			$reservation = new RSVP;

			$reservation->user_id=Auth::user()->id;
			$reservation->event_id=$id;
			$reservation->response= Input::get('response');

			$reservation->save();
			Session::flash('successMessage', 'Your reservation has been saved');
			
			return Redirect::action('EventsController@index');
		}
		else{
			
			Session::flash('successMessage', 'You must first be logged in to register for an event!!');
			return View::make('users.login');
		}
	}

	public function viewUsers($id) {
		$rsvps = VolunteerEvent::with('rsvps')->where('id', '=', $id)->first();
		return View::make('events.users')->with('rsvps', $rsvps); 
	}


}
