<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    public function insertData(){
        $phone = new Phone();
        $phone->phone = "1234567890";
        $user = new User();
        $user->name = "Alamin";
        $user->email = "hosssainalamin980@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Data seved successfully";
    }
    public function fetchData($id){
        $phone = User::find($id)->phone;
        return $phone;
    }
}
