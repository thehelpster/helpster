@extends ('layouts.master')

@section ('content')
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-4"> 

        {{var_dump (Input::old())}}
		{{ Form::open(array('action' => 'UsersController@doLogin')) }}
			<div class="form-group">
			    {{ Form::label('email', 'Email') }}
				{{ Form::text('email', null, array('placeholder'=> 'Type email here', 'class'=>'form-control')) }} 
				@if($errors->has('email'))
				<p class="alert alert-danger">
					{{ $errors->first('email')}}
				</p>
				@endif	
			 </div>
			<div class="form-group">
				{{ Form::label('password', 'Password') }}
				<div>
					{{ Form::password('password', null, array('placeholder'=> 'Type password here', 'class'=>'form-control')) }} 
				</div>	
				@if($errors->has('password'))
					<p class="alert alert-danger">
						{{$errors->first('password')}}
					</p>
				@endif		
			  </div>
		  <button type="submit" class="btn btn-primary">Login</button>
		  <hr>
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop