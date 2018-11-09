<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function __construct()
	{
<<<<<<< HEAD
		$this->middleware(['auth']);
		
	}

=======
		$this->middleware('auth');
		// $this->middleware(['auth', 'roles:wor,sec,emp,sto,set']);
    }
>>>>>>> 426628a6eec38e768fe13648b3740546a40194d0

    public function home()
    {
    	return view('home');
    }

    function loadAdministrationView()
    {
    	return view('AdminUsers');
    }
<<<<<<< HEAD
    function loadMantenedores()
    {
        return view('subMantenedores');
    }
    function loadStore(){
        return view('almacen.almacen');
    }
=======

>>>>>>> 426628a6eec38e768fe13648b3740546a40194d0
    
}