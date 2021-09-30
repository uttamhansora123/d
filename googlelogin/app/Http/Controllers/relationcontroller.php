<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\pd;
use PDF;

class relationcontroller extends Controller
{
    public function hasone(Request $req){
        return student::find(4)->getname;
    }
    public function d(Request $req){
        $pdf=new pd();
        if($req->input('submit')){
            $pdf->name=$req->input('name');
            $pdf->email=$req->input('email');
            $pdf->phone=$req->input('phone');
            $pdf->dob=$req->input('dob');
            $pdf->save();
        }
        return view('welcome');
    }
    public function v(Request $req){
        $view=pd::all();
        
        return view('v',compact('view'));
    }
    public function dp(Request $req){
        $data = pd::all();

      // share data to view
      view()->share('pdf',$data);
      $pdf = PDF::loadView('pdf', $data);

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}
