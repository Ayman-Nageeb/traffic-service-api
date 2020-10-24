<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Violation;
use Illuminate\Http\Request;

class ViolationController extends Controller
{
    public function index()
    {
        $violations  = Violation::all();

        return view('violations.index', [
            'violations' => $violations
        ]);
    }
}
