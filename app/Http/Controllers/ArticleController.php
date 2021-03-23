<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

	public function index()
	{
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            }
            else {

              $articles = Article::all();
		      // $articles = Article::latest()->get();
                
            }

		return view('article.index', ['articles' => $articles]);
	}

    public function show(Article $article)
    {
    	// $article = Article::findOrFail($id);

    	return view('article.show', ['article' => $article ]);
    }

    public function create()
    {
    	return view('article.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        //Create New Article

        // dd(request()->all());
        $this->validateArticle();

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));
        // $article->tags()->attach($tag);
        return redirect(route('article.index'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
