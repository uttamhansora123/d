<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\s;
use App\models\su;
use Illuminate\Support\Facades\DB;

class jcontroller extends Controller
{
    public function join(Request $req){
        $s=new s();
        $su=new su();
        $s=s::all();
        $su=su::all();
    
        $join=s::select('s.id','s.name','sus.subject','sus.sid')
        ->join('sus','s.id','sus.sid')
        ->get();
    
    $stud = DB::table('s')->pluck('name','div');

        foreach ($stud as $sx) {
    echo $sx;
}
    }
    public function data(Request $req){
        return view('data');
    }
  
}
