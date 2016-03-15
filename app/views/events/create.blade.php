@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
        	<div class="col-md-6 col-md-offset-4"> 
				{{ Form::open(array('action' => 'EventsController@store')) }}
					  <div class="form-group">	
					    {{ Form::label('org_id', 'Organization') }}
						{{ Form::select('org_id', $organizations) }}
						@if($errors->has('org_id'))
					  		<p class="alert alert-danger">
							{{$errors->first('org_id');}}
							</p>
						@endif
					  </div>

					  <div class="form-group">
					    {{ Form::label('name', 'Name') }}
						{{ Form::text('name', null, array('placeholder'=> 'Type Title Here', 'class'=>'form-control')) }} 
						@if($errors->has('name'))
							<p class="alert alert-danger">
								{{$errors->first('name');}}
							</p>
						@endif		
					  </div>
					  <div class="form-group">
					    {{ Form::label('event_date', 'Event Date') }}
						{{ Form::text('event_date', null, array('placeholder'=> 'Type Event Date Here', 'class'=>'form-control')) }} 
						@if($errors->has('event_date'))
							<p class="alert alert-danger">
								{{$errors->first('event_date');}}
							</p>
						@endif		
					  </div>
					  <div class="form-group">
					    {{ Form::label('location', 'Location') }}
						{{ Form::text('location', null, array('placeholder'=> 'Type Location Here', 'class'=>'form-control')) }} 
						@if($errors->has('location'))
							<p class="alert alert-danger">
								{{$errors->first('location');}}
							</p>
						@endif		
					  </div>
					  <div class="form-group">
					    
					    {{ Form::label('description', 'Description') }}
						{{ Form::textarea('description', null, array('placeholder'=> 'Describe Event Here', 'class'=>'form-control')) }} 
						@if($errors->has('description'))
							<p class="alert alert-danger">
								{{$errors->first('description');}}
							</p>
						@endif		
					  </div>
					  <div class="form-group">
					    
					    {{ Form::label('volunteers_needed', 'Volunteers Needed') }}
						{{ Form::text('volunteers_needed', null, array('placeholder'=> 'Number of volunteers needed', 'class'=>'form-control')) }} 
						@if($errors->has('volunteers_needed'))
							<p class="alert alert-danger">
								{{$errors->first('volunteers_needed');}}	
							</p>
						@endif		
					  </div>
					  <div class="form-group">
					    
					    {{ Form::label('signup_deadline', 'Signup Deadline') }}
						{{ Form::text('signup_deadline', null, array('placeholder'=> 'Type Signup Deadline Here', 'class'=>'form-control')) }} 
						@if($errors->has('signup_deadline'))
							<p class="alert alert-danger">
							{{$errors->first('signup_deadline');}}
							</p>
						@endif		
					  </div>
		  				<button type="submit" class="btn btn-primary">Submit</button>
				{{ Form::close() }}
			</div> <!-- offset-->
		</div>  <!-- row-->
	</div> <!-- container-->
@stop