<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Reply $reply)
    {
    	$this->authorize('update', $reply->article);

    	$reply->article->setBestReply($reply);

    	return back();
    }
}
