<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
	public function index(Request $request)
	{
		//print_r($request->input());
		//echo $request->method();
		/*if (!$request->isMethod('GET')) {
			echo "Hi to GET";
		}
		else
		{
			echo "Byy to GET";
		}*/
		print_r($request->query());
	}
}
