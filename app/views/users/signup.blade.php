@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-4"> 
			{{ Form::open(array('action' => 'UsersController@store', 'id' => 'signUpForm')) }}
			<h3>Sign Up Form</h3>
			<div class="form-group">
			    {{ Form::label('email', 'Email') }}
				{{ Form::text('email', null, array('placeholder'=> 'Type email here', 'class'=>'form-control')) }} 
				@if($errors->has('email')) 
					<p class="alert alert-danger"> 
						{{ $errors->first('email') }}
					</p> 
				@endif
			</div> 
			<div class="form-group">
			    {{ Form::label('password', 'Password') }}
				<div>
					{{ Form::password('password', null, array('placeholder'=> 'Type password here', 'class'=>'form-control')) }} 
				</div>
					
				@if ($errors->has('password'))
					<p class="alert alert-danger">
						{{ $errors->first('password')}}
					</p>
				@endif		
			</div>
			<div class="form-group">
			    {{ Form::label('password_confirmation', 'Confirm Password') }}
				<div>
					{{ Form::password('password_confirmation', null, array('placeholder'=> 'Re-type password here', 'class'=>'form-control')) }} 
				</div>	
				@if($errors->has('password_confirmation'))
				<p class='alert alert-danger'>
					{{ $errors->first('password_confirmation')}}
				</p>
				@endif	
			</div> 
			<div class="form-group">
			    {{ Form::label('first_name', 'First name') }}
				{{ Form::text('first_name', null, array('placeholder'=> 'Type first name here', 'class'=>'form-control')) }} 
				@if($errors->has('first_name'))
				<p class="alert alert-danger">
					{{ $errors->first('first_name')}}
				</p>
				@endif	
			</div> 
			<div class="form-group">
			    {{ Form::label('last_name', 'Last name') }}
				{{ Form::text('last_name', null, array('placeholder'=> 'Type last name here', 'class'=>'form-control')) }} 
				@if($errors->has('last_name'))
				
				<p class="alert alert-danger">
					{{ $errors->first('last_name')}}
				</p>
				
				@endif
			</div> 
			<div class="form-group">
			    {{ Form::label('zip', 'Zip code') }}
				{{ Form::text('zip', null, array('placeholder'=> 'Type zip code here', 'class'=>'form-control')) }} 
				@if($errors->has('zip'))
				<p class="alert alert-danger">
					{{ $errors->first('zip')}}
				</p>
				@endif
			</div> 
			<div class="form-group">
			    {{ Form::label('birthday', 'Birthdate') }}
				{{ Form::input('date', 'birthday', null, array('placeholder'=> 'Type your birth date here', 'class'=>'form-control')) }} 
				@if($errors->has('birthday'))
				<p class="alert alert-danger">
					{{ $errors->first('birthday')}}
				</p>
				@endif
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

@section('bottom-script')
<script type="text/javascript">
    $('#signUpForm').validate_popover({

        highlight: function(element) {
          jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
          jQuery(element).closest('.form-group').removeClass('has-error');
        },
        events   : 'submit',
        selector : 'input[type!=submit], select, textarea',
        callback : function( elem, valid ) {
            if ( ! valid ) {
                $( elem ).addClass('error');
            }
        }
    });
</script>
@stop