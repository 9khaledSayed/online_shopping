<?php


namespace App\Http\Controllers\dashboard;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        return view('dashboard.customers.index', compact('customers'));
    }
}
