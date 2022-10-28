<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      $allPosts = Post::all();
    return view('posts.index', [
        'posts' => $allPosts
      ]);
        //return view('posts.index',compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $allUsers = User::all();

        return view('posts.create',[
            'allUsers' => $allUsers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->all();

        // request()->title
        // request()->description
        // request()->post_creator
        // dd($data, request()->title, request()->post_creator);

        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]); //insert into posts ('ahmed','asdasd')

        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    
        $allPosts = Post::find($id);
        return view('posts.show',['posts'=>$allPosts ,'id'=>$id]);
        // return view('posts.show')->with('id',$id);
        //return view('posts.show',compact('id','name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allPosts = Post::find($id);
        return view('posts.edit',['posts'=>$allPosts ,'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update( $id)
    // {
    //     $data = request()->all();
       
    //     Post::where('id', $id)->update(['title' => $data['update_title'],
    //     'description' => $data['update_description']]);
     
    //     return to_route('posts.index');
       
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
