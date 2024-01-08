<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.orders.index', [
            'title' => "Orders",
            'orders' => $order
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $orderCount = Order::all()->count();
         return view('admin.dashboard', compact('orderCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ordid)
    {
        $orders = Order::where('id', $ordid)->first();
        return view('admin.orders.edit', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'address' => $request->address,
            'post_code' => $request->postcode,
            'email' => $request->email,
            'phone' => $request->phone,
            'order_notes' => $request->notes ?? null,
            'total_amount' => $request->total_amount,
            'payment_status' => $request->payment_status,
            'payment_method' => $request->payment_method,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.order.index')->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.order.index')->with('success', 'Order deleted successfully');
    }
}
