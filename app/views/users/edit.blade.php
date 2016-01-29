@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-4 extra-spacing"> 
            <h2>Profile Edit</h2>
            {{ Form::model(Auth::user(), array('action' => array('UsersController@update', Auth::user()->id), 'method' => 'PUT', 'files'=>true)) }}
      		<div "form-group">
                {{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
                {{ Form::label('first_name', 'First Name') }}
                {{ Form::text('first_name',null, array('class'=>'form-control'))}}
    		</div>
        	<div "form-group">
                {{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
                {{ Form::label('last_name', 'Last Name')}}
                {{ Form::text('last_name',null, array('class'=>'form-control'))}}
        	</div>
        	<div "form-group">
                {{ $errors->first('zip', '<span class="help-block">:message</span>') }}
                {{ Form::label('zip', 'Zip Code')}}
                {{ Form::text('zip',null, array('class'=>'form-control'))}}
        	</div>
    		<div "form-group">
                {{ $errors->first('quote', '<span class="help-block">:message</span>') }}
                {{ Form::label('quote', 'Quote')}}
                {{ Form::text('quote',null, array('class'=>'form-control'))}}
    		</div>
        	<div "form-group">
                {{ $errors->first('about', '<span class="help-block">:message</span>') }}
                {{ Form::label('about', 'About me') }}
            	{{ Form::textarea('about',null, array('class'=>'form-control'))}}
        	</div>	
            <div "form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image')}}
                <br>
              <button type="submit" class="btn btn-primary">Submit Changes</button>
            {{ Form::close() }}
            </div>
		</div>
	</div>
</div>

@stop