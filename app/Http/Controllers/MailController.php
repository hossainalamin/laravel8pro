<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\mail;

class MailController extends Controller
{
    public function sendMail(){
        $detail = [
            "title" => "Test",
            "body" => "description test"
        ];
        Mail::to("hossainalamin980@gmail.com")->send(new TestMail($detail));
        return "Email sent";
    }
}
