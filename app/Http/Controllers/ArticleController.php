<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleEditRequest;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('article.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(ArticleRequest $request)
    {
        
        $path = $request->file('img')->store('img', 'public');
        
        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $path
        ]);
        return redirect()->route('article.index')->with('successMessage', 'Articolo modificato correttamente');
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(ArticleEditRequest $request, Article $article)
    {
        $article->update([
            $article->title = $request->title,
            $article->subtitle = $request->subtitle,
            $article->body = $request->body,
        ]);
        
        if($request->img){
            $request->validate(['img'=>'image']);
            $article->update([
                $article->img = $request->file('img')->store('img', 'public')
            ]);
        }
        return redirect()->route('article.index')->with('successMessage', 'Articolo modificato correttamente');
        
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('successMessage', 'Articolo cancellato correttamente');
    }
}
