<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function formsubmit(Request $request){
    	print_r($request->input());
    }
}
