<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForSessionController extends Controller
{
    public function submit(Request $request)
    {
    	//print_r($request->input());
    	$request->session()->put('info',$request->input());
    	$info= $request->session()->get('info');
    	//print_r($info['user']);
    	if ($info['user']=='nick') {
    		return redirect('/');
    	}
    	else
    	{
    		return redirect('viewsession');
    	}
    }
}
