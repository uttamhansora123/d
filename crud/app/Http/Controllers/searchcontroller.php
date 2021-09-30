<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\search;
use App\Models\city;
use App\Models\date;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class searchcontroller extends Controller
{
    public function search(Request $req){
        $city=city::all();
        
        Paginator::useBootstrap();
        if($req->ajax()){

            $search=search::select('searches.name','searches.address','searches.subject','cities.city_name','searches.profile','start_date','end_date')

            ->join('cities','cities.id','searches.city_id')
            ->join('dates','dates.user_id','searches.id');
            
                 if(isset($_GET['search'])){
                 $search->where('searches.name','LIKE','%'.$_GET['search'].'%');
                }
                if(isset($_GET['city'])){
                $search->where('cities.city_name',$_GET['city']);
                }
                if(isset($_GET['start_date'])){
                 $search->where('dates.start_date','>=',$_GET['start_date']);
                }
                if(isset($_GET['end_date'])){
                 $search->where('dates.end_date','<=',$_GET['end_date']);
                }
                $search= $search->paginate(2);
                return view('res',compact('search'));
             }
            else{
         $search=search::select('name','address','subject','cities.city_name','searches.profile','dates.start_date','dates.end_date')
        ->join('cities','cities.id','searches.city_id')
        ->leftjoin('dates','dates.user_id','searches.id')
        ->paginate(2);

        return view('ajaxpag',compact('search'));
         }
}
        public  function addstud(Request $req){
        $search=new search();
        $city=city::all();
        if($req->input('submit')){
            $req->validate([
                'name' => 'required',
                'address' => 'required',
                'subject'=>'required',
                'city_id' => 'required',
                'profile' => 'required',
                
            ]);
        if($req->has('profile')){
          $file=$req->file('profile');
          $filename=$req->file('profile')->getClientOriginalName();
          $extension=$req->file('profile')->extension();
          $file->move('files',$filename);

        }
            $search->name=$req->input('name');
            $search->address=$req->input('address');
            $search->subject=$req->input('subject');
            $search->city_id=$req->input('city_id');
            $search->profile=$filename;

            $search->save();
            
             return redirect('addstud')->with('status','successfully Added!');
        }
            return view('addstud',compact('city'));
    }
        public function data(Request $req){
        $city=city::all();
        return view('data',compact('city'));
    }
        
    public function datatable(Request $req){
        $search=search::all();
        return view('datatable',compact('search'));
    }
}
