<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        // dd('teste');
        $orders = Order::all();
        return view('dashboard.orders', compact('orders'));
    }
}
