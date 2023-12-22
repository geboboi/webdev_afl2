<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Promo;
use Illuminate\Http\Request;
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
        $promos = Promo::all();
        return view('admin.products.create', compact('promos'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->desc,
            'image' => $request->image,
            'promo_id' => $request->promo
            // Sesuaikan atribut dan nilai-nilai yang sesuai dengan model dan tabel di database
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $showproduct)
    {
        // $products = DB::table('products')
        //     ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
        //     ->leftJoin('events', 'promos.event_id', '=', 'events.id')
        //     ->select('promos.*', 'events.*', 'products.*')
        //     ->where('products.id', '=', $showproduct->id)
        //     ->first();

        // return view('admin/products/product', [
        //     'products' => $products
        // ]);
        // return json_encode($products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $products = DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->select('promos.*', 'events.*', 'products.*')
            ->where('products.id', '=', $product->id)
            ->first();

        // $promos = Promo:all();
        // return view('admin/products/product', [
        //     'products' => $products
        // ]);

        // $product->load('promo.event'); // Assuming the relationships are named 'promo' and 'event'

        $promos = Promo::all(); // Loading all promos for selection in the view

        return view('admin.products.edit', compact('products', 'promos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->desc,
            'promo_id' => $request->promo
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully');
    }
}
