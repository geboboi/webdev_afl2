<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($showpromo)
    {
        $products = DB::table('products')
            ->join('promos', 'products.promo_id', '=', 'promos.id')
            ->join('events', 'promos.event_id', '=', 'events.id')
            ->select('products.*', 'promos.*', 'events.*')
            ->where('events.id', '=', $showpromo)
            ->get();

        return view('promos/promo_detail', [
            'title' => ' Sale',
            'products' => $products
            // 'promos' => $promo
        ]);
        // return json_encode($products);
    }

    public function discount($id)
    {
        $promo = Promo::with('product')->find($id);
        return view('promos/promo_detail', [
            'title' => ' Sale',
            'promos' => $promo
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromoRequest $request, Promo $promo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        //
    }
}
