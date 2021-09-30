<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Str;
use App\Models\signup;
use Illuminate\Support\Facades\Hash;

class mailcontroller extends Controller
{
 //    public function forgot(Request $req){
        
 //        if($req->input('sendmail')){
 //            $req->validate([
 //                'email'=>'required',
 //            ]);
 //            $email=$req->input('email');
 //            $user=signup::where('email',$email)->first();
 //            $firstname=$user->firstname;
 //            $password=Str::random(5);
 //            $user->password=$password;
 //            $user->save();
 //            $data=array('firstname'=>$firstname,'password'=>$password);
 //             Mail::send('mail',$data,function($message) use ($user){
 //                    $message->to($user->email,'hello uttam')
 //                    ->subject('this is password reset');
 //                    $message->from('uttamhansora5@gmail.com','Demo');

 //                });
 //             // $req->Session()->flash('s','Email Sent..Check Your Inbox');
 //             return "email sent";
             
 //         }

 //            return view('forgot');
        
 // }   
 public function forgot(Request $req){
            if($req->input('sendmail')){
                $email=$req->input('email');
                if($email==null){
                      return redirect('forgot')->with('e','email is requried!!!.');
                }
                $user=signup::where('email',$email)->first();
                     if(!$user){
                  return redirect('forgot')->with('email','email is wrong');
                      }
                $firstname=$user->firstname;
                $password=Str::random(5);
                $user->password=Hash::make($password);
                $user->save();
                $data=array('firstname'=>$firstname,'password'=>$password);
                Mail::send('mail',$data,function($message) use ($user){
                    $message->to($user->email,'hello uttam')
                    ->subject('this is password reset');
                    $message->from('demo60578@gmail.com','Demo');
                });
                echo "email sent..check Your Inbox";
            }
            return view('forgot');
        }
 public function j(Request $req){
    return view('j');
 }
 
}
