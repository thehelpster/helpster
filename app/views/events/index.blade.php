@extends('layouts.master')

@section('content')
<div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text"> <span>Our Events</span></div>
    </div>

      <div class="featured-blog container">
            @foreach($events as $event)
          <div class="extra-spacing">
              <h3> <a id="color" href="{{{action('EventsController@show', $event->id)}}}">{{{$event->name}}}</h3></a>
              <p>{{{$event->description}}} </p>
              <p> <span style="font-weight: bold;">Location:</span> {{{$event->location}}}</p>
              <p> <span style="font-weight: bold;">Event Date:</span> {{{$event->event_date}}}</p>
              <p> <span style="font-weight: bold;">Number of Volunteers needed:</span> {{{$event->volunteers_needed}}}</p>
              <p> <span style="font-weight: bold;">Signup Deadline:</span> {{{$event->signup_deadline}}}</p>
              <p> Created {{{$event->created_at->diffForHumans()}}}</p>
            <a href="{{{action('EventsController@register', $event->id)}}}" class="btn btn-primary">Register Now</a>
          </div>
            
            @endforeach
            {{ $events->links() }}
      </div>
@stop
