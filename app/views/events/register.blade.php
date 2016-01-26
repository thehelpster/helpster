@extends('layouts.master')

@section('content')
	<div class="container">
			<h3> {{{$event->name}}}</h3>

            <p>{{{$event->description}}} </p>
            <p> <span style="font-weight: bold;">Location:</span> {{{$event->location}}}</p>
            <p> <span style="font-weight: bold;">Event Date:</span> {{{$event->event_date}}}</p>
            <p> <span style="font-weight: bold;">Number of Volunteers needed:</span> {{{$event->volunteers_needed}}}</p>
            <p> <span style="font-weight: bold;">Signup Deadline:</span> {{{$event->signup_deadline}}}</p>

		{{Form::open(array('action'=>array('EventsController@makeEventReservation',$event->id),'method'=>'POST'))}}
		{{Form::label('response','Yes')}}
		{{Form::radio('response', 'yes')}}
		{{Form::label('response','Maybe')}}
		{{Form::radio('response', 'maybe')}}
		{{Form::label('response','No')}}
		{{Form::radio('response', 'no')}}
		<button type="submit" class="btn btn-info">Submit your response</button>
		{{Form::close()}}
	</div>
@stop