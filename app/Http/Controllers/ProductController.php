<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Promo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products_home = Product::latest()->take(3)->get();
        return view('index', [
            'title' => "Mich's Kitchen",
            'products_home' => $products_home
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list()
    {
        $products = Product::all();
        return view('products/product', [
            'title' => 'Products',
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $showproduct)
    {
        $product = Product::find($showproduct->id);
        return view('products/product_detail', [
            'title' => 'Product Details',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
