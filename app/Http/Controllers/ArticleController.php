<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

	public function index()
	{
		$articles = Article::latest()->get();

		return view('article.index', ['articles' => $articles]);
	}

    public function show($id)
    {
    	$article = Article::find($id);

    	return view('article.show', ['article' => $article ]);
    }

    public function create()
    {
    	return view('article.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        // dump(request()->all());
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();


        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::find($id);


        // return view('article.edit' ['article' => $article]);
        return view('article.edit', compact('article'));
    }

    public function update($id)
    {
        $article = Article::find($id);

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' .$article->id);
    }
}
