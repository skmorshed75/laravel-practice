<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class demoController extends Controller

{
    function HeaderData(Request $request):array {
        return $request->header();
    }
}

