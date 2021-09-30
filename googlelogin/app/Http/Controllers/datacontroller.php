<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\iimport;
use App\Exports\eexport;

class datacontroller extends Controller
{
    public function fileimportexport(Request $req){
        return view('importexport');
    }
    public function import(Request $req){
        $validated = $req->validate([
        'file'=>'required',
    ]);
        Excel::import(new iimport,$req->file('file')->store('temp'));
        return back();
    }
    public function export(Request $req){
        return Excel::download(new eexport,'dataexport.xlsx');
    }
}
