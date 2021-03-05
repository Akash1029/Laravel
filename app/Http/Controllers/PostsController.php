<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

   	 //$post = DB::table('posts')->where ('slug', $slug)->first();

   	 // return view('post',[
   	 // 	'post' => Post::where('slug', $slug)->firstOrFail()
   	 // ]);
      return view('post');
   }
}
