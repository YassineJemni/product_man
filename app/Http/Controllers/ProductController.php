<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 

        return view('products.index', [
            'products' => $products
        ]);
    }
    public function create()
    {
        return view('products.create');
    }
    
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }
    
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'price' => ['required', 'numeric', 'min:0'],
            'country_producer' => ['required', 'min:2']
        ]);
        
        Product::create([
            'title' => request('title'),
            'price' => request('price'),
            'country_producer' => request('country_producer')
        ]);
        
        return redirect('/products');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    
    public function update(Product $product)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'price' => ['required', 'numeric', 'min:0'],
            'country_producer' => ['required', 'min:2']
        ]);
        
        $product->update([
            'title' => request('title'),
            'price' => request('price'),
            'country_producer' => request('country_producer')
        ]);
        
        return redirect('/products/' . $product->id);
    }
    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}