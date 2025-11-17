<?php

// ho inserito i cambiamenti indicati  (update controller e metodi, rimossa CDN Bootstrap, vista welcome spostata, rotta aggiornata in web.php e utilizzo controller, aggiornamento dati memorizzazione prodotto) nel primo e nel secondo commento, ripropongo il selfwork per vs correzione sperando che sia corretto, e in caso di ulteriori errori riprenoto Q&A, grazie mille del supporto e del prezioso feedback :) - Alberto!

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // lista dei products
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    // form per aggiunta a shop
    public function create()
    {
        return view('welcome'); 
    }

    // salvataggio nuovo prodotto
    public function store(Request $request)
    {
        Product::create($request->only(['name', 'description', 'price']));

        return redirect()->route('home');
    }
}
