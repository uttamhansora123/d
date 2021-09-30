<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\facades\Hash;
use Mapper;
use App\Models\Boxmap;
use App\Models\Google;
use App\Models\location;
use Illuminate\Support\Facades\DB;


class googlecontroller extends Controller
{
    public function google(Request $req){
        if($req->ajax()){
        $address = $req->input('address');
        $latitude = $req->input('latitude');
        $longitude=$req->input('longitude');

        DB::table('locations')->insert([
            'address' => $address,
            'latitude' => $latitude,
            'longitude'=>$longitude,

        ]);

        $location=new location();
        $location=location::all();
        return view('google',compact('location'));
     }else{
                $location=new location();
        $location=location::all();
        return view('google',compact('location'));
     }
}
}
