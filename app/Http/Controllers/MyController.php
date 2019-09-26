<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MyController extends Controller
{
    public function index(){
    		if (View::exists('users')) {
    			return view('users', ['name'=>'nick']);
    		}
    		else
    		{
    			return view('settings');
    		}
    }
}
