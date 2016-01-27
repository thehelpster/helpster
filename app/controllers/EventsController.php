<?php

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
		$organizations = Organization::where('user_id', '=', Auth::user()->id)->list('id','name');
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
				return Redirect::back->withInput();
			}

			$return $this->save($result);
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

			return $this->save($result);

			if(!$result)
			{
				return Redirect::back->withInput();
			}

			$result = $event->save();
		}
	}

	public function save($result)
	{

		return Redirect::action('EventsController@show', $event->id);
		
	}
	
	public function register($id)
	{
		$event = VolunteerEvent::find($id);

		return View::make('events.register', array('event'=>$event));
	}

	public function makeEventReservation($id)
	{
		$reservation = new RSVP;

		$reservation->user_id=Auth::user()->id;
		$reservation->event_id=$id;
		$reservation->response= Input::get('response');

		$reservation->save();
		Session::flash('successMessage', 'Your reservationhas been saved');
		
		return Redirect::action('EventsController@index');

	}
	public function viewUsers($id) {
		$rsvps = VolunteerEvent::with('rsvps')->where('id', '=', $id)->first();
		return View::make('events.users')->with('rsvps', $rsvps); 
	}
}
