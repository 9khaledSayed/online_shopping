<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Order;
class CustomerController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $orders = Order::where('customer_id',Auth::guard('customer')->user()->id)->get();
        return view('customer.myaccount',compact('categories','orders',$categories,$orders));
    }

    public function updateInfo(Request $request)
    {
        $user = Customer::find(Auth::guard('customer')->user()->id);

        $user->name    = $request['name'];
        $user->address = $request['address'];
        $user->phone   = $request['phone'];
        $user->email   = $request['email'];
        $user->save();

        return redirect()->back();
    }

    public function updatePw(Request $request)
    {
        $user = Customer::find(Auth::guard('customer')->user()->id);
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user->password    = $request['password'];
        $user->save();
        return redirect()->back();

    }

}
