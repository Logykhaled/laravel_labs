<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'laravel ', 'posted_by' => 'logyn', 'creation_date' => '2022-10-22'],
            ['id' => 2 , 'title' => 'java', 'posted_by' => 'waleed', 'creation_date' => '2022-10-15'],
            ['id' => 3 , 'title' => 'java', 'posted_by' => 'waleed', 'creation_date' => '2022-10-15']

        ];

        return view('posts.index', [
          'posts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        $posts = [
            ['id' => 1, 'title' => 'first post', 'postedBy' => 'logyn', 'createdAt' => '22-10-12'],
            ['id' => 2, 'title' => 'second post', 'postedBy' => 'waleed', 'createdAt' => '22-10-2'],
            ['id' => 3, 'title' => 'third post', 'postedBy' => 'Yara', 'createdAt' => '22-10-13']
        ];
        return view('posts/show', ['posts' => $posts, 'id' => $id]);
    }
    public function edit($id)
    {
        $posts = [
            ['id' => 1, 'title' => 'first post', 'postedBy' => 'logyn', 'createdAt' => '22-10-12'],
            ['id' => 2, 'title' => 'second post', 'postedBy' => 'waleed', 'createdAt' => '22-10-2'],
            ['id' => 3, 'title' => 'third post', 'postedBy' => 'Yara', 'createdAt' => '22-10-13']
        ];
        $names = ['Ahmed', 'Omar', 'Yara'];
        return view('posts/edit', ['posts' => $posts, 'id' => $id, 'names' => $names]);
    }
    public function update($id)
    {
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        return redirect()->route('posts.index');
    }

    public function store()
    {
        return redirect()->route('posts.index');
    }
  
}