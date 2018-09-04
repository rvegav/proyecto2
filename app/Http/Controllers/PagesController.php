<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function home()
    {
    	return view('home');
    }
    function loadViewAdminister(){
    	return view('AdminUsers');
    }
}