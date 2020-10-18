<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::all();

        return view('licenses.index', [
            'licenses' => $licenses
        ]);
    }

    public function create()
    {
        return view('licenses.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        License::create($data);

        return redirect()->route('licenses.index');
    }

    public function edit(License $license)
    {
        return view('licenses.edit', ['license' => $license]);
    }

    public function update(Request $request, License $license)
    {
        $data = $request->all();

        $license->update($data);

        return redirect()->route('licenses.index');
    }
}
