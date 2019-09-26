<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
    	//pass data 
    	return view('users',['name'=>'nick']);    	
    }
}
