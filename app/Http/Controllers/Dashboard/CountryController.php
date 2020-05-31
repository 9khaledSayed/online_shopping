<?php

namespace App\Http\Controllers\dashboard;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::get();
        return view('dashboard.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('dashboard.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateAttributes();
        Country::create([
            'name' => $request->name
        ]);
        return redirect(route('dashboard.countries.index'));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect(route('dashboard.countries.index'));
    }

    public function validateAttributes()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
    }
}
