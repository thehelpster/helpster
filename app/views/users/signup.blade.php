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
				{{ Form::text('password', null, array('placeholder'=> 'Type password here', 'class'=>'form-control')) }} 
			</div>
			<div class="form-group">
			    {{ Form::label('password', 'Re-type Password') }}
				{{ Form::text('password', null, array('placeholder'=> 'Re-type password here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('firstname', 'First name') }}
				{{ Form::text('firstname', null, array('placeholder'=> 'Type first name here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('lastname', 'Last name') }}
				{{ Form::text('lastname', null, array('placeholder'=> 'Type last name here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('zipcode', 'Zip code') }}
				{{ Form::text('zipcode', null, array('placeholder'=> 'Type zip code here', 'class'=>'form-control')) }} 
			</div> 
			<div class="form-group">
			    {{ Form::label('birthdate', 'Birthdate') }}
				{{ Form::input('date', 'birthdate', null, array('placeholder'=> 'Type your birth date here', 'class'=>'form-control')) }} 
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