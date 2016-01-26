@extend('layouts.master')

@section('content')
<div class="container">
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
	</div>

@stop