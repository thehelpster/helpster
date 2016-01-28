@extends('layouts.master')

@section('content')
{{-- 	This section, top left, is for user-info --}} 

<div class="container">
<div class="row">
    <div class="col-md-6">
    	<div class="row">
    	</div>
    		<div class="col-sm-4">
    			<img class="img-responsive img-rounded" src="/img/{{{ $rsvp->image }}}">
    		</div>
        <h1>{{{$rsvp->first_name}}} {{{$rsvp->last_name}}}</h1>
    	<h3>{{{$rsvp->quote}}}</h3>
        <header>
            <h2>About {{{$rsvp->first_name}}} {{{$rsvp->last_name}}}</h2>
            <div>
                <p> {{{$rsvp->about}}}</p>
            </div>
        </header>
       {{--  @if (Entrust::is('site_admin'))
            <h1>You're an admin</h1>
        @endif --}}
        <ul>
        	<li>Member since: <em>{{{ $rsvp->created_at }}}</em></li>
            <li>From: <em>{{{ $rsvp->zip }}}</em></li>
        </ul>
    </div>
    {{--This section is placed at the top right, this is users past work --}}
    <div class="col-md-6">
    	<div class="row">
        	<h2>{{{$rsvp->first_name}}}'s Organizations</h2>
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
        	<h2>{{{$rsvp->first_name}}} {{{$rsvp->last_name}}}'s Recent Work</h2>
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

</div>
@stop