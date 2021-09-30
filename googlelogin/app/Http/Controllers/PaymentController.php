<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use App\Models\t;
use App\Models\buy;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
class PaymentController extends Controller
{

    public function index(Request $req){
        return view('buy');
    }
    public function index1(Request $req){
        $buy=new buy();
        if($request->input('buy')){
            $buy->name=$req->input('name');
            $buy->price=$req->input('price');
            $buy->cardnumber=$req->input('cardnumber');
            $buy->save();
            
        };
        $buy=buy::create([
            'price'=>$req->price,
            'name'=>$req->name,
            'cardnumber'=>$req->cardnumber,
        ]);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 120 * 100,
                "currency" => "inr",
                "source" => $req->stripeToken,
                "description" => "Make payment and chill." 
        ]);
  
        Session::flash('success', 'Payment successfully made.');
          
        
        return $buy;
    }
    public function buy(Request $req){
        $to=t::select('ts.id as id','ts.t_name','ts.color','ts.price','ts.file')
        // ->where('ts.id',$id)
        ->get();
        
        return view('buy',compact('to'));
    }
    public function buy1(Request $req){

        $buy=new buy();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $req->price*100,
                "currency" => "inr",
                "source" => $req->stripeToken,
                "description" => "Make payment and chill." 
        ]);

        Session::flash('success', 'Payment successfully....');
          
        return back();  

    }
public function ajaxPagination(Request $request)
  {
    Paginator::useBootstrap();
    $products = Product::paginate(5);
  
    if ($request->ajax()) {
        return view('presult', compact('products'));
    }
  
    return view('ajaxPagination',compact('products'));
  }
}
