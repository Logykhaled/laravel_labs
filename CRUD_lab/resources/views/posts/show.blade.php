@extends('layouts.app')

@section('title') Show details @endsection
@section('content')
<div class="w-50 mt-5 mx-5">
  
    @if(($posts['id']) == $id)
    <div class="card">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <div><b>Title:</b> {{$posts['title']}}</div><br>
            <div><b>Description:</b> {{$posts['description']}}</div>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <div><b>Name:</b> {{$posts->user ? $posts->user->name : 'Not Defined'}}</div>
            <div><b>Created at:</b> {{$posts['created_at']}}</div>
        </div>
    </div>
</div>
@endif

@endsection
