@extends('layouts.app')
@section('title') Home @endsection
@section('content')
<div style="text-align:center">
    <a href="{{route('posts.create')}}" style='font-family:cursive'>
        <button  class="mt-5 btn btn-primary"><b>Create Post</b><button>
    </a>
</div>
<table class="table mt-5 w-50 mx-auto" style="text-align:center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted by</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($posts as $post)
      <tr>
        <td>{{$post['id']}}</th>
        <td>{{$post['title']}}</td>
        <td>{{$post->user ? $post->user->name : 'Not Defined'}}</td>
        <td>{{$post['creation_date']}}</td>
        <td>
            <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
            <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
</table>

@endsection
