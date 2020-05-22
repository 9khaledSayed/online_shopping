<?php

namespace App\Http\Controllers\dashboard;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user= Admin::find($id);
         if($request->password != null){
            $this->validate($request, [
                'password' => ['', 'min:8', 'confirmed'],
            ]);
            $user->update([
                'password' => Hash::make($request['password']),
            ]);
         }
         if($request->name != null){
            $user->update($this->validate($request, [
                'name'     => ['string', 'max:255'],
            ]));
         }
        return redirect(route('dashboard.profile.index'));
    }
    public function updateProfilePicture(Request $request)
    {
        $user= auth()->user();
        $this->validate($request, [
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        //process
        $fileName =
            $request->file('profile_photo')->getClientOriginalName()
            . '.' .
            $request->file('profile_photo')->extension();
        $request->file('profile_photo')->storeAs('public/profile_photo', $fileName);
        //store

        $user->profile_photo = 'storage/profile_photo/' . $fileName ;
        $user->save();

        //redirect
        return redirect(route('dashboard.profile.index'));
    }
}
