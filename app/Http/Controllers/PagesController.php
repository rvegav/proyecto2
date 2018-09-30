<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function __construct()
	{
		//$this->middleware(['auth', 'roles:wor,sec,emp,sto,set']);
        $this->middleware('auth');

	}

    public function home()
    {
    	return view('home');
    }

    function loadAdministrationView()
    {
    	return view('AdminUsers');
    }
}