<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shops.index', [
            'title' => 'Contact Us',
            'shops' => $shops
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            Shop::create([
                'name' => $request->name,
                'address' => $request->address,
                'operational_time' => $request->operational_time,
                'map' => $request->map
            ]);

        return redirect()->route('admin.shop.index')->with('success', 'New Shop added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        $shops = DB::table('shops')
        ->select('shops.*')
        ->where('shops.id', '=', $shop->id)
        ->first();
        $shop = Shop::find($shop);

        return view('admin.shops.edit', compact('shops'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->update([
            'name' => $request->name,
            'address' => $request->address,
            'operational_time' => $request->operational_time,
            'map' => $request->map
        ]);
        return redirect()->route('admin.shop.index')->with('success', 'Shop updated successfully');

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();

        return redirect()->route('admin.shop.index')->with('success', 'Event deleted successfully');
    }
}
