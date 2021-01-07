<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
    	$test = \DB::table('post')->where('slug', $slug)->first();
	// $test=[
	// 	'my_first_post'=> "First project :)",
	// 	'my_second_post'=> "die :)" 
	// ];
    return view('test', [
    	'post'=> $test
    ]);
	}
}
