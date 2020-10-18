<?php

namespace App\Http\Controllers\Dashboard;

use App\CarLicense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarLicenseController extends Controller
{
    public function index()
    {
        $licenses = CarLicense::all();

        return view('car-licenses.index', [
            'licenses' => $licenses
        ]);
    }

    public function create()
    {
        return view('car-licenses.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        CarLicense::create($data);

        return redirect()->route('car-licenses.index');
    }

    public function edit(CarLicense $carLicense)
    {
        return view('car-licenses.edit', ['license' => $carLicense]);
    }

    public function update(Request $request, CarLicense $carLicense)
    {
        $data = $request->all();

        $carLicense->update($data);

        return redirect()->route('car-licenses.index');
    }
}
