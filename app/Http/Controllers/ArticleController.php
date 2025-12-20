<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticleEditRequest;

class ArticleController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $articles = Article::with('user')->get();
        return view('article.index', compact('articles'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        $tags = Tag::all();
        return view('article.create', compact('tags'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(ArticleRequest $request)
    {
        
        $path = $request->file('img')->store('img', 'public');
        
        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $path,
            'user_id'=>Auth::user()->id
        ]);
        
        $article->tags()->attach($request->tags);
        
        return redirect()->route('article.index')->with('successMessage', 'Articolo inserito correttamente');
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
        $tags = Tag::all();

        if($article->user_id == Auth::user()->id){
            return view('article.edit', compact('article', 'tags'));
        }else{
            return redirect()->route('article.index')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(ArticleEditRequest $request, Article $article)
    {
        if($article->user_id == Auth::user()->id){
            $article->update([
                $article->title = $request->title,
                $article->subtitle = $request->subtitle,
                $article->body = $request->body,
            ]);

            $article->tags()->sync($request->tags);
            
            if($request->img){
                $request->validate(['img'=>'image']);
                $article->update([
                    $article->img = $request->file('img')->store('img', 'public'),
                    
                ]);
            }
            return redirect()->route('article.index')->with('successMessage', 'Articolo modificato correttamente');
        }else{
            return redirect()->route('article.index')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Article $article)
    {
        if($article->user_id == Auth::user()->id){
            $article->tags()->detach();
            $article->delete();
            return redirect()->route('article.index');
        }else{
            return redirect()->route('article.index')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
}
