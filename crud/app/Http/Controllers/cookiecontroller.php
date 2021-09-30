<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;
use App\Models\clogin;


class cookiecontroller extends Controller
{
    public function setcookie(Request $req){


        if($req->input('submit')){
            $c=new clogin();
            $name=$req->input('name');
            $password=$req->input('password');
            $check=$c::where('name',$name)->first();

          if($check){
                if($password==$check->password){
                echo "login sucess";
                if($req->input('check')){
                    $minute=1;
                
            $response= new response("ok");
            $response->withCookie(Cookie('name',$name,$minute));
            $response->withCookie(Cookie('password',$password,$minute));
            return $response;
    
}
}else{
    echo "login failed";
}
            }else{
                echo "login Failed";
            }
            
        
        }
        return view('cookie');
    }   

}
