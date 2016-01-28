@extends('layouts.master')

@section('content')
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/slide3.jpg" alt="">
		      <div class="carousel-caption">
		        Make A Difference
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/slide2.jpg" alt="">
		      <div class="carousel-caption">
		        Have Your Organization Join
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/slide1.jpg" alt="">
		      <div class="carousel-caption">
		        Be a Helpster
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
    <div class="container header-start text-center">
        <div class="heading-icon">
          <i class="fa fa-3x fa-heart"></i>
        </div>

      <h1 class="main-text">Help Someone Today</h1>
      <p class="text-center sub-text">Helpster is designed to serve communities in the most direct way. If you know someone who needs help - nominate them, if you are an organization who needs volunteers - you will find them here. If you have the heart of a servant, you will find people who need your help here.</p>
    </div>

    <div class="divider col-sm-12 col-xs-12 col-md-12">
      <div class="header-text"><span>Events</span></div>
    </div>

			<section class="blog">
				@foreach($events as $event)
          <div class="item col-md-4">
             <div class="blok-read-sm">
               <a href="{{{action('EventsController@show', $event->id)}}}" class="hover-image">
                  {{-- <img src="/images/organizations/{{{$event->image}}}" alt="image"> --}}
                  <span class="layer-block"></span>
               </a>
                <div class="editor-choice">
                    <i class="fa fa-star"></i>
                    <a href="{{{action('EventsController@show', $event->id)}}}">Editor’s Choice</a>
                </div>
              <div class="content-block">
                <span class="point-caption bg-blue-point"></span>
                <span class="bottom-line bg-blue-point"></span>
                  <h4>{{{$event->name}}}</h4>
                  <p>{{{$event->description}}}</p>
                  <div>
                    <a href="{{{action('EventsController@show', $event->id)}}}" class="button-main bg-fio-point">Read More</a>
                  </div>
              	</div>
              </div>
            </div>
            @endforeach
            
            </section>
@stop
