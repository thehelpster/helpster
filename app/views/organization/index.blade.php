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

    <div class="container">
      <div class="row">
        @foreach($organizations as $organization)
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="{{{action('OrganizationsController@show', $organization->id)}}}">
                  <img class="image thumbnail" src="/images/organizations/{{{$organization->image}}}">
                </a>
            
          </div>
            {{ $organizations->links() }}
        @endforeach
      </div>
    </div>
@stop
             