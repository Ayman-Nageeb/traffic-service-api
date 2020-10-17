<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Police;
use Illuminate\Http\Request;

class PoliceController extends Controller
{
    public function index()
    {
        $police = Police::all();

        return view('police.index', [
            'police' => $police
        ]);
    }

    public function create()
    {
        return view('police.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        Police::create($data);

        return redirect()->route('police.index');
    }

    public function edit(Police $police)
    {
        return view('police.edit', ['police' => $police]);
    }

    public function update(Request $request, Police $police)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $police->update($data);

        return redirect()->route('police.index');
    }
}
