<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function create()
    {
        return view('tag.create');
    }
    
    
    public function index()
    {
        $tags = Tag::all()->sortBy('name');
        return view('tag.index', compact('tags'));
    }
    
    
    public function show(Tag $tag)
    {
        
        $articles = $tag->articles()->orderBy('title')->get();
        
        return view('tag.show', compact('tag', 'articles'));
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);
        
        Tag::create([
            'name' => $request->name
        ]);
        
        return redirect()->route('home')->with('successMessage', 'Tag inserito correttamente');
    }
}
