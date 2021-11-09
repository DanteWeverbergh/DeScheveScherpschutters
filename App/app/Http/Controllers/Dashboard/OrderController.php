<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Orderview()
    {
        return view('dashboard.orders', [
            'orders' => Order::all()
        ]);
    }
}
