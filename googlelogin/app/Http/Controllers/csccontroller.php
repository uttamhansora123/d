<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contry;
use App\Models\state;
use App\Models\city;

class csccontroller extends Controller
{
    public function c(Request $req){
        $data['contries']=contry::get(["c_name","id"]);
        return view('csc',$data);
    }
    public function state(Request $req){

    }
    public function city(Request $req){

    }
}
