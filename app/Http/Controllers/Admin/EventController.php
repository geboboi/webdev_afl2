<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', [
            'title' => 'Available Promos',
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $imagePath = $image->store('images', ['disk' => 'public']);
            Event::create([
                'event_name' => $request->name,
                'banner' => $imagePath,
                'description' => $request->desc,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);
        } else {
            Event::create([
                'event_name' => $request->name,
                'banner' => NULL,
                'description' => $request->desc,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);
        }
        return redirect()->route('admin.event.index')->with('success', 'New Event added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($event)
    {
        $products = DB::table('products')
            ->join('promos', 'products.promo_id', '=', 'promos.id')
            ->join('events', 'promos.event_id', '=', 'events.id')
            ->select('promos.*', 'events.*','products.*')
            ->where('events.id', '=', $event)
            ->get();
            $event = Event::find($event);

        return view('promos/promo_detail', [
            'title' => ' Sale',
            'products' => $products,
            'event' => $event
        ]);
                // return json_encode($event);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $events = DB::table('events')
        ->select('events.*')
        ->where('events.id', '=', $event->id)
        ->first();
        $event = Event::find($event);

        return view('admin.events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        if ($request->hasFile('banner')) {
            if($event->banner){
                Storage::disk('public')->delete($event->banner);
            }

            $image = $request->file('banner');
            $imagePath = $image->store('images', ['disk' => 'public']);
            $event->update([
                'event_name' => $request->name,
                'banner' => $imagePath,
                'description' => $request->desc,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);
        } else {
            $event->update([
                'event_name' => $request->name,
                'description' => $request->desc,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date
            ]);
        }
        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if($event->banner){
            if(Storage::disk('public')->exists($event->banner) ){
                Storage::disk('public')->delete($event->banner);
            }
        }
        $event->delete();

        return redirect()->route('admin.event.index')->with('success', 'Event deleted successfully');
    }
}
