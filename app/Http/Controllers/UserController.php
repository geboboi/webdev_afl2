<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function order(){
        $user = User::find(Auth::id());
        $order = Order::where('user_id', Auth::id())->get();
        $orderCount = Order::where('user_id', Auth::id())->count();
        return view('account.order_history', [
            'title' => 'Order History',
            'order' => $order,
            'user' => $user,
            'orderCount' => $orderCount
        ]);
    }

    public function profile (){
        $user = User::find(Auth::id());
        return view('account.profile', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }
}
