<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function __construct()
	{
<<<<<<< HEAD
		//$this->middleware(['auth', 'roles:wor,sec,emp,sto,set']);
        $this->middleware('auth');

=======
		// $this->middleware(['auth', 'roles:wor,sec,emp,sto,set']);
        $this->middleware('auth');
>>>>>>> 1d7b03654b85b8225f6aab3610eac36e553eb790
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