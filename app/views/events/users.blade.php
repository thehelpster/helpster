@extends('layouts.master')

@section('content')
	<div class="container">
		<table class="table table-bordered table-striped">
			<tr>
				<th class="col-md-1">Image</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th class="col-md-1">E-Mail</th>
			</tr>
			@foreach ($rsvps->rsvps as $rsvp)
			
				<tr class='table table-hover table-bordered body'>
					<td><img src="{{{$rsvp->image}}}"  class="img-responsive"></td>
					<td>{{{$rsvp->first_name}}}</td>
					<td>{{{$rsvp->last_name}}}</td>  
					<td>{{{$rsvp->email}}}</td>
				</tr>
			@endforeach
		</table>
	</div>
@stop