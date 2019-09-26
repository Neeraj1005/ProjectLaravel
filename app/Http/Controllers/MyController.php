<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index($id){
    	
    	return ['id'=>$id, 'user'=>'peter parker', 'email'=>'parker@mail.com'];
    	//echo "heloo this is controller".$id;
    }
}
