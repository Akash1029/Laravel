<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	public function isBest()
	{
		return $this->id === $this->article->best_replies_id ;
	}
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

    public function author()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
