<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidation extends Controller
{
    public function index(Request $req){
        return $req->path();
        //return $req->method();
        //return $req->url();
        //return $req->fullurl();
    }
}
