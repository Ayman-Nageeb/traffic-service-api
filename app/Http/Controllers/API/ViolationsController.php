<?php

namespace App\Http\Controllers\API ;
use Illuminate\Http\Request;

use App\Violation ;

class ViolationsController
{
    public function store(Request $request)
    {
        $data = $request->all();

        $violation = Violation::create($data);

        return $violation ;
    }
}