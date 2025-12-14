<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductEditRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'create');
    }
    
    // Lista dei prodotti
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    public function create()
    {
        return view('product.create');
    }
    
    public function edit(Product $product)
    {
        if($product->user_id == Auth::user()->id){
            return view('product.edit', compact('product'));
        }else{
            return redirect()->route('product.index')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
    
    
    
    // Salvataggio di un nuovo prodotto
    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price'=> $request->price,
            'img'=> $request->file('img')->store('img', 'public'),
            'user_id'=>Auth::user()->id
        ]);        
        
        
        
        return redirect()->route('product.index')->with('alert', 'Inserimento effettuato correttamente!');;
    }
    
    /**
    * Update.
    */
    public function update(ProductEditRequest $request, Product $product)
    {
        if($product->user_id == Auth::user()->id){
            $product->update([
                $product->name = $request->name,
                $product->description = $request->description,
                $product->price = $request->price,
            ]);
            
            if($request->img){
                $request->validate(['img'=>'image']);
                $product->update([
                    $product->img = $request->file('img')->store('img', 'public'),
                    
                ]);
            }
            return redirect()->route('product.index')->with('successMessage', 'Prodotto / pacchetto modificato correttamente');
        }else{
            return redirect()->route('product.index')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
        
    }
    
    /**
    * Remove the product from storage.
    */
    public function destroy(Product $product)
    {
        if($product->user_id == Auth::user()->id){
            $product->delete();
            return redirect()->route('product.index')->with('successMessage', 'Prodotto / pacchetto eliminato correttamente');
        }else{
            return redirect()->route('product.index')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
    
}
