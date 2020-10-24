<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Violation;

class ViolationsController extends Controller
{
    public function index()
    {
        $violations = Violation::all();
        return view('violation.index',[
            'violations' => $violations
        ]);
    }
}