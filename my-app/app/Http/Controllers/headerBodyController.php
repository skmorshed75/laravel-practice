<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headerBodyController extends Controller
{
    function headerBody(Request $request):array{
        $pin= $request->header('pin'); //through header
        $city = $request->input('city'); //through URL
        $area = $request->input('area'); //through URL
        $name = $request->name; //through Body
        $age = $request->age; //through Body

        return array (
            "Name"=>$name,
            "Age"=>$age,
            "City"=> $city,
            "Area"=>$area,
            "Pin" => $pin,
        );
    }
}
