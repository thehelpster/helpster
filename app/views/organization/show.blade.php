@extends('layouts.master')

@section('content')


<div class="container">
		<h3> {{{$organization->name}}}</h3>

            <p>{{{$organization->description}}} </p>
            <p> <a href="{{{$organization->website}}}"><span style="font-weight: bold;">Website:</span> {{{$organization->website}}}</a></p>
            <a href="{{{action('EventsController@create')}}}" class="btn btn-primary">Create Event</a>
    </div>
@stop