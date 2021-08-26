<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corsi;

class CorsiController extends Controller
{
    function test (){
        $data= Corsi::all();
        return view("test", [
            'data'=>$data
        ]);

    }
}

