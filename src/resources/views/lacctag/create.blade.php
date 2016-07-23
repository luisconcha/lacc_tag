@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Create Tag</h3>

        {!! Form::open(['method'=>'post', 'route'=>['admin.tags.store']]) !!}

        @include('lacctag::_form')

        <div class="form-group">
            {!! Form::submit('Create tag', ['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}
    </div>
@endsection