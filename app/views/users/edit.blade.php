@extends('layouts.master')

@section('content')
{{-- Need updates columns in 'users' table --}}
<div class="site-heading">
	<div class="row">
        <div class="col-md-6 col-md-offset-4"> 
    {{ Form::model(Auth::user(), array('action' => array('UsersController@update', Auth::user()->id), 'method' => 'PUT', 'files'=>true)) }}

    <div class="container form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
      	<div class="form-group">
      		<div>
        {{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
        {{ Form::label('first_name', 'First Name') }}
    		</div>
        {{ Form::text('first_name')}}
        	<div>
        {{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
        {{ Form::label('last_name', 'Last Name')}}
        	</div>
        {{ Form::text('last_name')}}
        	<div>
        {{ $errors->first('gender', '<span class="help-block">:message</span>') }}
        {{ Form::label('gender', 'Gender')}}
    		</div>
        {{ Form::text('gender')}}
        	<div>
        {{ $errors->first('zip', '<span class="help-block">:message</span>') }}
        {{ Form::label('zip', 'Zip Code')}}
        	</div>
        {{ Form::text('zip')}}
    		<div>
        {{ $errors->first('quote', '<span class="help-block">:message</span>') }}
        {{ Form::label('quote', 'Quote')}}
    		</div>
        {{ Form::text('quote')}}
        	<div>
        {{ $errors->first('about', '<span class="help-block">:message</span>') }}
        {{ Form::label('about', 'About me') }}
        	<div>
        	{{ Form::textarea('about')}}
        	</div>	
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image')}}
      		</div>

      <button type="submit" class="btn btn-default">Submit Changes</button>
    {{ Form::close() }}
		</div>
		</div>
	</div>

{{-- <div class="container">
		{{ Form::model($update, array('action' => array('UserController@update', $update->id), 'method' => 'PUT')) }}
		
		  <div class="form-group">
		    {{ Form::label('name', 'Name') }}
			{{ Form::text('name', null, array('placeholder'=> 'Type name Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		    {{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, array('placeholder'=> 'Type email Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		    {{ Form::label('phone', 'Phone') }}
			{{ Form::text('phone', null, array('placeholder'=> 'Type phone Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		    {{ Form::label('message', 'message') }}
			{{ Form::text('message', null, array('placeholder'=> 'Type message Here', 'class'=>'form-control')) }}
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		
		{{ Form::close() }}
	</div> --}}

@stop