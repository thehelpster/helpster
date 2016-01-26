@extends('layouts.master')

@section('content')
{{-- Need updates columns in 'users' table --}}
<div class="site-heading">
    {{ Form::model(Auth::user(), array('action' => array('UsersController@update', Auth::user()->id), 'method' => 'PUT')) }}

      <div class="container form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
        {{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name')}}
        {{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
        {{ Form::label('last_name', 'Last Name')}}
        {{ Form::text('last_name')}}
        {{ $errors->first('gender', '<span class="help-block">:message</span>') }}
        {{ Form::label('gender', 'Gender')}}
        {{ Form::text('gender')}}
        {{ $errors->first('zip', '<span class="help-block">:message</span>') }}
        {{ Form::label('zip', 'Zip Code')}}
        {{ Form::text('zip')}}
        {{ $errors->first('quote', '<span class="help-block">:message</span>') }}
        {{ Form::label('quote', 'Quote')}}
        {{ Form::text('quote')}}
        {{ $errors->first('about', '<span class="help-block">:message</span>') }}
        {{ Form::label('about', 'About me') }}
        {{ Form::textarea('about')}}
      </div>

      <button type="submit" class="btn btn-default">Submit Changes</button>
    {{ Form::close() }}
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