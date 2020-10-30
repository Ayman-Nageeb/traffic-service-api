<?php

namespace App\Http\Controllers\API ;
use Illuminate\Http\Request;

use App\Police ;

class PoliceConttoller
{

    public function login(Request $request)
    {
        $data = $request->all();

        $police = Police::whereUsername($data["username"])->first();

        $output = [
            "isLogedIn" => false,
            "data" => null
        ] ;

        if($police){
            if ($police["password"] == $data["password"]){
                $output["isLogedIn"] = true ;
                $output["data"] = $police ;
            }
        }

        return $output ;
    }
}