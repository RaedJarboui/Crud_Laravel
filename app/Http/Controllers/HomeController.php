<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return ' bonjour 5 twin';
    }
    public function show(){
        $name="5twin";
return View('show',['n'=>$name]);
    }
    //
}
