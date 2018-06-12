<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()

    {

      $posts = Post::latest()->get();

      return view ('home', compact('posts'));

    }

    public function show(Post $post )

    {

             return view ('posts.show', compact('post'));

    }


    public function top()

    {

      return view ('posts.top100');

    }

    public function create()

    {

      return view ('posts.create');

    }

    public function store()

    {

      $this->validate(request(), [

        'title' => 'required',
        'body'  => 'required',
        'picture' => 'required',
        'preview' => 'required'

      ]);

      Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'picture' => request('picture'),
        'preview' => request('preview'),
        'user_id' => auth()->id()
      ]);

      return redirect('/');


    }


    public function __construct()

    {

      $this->middleware('auth')->except(['index', 'show', 'top']);


    }







}
