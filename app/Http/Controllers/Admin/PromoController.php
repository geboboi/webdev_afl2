<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promos = Promo::with('event')->get();
        return view('admin.promos.index', [
            'title' => ' Sale',
            'promos' => $promos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('admin.promos.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->event) {
            Promo::create([
                'percentage' => $request->percentage,
                'event_id' => $request->event
            ]);
        } else {
            Promo::create([
                'percentage' => $request->percentage,
                'event_id' => null
            ]);
        }

        return redirect()->route('admin.promo.index')->with('success', 'Promo added successfully');
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
        $promos = DB::table('promos')
            ->select('promos.*')
            ->where('promos.id', '=', $promo->id)
            ->first();
        $promo = Promo::find($promo);
        $events = Event::all();
        return view('admin.promos.edit', [
            'title' => ' Sale',
            'promo' => $promos,
            'events' => $events
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        if ($request->event) {
            $promo->update([
                'percentage' => $request->percentage,
                'event_id' => $request->event
            ]);
        } else {
            $promo->update([
                'percentage' => $request->percentage,
                'event_id' => null
            ]);
        }

        return redirect()->route('admin.promo.index')->with('success', 'Promo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        $promo->delete();

        return redirect()->route('admin.promo.index')->with('success', 'Promo deleted successfully');
    }
}
