@extend('layout.master')

@section('content')
{{-- Need updates columns in 'users' table --}}
<div class="site-heading">
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

      <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
        {{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name')}}
        {{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
        {{ Form::label('last_name', 'Last Name')}}
        {{ Form::text('last_name')}}
        {{ $errors->first('zip', '<span class="help-block">:message</span>') }}
        {{ Form::label('zip', 'Zip Code')}}
        {{ Form::text('zip')}}
        {{ $errors->first('quote', '<span class="help-block">:message</span>') }}
        {{ Form::label('quote', 'Quote')}}
        {{ Form::text('quote')}}
        {{ $errors->first('about', '<span class="help-block">:message</span>') }}
        {{ Form::label('about', 'About me') }}
        {{ Form::textarea('about')}}
      </div>

      <button type="submit" class="btn btn-default">Submit Changes</button>
    {{ Form::close() }}
</div>

@stop