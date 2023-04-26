<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cat;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $cats = Cat::all();
        
        return view('back.products.create', [
            'cats' => $cats
        ]);
    }

    
    public function store(StoreProductRequest $request)
    {
        //
    }

    
    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        //
    }

    
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    
    public function destroy(Product $product)
    {
        //
    }
}
