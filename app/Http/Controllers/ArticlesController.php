<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Requests\ArticleFormRequest;
use App\Http\Controllers\Controller;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::Simplepaginate(5);
    	// $articles = Article::paginate(5);
    	return view('articles/home', compact('articles'));
    }

    public function show($id)
    {
    	$article = Article::find($id);
    	return view('articles/show')->with('article', $article);
    }

    public function create()
    {
        return view('articles/create');
    }

    public function store(ArticleFormRequest $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Article::create([
            'title'   => $title,
            'content' => $content
        ]);
        return redirect('/');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles/edit')->with('article', $article);
    }

    public function update($id, ArticleFormRequest $request)
    {
        $article = Article::find($id);

        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->save();

        // $article->update([
        //     'title'   => $request->input('title'),
        //     'content' => $request->input('content')
        // ]);
        // 
        // return redirect()->route('articles.index')
        return redirect('/');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/');
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $articles = Article::where('title', 'LIKE', "%".$keyword."%")->orWhere('content', 'LIKE', "%".$keyword."%")->get();
        return view('articles/search', compact('articles'), compact('keyword'));
    }
}
