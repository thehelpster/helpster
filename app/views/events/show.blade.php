@extends('layouts.master')

@section('content')
	<div class="container">
		<h3> {{{$event->name}}}</h3>

            <p>{{{$event->description}}} </p>
            <p> <span style="font-weight: bold;">Location:</span> {{{$event->location}}}</p>
            <p> <span style="font-weight: bold;">Event Date:</span> {{{$event->event_date}}}</p>
            <p> <span style="font-weight: bold;">Number of Volunteers needed:</span> {{{$event->volunteers_needed}}}</p>
            <p> <span style="font-weight: bold;">Signup Deadline:</span> {{{$event->signup_deadline}}}</p>
            <p> Created {{{$event->created_at->diffForHumans()}}}</p>
            @if(Auth::user())
            	<a href="{{{action('EventsController@edit', $event->id)}}}" class="btn btn-primary">Edit Event</a>
            @endif
            	<a href="{{{action('EventsController@register', $event->id)}}}" class="btn btn-primary">Register Now</a>
    </div>
@stop