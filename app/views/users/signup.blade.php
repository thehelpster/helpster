@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-4"> 
			{{ Form::open(array('action' => 'UsersController@store')) }}
			<h3>Sign Up Form</h3>
			<div class="form-group">
			    {{ Form::label('email', 'Email') }}
				{{ Form::text('email', null, array('placeholder'=> 'Type email here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('password', 'Password') }}
				{{ Form::password('password', null, array('placeholder'=> 'Type password here', 'class'=>'form-control')) }} 
			</div>
			<div class="form-group">
			    {{ Form::label('password_confirmation', 'Confirm Password') }}
				{{ Form::password('password_confirmation', null, array('placeholder'=> 'Re-type password here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('first_name', 'First name') }}
				{{ Form::text('first_name', null, array('placeholder'=> 'Type first name here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('last_name', 'Last name') }}
				{{ Form::text('last_name', null, array('placeholder'=> 'Type last name here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('zip', 'Zip code') }}
				{{ Form::text('zip', null, array('placeholder'=> 'Type zip code here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('birthday', 'Birthdate') }}
				{{ Form::input('date', 'birthday', null, array('placeholder'=> 'Type your birth date here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('gender', 'Male') }}
				{{ Form::radio('gender', 'M', array('class'=>'form-control')) }} 
				{{ Form::label('gender', 'Female') }}
				{{ Form::radio('gender', 'F', array('class'=>'form-control')) }} 
			</div> 
			 <div> 
			 	<button type="submit" class="btn btn-primary">Sign Up</button>
			 	<hr>
			 </div>
				{{ Form::close() }}
		</div>	
	</div>
</div>


@stop