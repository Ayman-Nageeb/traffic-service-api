<?php

namespace App\Http\Controllers\Dashboard;

use App\Citizen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index()
    {
        $citizens = Citizen::all();

        return view('citizens.index', [
            'citizens' => $citizens
        ]);
    }

    public function create()
    {
        return view('citizens.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        Citizen::create($data);

        return redirect()->route('citizens.index');
    }

    public function edit(Citizen $citizen)
    {
        return view('citizens.edit', ['police' => $citizen]);
    }

    public function update(Request $request, Citizen $citizen)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $citizen->update($data);

        return redirect()->route('citizens.index');
    }
}
