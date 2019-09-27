<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function submit(Request $request)
    {
    	//print_r($request->input());
    	$request->session()->flash('data','Flash Data is passed successfully');
    	return redirect('/');
    }
}
