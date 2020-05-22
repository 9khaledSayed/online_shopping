<?php

namespace App\Http\Controllers\dashboard;

use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::get();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect(route('dashboard.orders.index'));
    }

    public function update($id)
    {
        $orders = Order::find($id);

        $orders->status='Confirmed';
        $orders->save();

        return redirect('/dashboard/orders');
    }

}
