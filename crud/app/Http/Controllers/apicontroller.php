<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class apicontroller extends Controller
{
    public function getapi(Request $req,$id){
        $post=new post();
        $post=post::find($id,'id')->first();

        return response()->json($post);
    }
    public function postapi(Request $req){
         $post=new post();
        $post->name=$req->input('name');
        $post->email=$req->input('email');
        $post->phone=$req->input('phone');
        $post->password=$req->input('password');
        $post->save();
        return response()->json($post);
    }
    public function update(Request $req,$id){
        $post=post::findorfail($id);
        $post->name=$req->input('name');
        $post->email=$req->input('email');
        $post->phone=$req->input('phone');
        $post->password=$req->input('password');
        $post->save();
        return response()->json($post);

    }
    public function delete(Request $req,$id){
        $post=post::findorfail($id);
        $post->delete();
        return response(['status'=>'recore delete suceesfully']);
    }
}
