<?php

namespace App\Http\Controllers\API ;
use Illuminate\Http\Request;

use App\Citizen ;

class CitizensConttoller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $citizen = Citizen::create($data);

        return $citizen ;
    }

    public function login(Request $request)
    {
        $data = $request->all();

        $citizen = Citizen::whereUsername($data["username"])->first();

        $output = [
            "isLogedIn" => false,
            "data" => null
        ] ;

        if($citizen){
            if ($citizen["password"] == $data["password"]){
                $output["isLogedIn"] = true ;
                $output["data"] = $citizen ;
            }
        }

        return $output ;
    }
}