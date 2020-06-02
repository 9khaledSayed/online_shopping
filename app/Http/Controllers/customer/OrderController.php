<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;
use App\Product;
use App\Cart;
use App\Order;
use App\Category;

use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_id = Auth::guard('customer')->user()->id;


        $customer_cart = Cart::where('customer_id',$customer_id)->get();

        $sub_total = 0;
        foreach($customer_cart as $cart)
        {
            $product = Product::find($cart->product_id);
            $sub_total += $product->price;
        }

        $categories = Category::get();

        return view('customer.order',compact('customer_cart','sub_total','categories',$customer_cart,$sub_total,$categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string'],
            'phone' => ['required'],
            'email' => ['required','string'],
            'address' => ['required','string'],
        ]);

        $carts = Cart::where('customer_id',Auth::guard('customer')->user()->id)->get();


        foreach ($carts as $cart)
        {

            $product = Product::find($cart->product_id);

            Order::create([
                'customer_id' => Auth::guard('customer')->user()->id,
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'country' => $request['country'],
                'government' => $request['government'],
                'city' => $request['city'],
                'address' => $request['address'],
                'product_name' =>  $product->name,
                'product_price' =>  $product->price,
                'quantity' =>  $cart->quantity,
                'amount' =>  $cart->quantity * $product->price,
            ]);

            Cart::where('id',$cart->id)->delete();
        }

        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
