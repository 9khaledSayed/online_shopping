<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends CRUDController
{


    public function index()
    {
        return view('customer');

    }


}
