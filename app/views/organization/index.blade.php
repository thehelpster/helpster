@extends('layouts.master')
@section ('top-script')
<!-- Custom CSS -->
    <link rel="stylesheet" href="css/helpster.css">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
@stop

@section('content')
<div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text"><span>Organizations You Can Help</span></div>
    </div>

   <!-- Page Content -->

            <div class="featured-blog container">
              @foreach($organizations as $organization)
                <h3> <a href="{{{action('OrganizationsController@show', $organization->id)}}}"><img src="/images/clients/{{{$organization->image}}}"></a></h3>
                {{ $organizations->links() }}
              @endforeach
            </div>
@stop
             