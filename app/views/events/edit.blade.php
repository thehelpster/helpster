@extends('layouts.master')

@section('content')
<div class="container">
		{{ Form::model($event, array('action' => array('EventsController@update', $event->id), 'method' => 'PUT')) }}
		{{Form::hidden('org_id', $event->org_id)}}
		  <div class="form-group">
		    {{$errors->first('name');}}
		    {{ Form::label('name', 'Name') }}
			{{ Form::text('name', null, array('placeholder'=> 'Type name Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		  	{{$errors->first('descsription');}}
		    {{ Form::label('description', 'Description') }}
			{{ Form::text('description', null, array('placeholder'=> 'Type Description Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		  	{{$errors->first('location');}}
		    {{ Form::label('location', 'location') }}
			{{ Form::text('location', null, array('placeholder'=> 'Type location Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		  	{{$errors->first('event_date');}}
		    {{ Form::label('event_date', 'Event_date') }}
			{{ Form::text('event_date', null, array('placeholder'=> 'Type event_date Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		  	{{$errors->first('volunteers_needed');}}
		    {{ Form::label('volunteers_needed', 'Volunteers_Needed') }}
			{{ Form::text('volunteers_needed', null, array('placeholder'=> 'Type event_date Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		  	{{$errors->first('signup_deadline');}}
		    {{ Form::label('signup_deadline', 'Signup_Deadline') }}
			{{ Form::text('signup_deadline', null, array('placeholder'=> 'Type signup_deadline Here', 'class'=>'form-control')) }}
		  </div>
		  <button type="submit" class="btn btn-primary">Submit Changes</button>
		
		{{ Form::close() }}
	</div>

@stop