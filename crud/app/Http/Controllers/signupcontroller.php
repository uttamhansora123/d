<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
use Illuminate\Support\Facades\Hash;


class signupcontroller extends Controller
{
    public function signup(Request $req){
        $signup=new signup();
        if($req->input('signup')){
             $req->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email'=>'required|email',
                'password' => 'required',
                'phone' => 'required',
                
            ]);
            $signup->firstname=$req->input('firstname');
            $signup->lastname=$req->input('lastname');
            $signup->email=$req->input('email');
            $signup->password=Hash::make($req->input('password'));
            $signup->phone=$req->input('phone');
            $signup->save(); 
            
        }
              return view('signup'); 
    }
    public function login(Request $req){
        $signup=new signup();
        if($req->input('login')){
            $req->validate([
                'email'=>'required',
                'password'=>'required',
            ]);
            $email=$req->input('email');
            $password=$req->input('password');
            $check=signup::where('email',$email)->first();
            if(!$check){
                  return redirect('login')->with('email','email is wrong');
            }
            if($check){
                 if(Hash::check($password,$check->password)){
                // if($password==$check->password){
                    echo "login suceesfully";
                    $req->session()->put('admin',$check);
                    // echo "  data has been added";
                }else{
                    return redirect('login')->with('error','password is not match');
                }
            }
        }else
        {

        }
        return view('login');
    }
        public function checks(Request $req){
            $r=Session()->get('admin');
            return $r;
            return view('checks');
        }
}
