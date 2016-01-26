@extends('layouts.master')

@section('content')
<div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text"> <span>Our Events</span></div>
    </div>

    {{-- <div id="exTab2" class="col-md-8 col-lg-7 col-lg-offset-1 col-md-offset-1">
      <ul class="nav nav-tabs">
            <li class="active">
              <a  href="#1" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2" data-toggle="tab">Recent Event</a>
            </li>
            <li><a href="#3" data-toggle="tab">Upcoming Event</a>
            </li>
        </ul>
    </div> --}}

      {{-- <div class="featured-img container">
        <img src="images/clients/1.jpg" width="150" alt="">
      </div> --}}
      <div class="featured-blog container">
          @foreach($events as $event)
            <h3> <a href="{{{action('EventsController@show', $event->id)}}}">{{{$event->name}}}</h3></a>
            <p>{{{$event->description}}} </p>
            <p> <span style="font-weight: bold;">Location:</span> {{{$event->location}}}</p>
            <p> <span style="font-weight: bold;">Event Date:</span> {{{$event->event_date}}}</p>
            <p> <span style="font-weight: bold;">Number of Volunteers needed:</span> {{{$event->volunteers_needed}}}</p>
            <p> <span style="font-weight: bold;">Signup Deadline:</span> {{{$event->signup_deadline}}}</p>
            <p> Created {{{$event->created_at->diffForHumans()}}}</p>
          <a href="{{{action('EventsController@register', $event->id)}}}" class="btn btn-primary">Register Now</a>
          @endforeach
        {{ $events->links() }}
      </div>
@stop