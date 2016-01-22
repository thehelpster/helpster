@extends ('layouts.master')

@section('top-script')
     <link rel="stylesheet" href="css/helpster.css">
@stop

@section ('content')

    <div class="container">  
        <div class="row">
            <div class="col-md-6 col-md-offset-4">                         
                <h2>CONTACT US</h2>
            {{-- {{ Form::open(array('action' => 'HomeController@postLogin')) }} --}}
                <div class="form-group">
                   {{Form::label('from', 'Your name')}}
                   {{Form::text('from', null, array('class' => 'name', 'placeholder' => 'Enter your name', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{Form::label('email', 'Your email')}}
                   {{Form::text('email', null, array('class' => 'name', 'placeholder' => 'Enter your email', 'class'=>'form-control'))}}
                </div>
            
                <div class="form-group">
                   {{Form::label('subject', 'Subject')}}
                   {{Form::text('subject', null, array('class' => 'name', 'placeholder' => 'Enter subject', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{Form::label('body', 'Body')}}
                   {{Form::textarea('body', null, array('class' => 'name', 'rows' => '4', 'placeholder' => 'Enter your message', 'class'=>'form-control'))}}
                </div>                
                <div id="success">
                    {{Form::submit('Send email', array('class'=> 'btn btn-primary'))}}
                    <hr>
                </div>
            {{-- {{Form::close()}} --}}

            </div> <!--for column-->
        </div> <!-- for row-->
</div><!-- container -->
@stop