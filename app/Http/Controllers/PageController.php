<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\FlightRepositories as FlightRepositories;

use App\Models\Category;

class PageController extends Controller
{
    //
    public function __construct(FlightRepositories $FlightRepositories)
    {
        $this->flight = $FlightRepositories;
    }

    public function index(){

    	$variable = "Hello World";

    	return view('welcome', compact('variable'));

    }

    public function getData(){

    	return $variable = array(1,2,3,4);

    	// return view('welcome', compact('variable'));

    }

    public function fetchCategory(){
    	$data = Category::get();

    	return response()->json([
            'response'          => true,
            'data'              => $data
        ], 200);
    }
}
