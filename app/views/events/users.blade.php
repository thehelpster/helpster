@extends('layouts.master')

@section('content')
	<div class="container table-responsive">
		<table class="table">
			<tr>
				<th class="col-md-1">Image</th>
				<th class="col-md-4">Name</th>
				<th class="col-md-4">E-Mail</th>
			</tr>
			@foreach ($rsvps->rsvps as $rsvp)
			
				<tr class='table table-hover table-bordered body'>
					<td><img src="{{{$rsvp->image}}}"  class="img-responsive"></td>
					<td><a href="{{{ action('VolunteerController@viewUser', $rsvp->id) }}}">{{{$rsvp->first_name}}} {{{$rsvp->last_name}}}</a></td>  
					<td>{{{$rsvp->email}}}</td>
				</tr>
			@endforeach
		</table>
	</div>
@stop