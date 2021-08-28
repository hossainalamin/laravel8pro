<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionCotroller extends Controller
{
    public function getSession(Request $req){
        if($req->session()->has('name')){
            echo $req->session()->get('name');
        }else{
            echo "No name found in session";
        }
    }
    public function setSession(Request $req){
        $req->session()->put('name','Spark');
        echo "Data has been added from session";
    }
    public function deleteSession(Request $req){
        $req->session()->forget('name');
        echo "Session has been removed";
    }
}
