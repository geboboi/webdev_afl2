<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $products = DB::table('products')
        ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
        ->leftJoin('events', 'promos.event_id', '=', 'events.id')
        ->select('promos.*', 'events.*', 'products.*')
        ->get();

    return view('admin.products.index', [
        'title' => 'Products',
        'products' => $products
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.products.create');
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

        return view('admin/products/product', [
            'products' => $products
        ]);
        // return json_encode($products);
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
