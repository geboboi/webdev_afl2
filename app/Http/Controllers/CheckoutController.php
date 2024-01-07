<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function getDistrict()
    {
        return view('orders.checkout', [
            'title' => "Checkout",
        ]);
    }

    public function create(Request $request)
    {

        $datePart = strtoupper(date('Ymd')); // Mengubah tanggal menjadi huruf kapital
        $randomPart = strtoupper(uniqid());
        $transactionId = 'MICH-' . $datePart  . $randomPart;
        $transactionId = strtoupper($transactionId);
        // $kecamatan = $request->kecamatan;
        $kecamatan = \Indonesia::findDistrict($request->kecamatan);
        $kelurahan = \Indonesia::findVillage($request->kelurahan);
        // = $request->kelurahan;

        $phoneNumber = $request->phone;

        // Menghilangkan angka nol pertama jika ada
        if (substr($phoneNumber, 0, 1) === '0') {
            $phoneNumber = substr($phoneNumber, 1);
        }
        $address = $request->address1 . ', ' . $kecamatan->name . ', ' . $kelurahan->name;
        if ($request->has('address2')) {
            $address .= ', ' . $request->address2;
        }

        Order::create([
            'user_id' => Auth::id(),
            'order_id' => $transactionId,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'address' => $address,
            'post_code' => $request->postcode,
            'email' => $request->email,
            'phone' => "+62" . $phoneNumber,
            'order_notes' => $request->details ?? null,
            'total_amount' => 1234567,
        ]);

        return redirect()->route('payment', $transactionId);
    }
}
