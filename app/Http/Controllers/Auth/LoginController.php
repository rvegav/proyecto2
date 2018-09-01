<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function postLogin()
    // {
        
    //     //return Redirect::to('/home');
    //     //return redirect()->route('home');
    //     return  route('/home');
    //     // return redirect()->route('mensajes.index');
    //     // Guardamos en un arreglo los datos del usuario.
    //     // $userdata = array(
    //     //     'username' => $request->input('username'),
    //     //     'password'=> $request->input('password')
    //     // );
            
    //     // //Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
    //     // if(Auth::attempt($userdata))
    //     // {
            
            
    //     // }
    //     // // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
    //     // return Redirect::to('login')
    //     //             ->with('mensaje_error', 'Tus datos son incorrectos')
    //     //             ->withInput();
    // }
}
