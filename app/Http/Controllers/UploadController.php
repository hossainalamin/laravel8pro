<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }
    public function uploadSubmit(Request $req){
        $req->file->store('public');
        return back()->with('upload-msg','File uploaded successfully');
    }
}
