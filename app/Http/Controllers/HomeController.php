<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    //
    public function index(Request $Request)
    {
    	return view('home');
    }
}
