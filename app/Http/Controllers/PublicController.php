<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        
        // Per i prodotti e pacchetti dell'user
        $products = Product::where('user_id', $user->id)->get();
        
        // Per gli articoli pubblicati dall'user
        $articles = Article::where('user_id', $user->id)->get();
        
        return view('profile', compact('user', 'products', 'articles'));
    }
}


