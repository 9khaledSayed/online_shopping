<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends CRUDController
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


}
