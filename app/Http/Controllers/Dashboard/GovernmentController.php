<?php

namespace App\Http\Controllers\dashboard;

use App\Government;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class GovernmentController extends Controller
{
    public function index()
    {
        $governments = Government::get();
        return view('dashboard.governments.index', compact('governments'));
    }

    public function create()
    {
        return view('dashboard.governments.create');
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
        Government::create([
            'name' => $request->name
        ]);
        return redirect(route('dashboard.governments.index'));
    }

    public function destroy(Government $government)
    {
        $government->delete();
        return redirect(route('dashboard.governments.index'));
    }

    public function validateAttributes()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
    }
}
