<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Promo;
use Illuminate\Support\Facades\DB;

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
        $products = DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->select('promos.*', 'events.*', 'products.*')
            ->get();

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
        $products = DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->select('promos.*', 'events.*', 'products.*')
            ->where('products.id', '=', $showproduct->id)
            ->first();

        return view('products/product_detail', [
            'title' => 'Product Details',
            'product' => $products
        ]);
        // return json_encode($products);
    }

    public function showWishlist(Product $showproduct)
    {
        $products = DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->select('promos.*', 'events.*', 'products.*')
            ->where('products.id', '=', $showproduct->id)
            ->first();

        return view('wishlist', [
            'title' => 'Wishlist',
            'product' => $products
        ]);
        // return json_encode($products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

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
