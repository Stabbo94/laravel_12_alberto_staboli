<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(){
        return view('tag.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:50'
        ]);
        Tag::create([
            'name' =>$request->name
        ]);
        return redirect()->route('home')->with('successMessage', 'Tag inserito correttamente');
    }
}