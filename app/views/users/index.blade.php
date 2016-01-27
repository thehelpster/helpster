@extends('layouts.master')

@section('content')
{{-- 	This section, top left, is for user-info --}} 
<div class="container">
<div class="row">
    <div class="col-md-6">
    	<div class="row">
    	</div>
        @if (Auth::check())
    		<div class="col-sm-4">
    			<img class="img-responsive img-rounded" src="/img/{{{ Auth::user()->image }}}">
    		</div>
        <h1>{{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}}</h1>
        <a href="{{{ action('UsersController@edit', Auth::user()->id) }}}" class="btn btn-primary">Edit Profile</a>
    	@if (Auth::user()->name=='org_admin')
    		<a href="{{{ action('OrganizationsController@create') }}}" class="btn btn-primary">Create an Organization</a>
    	@else
    		<a href="{{{ action('OrganizationsController@create') }}}" class="btn btn-primary">Test an Organization</a>    	
    	@endif
    	<h3>{{{ Auth::user()->quote }}}</h3>
        <header>
            <h2>About {{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}}</h2>
            <div>
                <p> {{{ Auth::user()->about }}}</p>
            </div>
        </header>

        <ul>
        	<li>Member since: <em>{{{ Auth::user()->created_at->format('Y-m-d') }}}</em></li>
            <li>From: <em>{{{ Auth::user()->zip }}}</em></li>
        </ul>
    </div>
    {{--This section is placed at the top right, this is users past work --}}
    <div class="col-md-6">
    	<div class="row">
        	<h2>{{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}}'s Organizations</h2>
        	<div class="row">
        		<div class="col-sm-3">
        			<img src="https://i.ytimg.com/vi/8oA_9tzNagg/hqdefault.jpg" class="img-responsive img-rounded">
        			<img src="http://www.askmikehopkins.com/wp-content/uploads/2015/08/carmax_logo.jpeg" class="img-responsive img-rounded">
        			<img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/3a/Harvard_Wreath_Logo_1.svg/1051px-Harvard_Wreath_Logo_1.svg.png" class="img-responsive img-rounded">
        			<img src="http://alerts.utsa.edu/wp-content/uploads/2015/08/utsa.jpg" class="img-responsive img-rounded">
        		</div>
        	</div>
    	</div>
    </div> 

</div>
{{-- <div class="line-separator"></div>
 --}}    {{--Other users leave comments regarding the performance of the user they worked with --}} 
 <hr>                 
    	<div class="row">
        	<h2>{{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}}'s Recent Work</h2>
    		<div class="col-sm-2">
            <img src="http://firstqualityplumbingfl.com/wp-content/uploads/2013/11/plumbing-questions.jpg" class="img-responsive img-rounded">
            <h3>I volunteered to fix someones plumbing</h3>
        	</div>
        	<div class="col-sm-2">
            <img src="http://www.carpentrybyrob.com/img/carpentry%20by%20rob.jpg" class="img-responsive img-rounded">
            <h3>I helped someone fix the frame in their home</h3>
        	</div>
    	</div>
    </div> 
   @endif

</div>
@stop