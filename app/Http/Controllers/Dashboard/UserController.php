<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admins.index', [
            'admins' => $users
        ]);
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('admins.index');
    }

    public function edit(User $user)
    {
        return view('admins.edit', ['admin' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        $user->update($data);

        return redirect()->route('admins.index');
    }
}
