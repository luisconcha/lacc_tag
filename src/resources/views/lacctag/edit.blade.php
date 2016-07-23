@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Edit Tag: {{$tag->name}}</h3>

        {!! Form::model($tag, ['route'=>['admin.tags.update','id'=>$tag->id], 'method'=>'put']) !!}

        @include('lacctag::_form')

        <div class="form-group">
            {!! Form::submit('Edit', ['class'=>'btn btn-primary','id'=>'Edit', 'name'=>'Edit']) !!}
            <a href="{{route('admin.tags.index')}}" class="btn btn-warning">Return</a>
        </div>

        {!! Form::close() !!}
    </div>
@endsection