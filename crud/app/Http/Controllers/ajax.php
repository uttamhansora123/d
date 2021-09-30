<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stud;
use DB;

class ajax extends Controller
{
    function home(Request $req){
        $studs = DB::table('studs')
        ->select('id','name', 'address')
        ->get();

        return view('ajax',compact('studs'));
    }
    function add(Request $req){
          $req->validate([
                'name' => 'required',
                'address' => 'required',

            ]);
        $name = $req->input('name');
        $address = $req->input('address');
        
        DB::table('studs')->insert([
            'name' => $name,
            'address' => $address,
        ]);

        return response()->json();

    }
    function show(Request $req){
    $studs=DB::table('studs')
    ->select('id','name','address')
    ->get();
     echo $studs;
    }
    function edit(Request $req){
         $id =$req->id;
        $studs = DB::table('studs')
        ->select('id','name', 'address')
        ->where('id',$id)
        ->get();
        echo $studs;
    }
    function update(Request $req){

          $id =$req->id;
        $studs = DB::table('studs')
              ->where('id', $id)
              ->update(['name' => $req->name,'address'=>$req->address]);
            
        echo "success";
    }
    function delete(Request $req){
             $id=$req->id;
            $studs=stud::where('id',$id)->first();
            
            $studs->delete();
        

    }
    function get_all_data(Request $req){
        $studs=DB::table('studs')
        ->select('id','name','address')
        ->get();

        return view('get_all_data',compact('studs'));
    }
}
