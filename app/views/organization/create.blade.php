@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
        	<div class="col-md-6 col-md-offset-4"> 
				{{ Form::open(array('action' => 'OrganizationsController@store', 'files'=>true)) }}
					{{Form::hidden('user_id', Auth::user()->id)}}
					  <div class="form-group">
					    {{$errors->first('name');}}
					    {{ Form::label('name', 'Name') }}
						{{ Form::text('name', null, array('placeholder'=> 'Type Title Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					  	{{$errors->first('date_established');}}
					    {{ Form::label('date_established', 'Date Established') }}
						{{ Form::text('date_established', null, array('placeholder'=> 'Enter Year Organization Established ', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					  	{{$errors->first('description');}}
					    {{ Form::label('description', 'Description') }}
						{{ Form::textarea('description', null, array('placeholder'=> 'Describe Event Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					  	{{$errors->first('website');}}
					    {{ Form::label('website', 'Website') }}
						{{ Form::text('website', null, array('placeholder'=> 'Type Website Address Here', 'class'=>'form-control')) }} 
					  </div>
					  <div class="form-group">
					  	{{$errors->first('image');}}
					    {{ Form::label('image', 'Image') }} 
						{{Form::file('image')}}
					  </div>

		  			<button type="submit" class="btn btn-primary">Submit</button>
				{{ Form::close() }}
			</div> <!-- offset-->
		</div>  <!-- row-->
	</div> <!-- container-->
@stop