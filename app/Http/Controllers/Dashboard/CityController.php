<?php

namespace App\Http\Controllers\dashboard;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::get();
        return view('dashboard.cities.index', compact('cities'));
    }

    public function create()
    {
        return view('dashboard.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        City::create($this->validateAttributes());
        return redirect(route('dashboard.cities.index'));
    }

    public function edit(City $city)
    {
        return view('dashboard.cities.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $city->update($this->validateAttributes());
        return redirect(route('dashboard.cities.index'));
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect(route('dashboard.cities.index'));
    }

    public function validateAttributes()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
    }
}
