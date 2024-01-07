<?php

namespace App\Http\Controllers;

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
        //
    }

    public function checkout($ordid)
    {


        $order = Order::where('order_id', $ordid)->first();
        // $request->request->add(['total_amount' => '100000', 'payment_status' => 'Unpaid']);
        // $order = Order::create($request->all());
        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-php

Alternatively, if you are not using **Composer**, you can download midtrans-php library
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require
the file manually.

require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */
        if ($order->snaptoken) {
            $snapToken = $order->snaptoken;
            $title = 'Payment Order | ' . $order->order_id;

        } else {
            //SAMPLE REQUEST START HERE
            $title = 'Payment Order | ' . $order->order_id;
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $order->order_id,
                    'gross_amount' => $order->total_amount,
                ),
                'customer_details' => array(
                    'first_name' => $order->first_name,
                    'last_name' => $order->last_name,
                    'email' => $order->email,
                    'phone' => $order->phone,
                ),
                'shipping_address' => array(
                    'address' => $order->address,
                    'postal_code' => $order->post_code,
                    'country_code' => "IDN",
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $order->snaptoken = $snapToken;
            $order->save();
        }

        return view('orders.payment', compact('title', 'snapToken', 'order'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function success(Request $request)
    {
        $order = Order::where('order_id', $request->order_id)->first();
        if ($order->payment_status == 'Paid') {
            $success = 1;
            $title = "Order Completed";
        } else if ($order->status == "Cancelled") {
            $success = 2;
            $title = "Order Cancelled";
        } else {
            $title = "Waiting Payment";
            $success = 0;
        }
        return view('orders.order_complete', [
            'title' => $title,
            'success' => $success,
            'order' => $order
        ]);
    }

    public function track(Request $request)
    {

        $order = Order::where('order_id', $request->order_id)->first();
        if ($order->payment_status == 'Paid' && $order->status == "New") {
            $success = 1;
        } else if ($order->status == "Processing") {
            $success = 2;
        } else if ($order->status == "On Delivery"){
            $success = 3;
        } else if ($order->status == "Delivered"){
            $success = 4;
        } else {
            return redirect()->route('success', $order->order_id);
        }
        return view('orders.track_page', [
            'title' => "Tracking",
            'order' => $order,
            'status' => $success
        ]);
    }
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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
