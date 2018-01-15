<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{





  public function show($id){

    $post = Post::find($id);

//    return $post->user;

    return view('posts.show')
      ->with('post', $post);
  }

  public function index(){
    $posts = Post::all();

    return view('posts.index')
      ->with('posts', $posts);
  }




}
