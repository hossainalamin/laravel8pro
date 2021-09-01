<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }
    public function addPost(){
        return view('addpost');
    }
    public function postSubmit(Request $req){
        DB::table('posts')->insert([
            'title' => $req->title,
            "body"  => $req->body 
        ]);
        return back()->with('post-notification',"Post added successfully");
    }
    public function getPostById($id){
        $get_post = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('get_post'));
    }
}
