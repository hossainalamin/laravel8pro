<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo "<h4>Fluent string</h4>";
        $slice = Str::of("Welcome to spark delivery")->after("Welcome to");
        echo $slice."<br>";

        $slice_1 = Str::of("App\Http\Controllers\Controller")->afterLast("\\");
        echo $slice_1."<br>";

        $slice_2 = Str::of("Spark")->append("Delivery");
        echo $slice_2."<br>";

        $lower_case = Str::of("This is Lowercase")->lower();
        echo $lower_case."<br>";

        $replace = Str::of("Laravel 8")->replace("8","9");
        echo $replace . "<br>";

        $upper_case = Str::of("this is uppor")->upper();
        echo "$upper_case"."<br>";

        $slug = Str::of("Laravel 8 framework")->slug("-");
        echo "$slug"."<br>";

        $sub_string = Str::of("Spark delivery on fire")->substr(5,3);
        echo "$sub_string"."<br>";

        $trim_method = Str::of('/laravel8/')->trim('/');
        echo $trim_method;
        }
}
