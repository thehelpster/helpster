@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
        	<div class="col-md-6 col-md-offset-4"> 
				{{ Form::open(array('action' => 'EventsController@store')) }}
					{{-- {{Form::hidden('org_id', $event->org_id)}} --}}
					  <div class="form-group">
					    {{ Form::label('name', 'Name') }}
						{{ Form::text('name', null, array('placeholder'=> 'Type Title Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					    {{ Form::label('event_date', 'Event Date') }}
						{{ Form::text('event_date', null, array('placeholder'=> 'Type Event Date Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					    {{ Form::label('location', 'Location') }}
						{{ Form::text('location', null, array('placeholder'=> 'Type Location Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					    {{ Form::label('description', 'Description') }}
						{{ Form::textarea('description', null, array('placeholder'=> 'Describe Event Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					    {{ Form::label('volunteers_needed', 'Volunteers Needed') }}
						{{ Form::text('volunteers_needed', null, array('placeholder'=> 'Number of volunteers needed', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					    {{ Form::label('signup_deadline', 'Signup Deadline') }}
						{{ Form::text('signup_deadline', null, array('placeholder'=> 'Type Signup Deadline Here', 'class'=>'form-control')) }} 
					  </div>
		  				<button type="submit" class="btn btn-primary">Submit</button>
				{{ Form::close() }}
			</div> <!-- offset-->
		</div>  <!-- row-->
	</div> <!-- container-->
@stop