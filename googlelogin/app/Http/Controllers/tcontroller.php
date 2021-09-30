<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t;
use App\Models\signup;
use App\Models\pay;
use PDF;


class tcontroller extends Controller
{
    public function t(Request $req){
        $t=new t();
        if($req->input('submit')){
         if($req->has('file')){
          $file=$req->file('file');
          $filename=$req->file('file')->getClientOriginalName();
          $extension=$req->file('file')->extension();
          $file->move('files',$filename);

        }
            $t->t_name=$req->input('t_name');
            $t->price=$req->input('price');
            $t->color=$req->input('color');
            $t->size=$req->input('size');
            $t->file=$filename;

            $t->save();
        }
        return view('t');
    }
    public function home(Request $req){

                $to=t::all();
        return view('product',compact('to'));
    }
    public function product(Request $req,$id){
        if($req->session()->get('client')){
            $s=$req->session()->get('client');
            
        }else{
            return redirect('/login');
        }
        $to=t::select('ts.id as id','ts.t_name','ts.color','ts.price','ts.file')
        ->where('ts.id',$id)
        ->get();
        
         if($req->session()->get('client')){
            $s = $req->session()->get('client');
        }
        $user = signup::find($s->id);
        return view('purc',compact('to','user'));
    }
    public function login(Request $req){
        $sign=new signup();
        if($req->input('login')){
            $email=$req->input('email');
             $password=$req->input('password');
            $check=signup::where('email',$email)->first();
            if($check){
                if($password==$check->password){
                    
                    $req->session()->put('client',$check);
                    return redirect('/home');
                    // echo "  data has been added";
                }
            }
        }else
        {
            
        
        }
        return view('login');
    }
    public function logout(Request $req){
         if($req->session()->get('client')){
                $req->session()->forget('client');
                return redirect('login');
            }
    }
   public  function pay(Request $req){
    if($req->input('book')==1){
         $user_id=$req->input('user_id');
        $tshirt_id=$req->input('tshirt_id');
        

        $price=$req->input('price');
        $payment_id=$req->input('payment_id');

        $data=pay::create([
            'user_id'=>$user_id,
            'tshirt_id'=>$tshirt_id,
            'price'=>$price,
            'payment_id'=>$payment_id
         ]);
        $user_id=$data->user_id;
        
        // db_car1::where('id',$car_id)->update(['car_status'=>'booked']);
        echo json_encode(['status'=>'true']);
    }

   }
   public function booking(Request $req){
    if($req->Session()->get('client')){
        $s=$req->Session()->get('client');
    }else{
        return redirect('/login');
    }
    $book=pay::select('ts.t_name','signups.firstname','signups.email','pays.price','pays.payment_id','ts.file')
    ->join('signups','signups.id','pays.user_id')
    ->join('ts','ts.id','pays.tshirt_id')
    ->where('signups.id',$s->id)
    ->get();
    return view('booking',compact('book'));
   }
   public function pdf(Request $req){
    
    if($req->Session()->get('client')){
        $s=$req->Session()->get('client');
    }else{
        return redirect('/login');
    }
    $pays=pay::select('ts.t_name','signups.firstname','signups.email','pays.price','pays.payment_id','ts.file')
    ->join('signups','signups.id','pays.user_id')
    ->join('ts','ts.id','pays.tshirt_id')
    ->where('signups.id',$s->id)
    ->get();
        
    // $pays=pay::all();
view()->share('pdf',$pays);

      $pdf = PDF::loadView('view_book',$pays);
      
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
       
   }
}
