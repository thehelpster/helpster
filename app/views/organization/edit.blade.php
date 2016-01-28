@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-4"> 	
			{{ Form::model($organization, array('action' => array('OrganizationsController@update', $organization->id), 'method' => 'PUT')) }}
			{{Form::hidden('date_established', $organization->date_established)}}
		  <div class="form-group">
			    {{ Form::label('name', 'Name') }}
				{{ Form::text('name', null, array('placeholder'=> 'Type name Here', 'class'=>'form-control')) }}
				@if($errors->has('name')) 
					<p class="alert alert-danger"> 
						{{ $errors->first('name') }}
					</p> 
				@endif
		  </div>
		  <div class="form-group">
			    {{ Form::label('description', 'Description') }}
				{{ Form::textarea('description', null, array('placeholder'=> 'Type Description Here', 'class'=>'form-control')) }}
				@if($errors->has('description')) 
					<p class="alert alert-danger"> 
						{{ $errors->first('description') }}
					</p> 
				@endif
		  </div>
		  <div class="form-group">
			    {{ Form::label('website', 'website') }}
				{{ Form::text('website', null, array('placeholder'=> 'Type website Here', 'class'=>'form-control')) }}
				@if($errors->has('website')) 
					<p class="alert alert-danger"> 
						{{ $errors->first('website') }}
					</p> 
				@endif
		  </div>
		  <div class="form-group">
			    {{ Form::label('image', 'Image') }}
				{{ Form::file('image')}}
				@if($errors->has('image')) 
					<p class="alert alert-danger"> 
						{{ $errors->first('image') }}
					</p> 
				@endif
		  </div>
			  <button type="submit" class="btn btn-primary">Submit Changes</button>
			{{ Form::close() }}
		</div><!--column-->
	</div> <!-- row-->
</div> <!-- container-->

@stop