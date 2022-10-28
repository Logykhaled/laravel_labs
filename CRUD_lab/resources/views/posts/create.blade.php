@extends('layouts.app')

@section('title') create @endsection
@section('content')
        <form action="{{route('posts.store')}} " method="POST">
       
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                <select class="form-control" name="post_creator" >
                @foreach ($allUsers as $user)
                    <option>{{$user->id}}</option>
                @endforeach
                </select>
              </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
   
@endsection