<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use DB;

class crudcontroller extends Controller
{
    public function insert(Request $req){
        $crud=new crud();
        $file=[];
        if($req->input('insert')){
            $req->validate([
                'name' => 'required',
                'email' => 'required|unique:cruds|email',
                'phone'=>'required',
                'gender' => 'required|in:male,female',
                'password' => 'required',
                
            ]);
            if($req->has('file')){

                $file=$req->file('file');
                foreach($file as $f){
                $filename=$f->getClientOriginalName();
        
                $extension=$f->extension();
                $f->move('files',$filename);
                
                $fp[]=$filename;
        }
            $file=implode(",", $fp);

        }
            $crud->name=$req->input('name');
            $crud->email=$req->input('email');
            $crud->phone=$req->input('phone');
            $crud->gender=$req->input('gender');
            $crud->password=$req->input('password');
            $crud->file=$file;
            $crud->save();

        }
      return view('insert');
    }
    public function view(Request $req){
       
        $crud=crud::all();
        return view('view',compact('crud'));
        // $crud=DB::table('studs')
        // // ->select('id','name','address')
        // ->distinct()
        // ->get();
        // return $crud;
        // $crud=DB::table('studs')->select('id');
        // $users=$crud->addselect('name','address')
        // ->get();
        // $users = DB::table('studs')
        //             ->wherenotnull('name')
        //             ->get();
        // return $users;

    }
    public function update(Request $req,$id){
        $file=[];
        $crud=crud::where('id',$id)->first();
        if($req->input('update')){
             if($req->file('file')){

                $file=$req->file('file');
                foreach($file as $f){
                    
                $filename=$f->getClientOriginalName();
                $extension=$f->extension();
                $f->move('files',$filename);
                
                $fl[]=$filename;
            }
            $file=implode(",", $fl);
            $crud->file=$file;
        }
            $crud->name=$req->input('name');
            $crud->email=$req->input('email');
            $crud->phone=$req->input('phone');
            $crud->gender=$req->input('gender');
            
            
            $crud->save();

            return redirect('view');
        }
        return view('update',compact('crud'));
    }
    public function delete(Request $req,$id){
        $crud=crud::where('id',$id)->first();
        $crud->delete();
        return redirect('view');
    }
}
