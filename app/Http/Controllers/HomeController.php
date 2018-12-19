<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
    	$colors=['red', 'green', 'yellow'];
    	$data['colors'] = $colors;
    	return view('home.index', $data);
    }
}
