<?php

namespace App\Http\Controllers\dashboard;

use App\UserProfile; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index()
    {
        return view('dashboard.user_profile.index');
    }

   

    public function update()
    {
       
    }

}
