@extends('layouts.app')

@section('title') edit @endsection
@section('content')



    <form class="w-50 mt-5 mx-5"  action="">
    @method('PUT')
    @csrf
    <div class="form-group mb-5">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input   name="update_title" type="text" class="form-control" value="{{$posts['title']}}">
    </div>
    <div class="form-group mb-5">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <textarea   name="update_description" type="text" class="form-control" rows="3">{{$posts['description']}}</textarea>
    <div>
        <label for="exampleInputEmail1" class="form-label">Post Creator</label>
        <select  name="update_postCreator" class="form-select mb-5">
          <option> {{$posts->user ? $posts->user->name : 'Not Defined'}}</option>
        </select>
    </div>
   <button class="btn btn-primary">SAVE</button>
</form>

@endsection