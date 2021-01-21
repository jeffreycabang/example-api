<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){

    	$variable = "Hello World";

    	return view('welcome', compact('variable'));

    }

    public function getData(){

    	return $variable =array(1,2,3,4);

    	// return view('welcome', compact('variable'));

    }
}
