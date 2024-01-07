<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function __invoke()
    {

        try {
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = config('app.debug') == false;
            $notif = new \Midtrans\Notification();

            $transaction = $notif->transaction_status;
            $type = $notif->payment_type;
            $order_id = $notif->order_id;
            $fraud = $notif->fraud_status;
            $order = \App\Models\Order::where('order_id', $order_id)->firstOrFail();
            if ($transaction == 'capture') {
                if ($type == 'credit_card') {
                    if ($fraud == 'accept') {
                        // TODO set payment status in merchant's database to 'Success'
                        $order->payment_status = 'Paid';
                        $order->status = 'Processing';
                        $order->payment_method = $type;
                        echo 'Transaction order_id: ' . $order_id . ' successfully captured using ' . $type;
                    }
                }
            } elseif ($transaction == 'settlement') {
                // TODO set payment status in merchant's database to 'Settlement'
                $order->payment_status = 'Paid';
                $order->payment_method = $type;
                $order->status = 'Processing';
                echo 'Transaction order_id: ' . $order_id . ' successfully transfered using ' . $type;
            } elseif ($transaction == 'pending') {
                // TODO set payment status in merchant's database to 'Pending'
                $order->payment_status = 'Unpaid';
                $order->payment_method = $type;
                echo 'Waiting customer to finish transaction order_id: ' . $order_id . ' using ' . $type;
            } elseif ($transaction == 'deny') {
                // TODO set payment status in merchant's database to 'Denied'
                $order->payment_status = 'Unpaid';
                $order->payment_method = $type;
                $order->status = 'Cancelled';
                echo 'Payment using ' . $type . ' for transaction order_id: ' . $order_id . ' is denied.';
            } elseif ($transaction == 'expire') {
                // TODO set payment status in merchant's database to 'expire'
                $order->payment_status = 'Unpaid';
                $order->payment_method = $type;
                $order->status = 'Cancelled';
                echo 'Payment using ' . $type . ' for transaction order_id: ' . $order_id . ' is expired.';
            } elseif ($transaction == 'cancel') {
                // TODO set payment status in merchant's database to 'Denied'
                $order->payment_status = 'Unpaid';
                $order->payment_method = $type;
                $order->status = 'Cancelled';
                echo 'Payment using ' . $type . ' for transaction order_id: ' . $order_id . ' is canceled.';
            }

            $order->save();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
