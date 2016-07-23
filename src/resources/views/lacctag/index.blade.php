@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Tags</h1>

        <a href="{{route('admin.tags.create')}}">Create Tag</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach($listTags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                        <a href="{{route('admin.tags.edit',['id'=>$tag->id])}}">Edit</a> |
                        <a href="{{route('admin.tags.destroy',['id'=>$tag->id])}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection