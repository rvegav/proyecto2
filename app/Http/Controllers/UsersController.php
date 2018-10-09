<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{ 
    function __construct()
    {
        //el primer middleware es para que solo se pueda ingresar a la vista de users si esta autenticado
        // el segundo es para que solo el rol admin tenga acceso a Administrar Usuario
        // $this->middleware(['auth', 'roles:addUsr']); 
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $users = User::all();

        // return view('users.create', compact('users'));

        // // dd()
        return view('users.create', compact('users', 'roles'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateUserRequest $request)
    {
        // dd($request->all());
        // primero guardar
        $user = new User;
        $user->name = $request->input('nombre');
        $user->username = $request->input('usuario');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('pass'));
        $user->role_id = $request->input('idrole');
        $user->save();

        //luego redireccionar
       return redirect()->route('users.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::findOrFail($id);
        // return $user   return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $user = User::findOrFail($id);
        $roles = Role::all();
        
        return view('users.edit', compact('user', 'roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        // dd($request->all());
        $user = User::findOrFail($id);

        $user->update([
            $user->name = $request->input('nombre'),
            $user->username = $request->input('usuario'),
            $user->email = $request->input('email'),
            $user->role_id = $request->input('idrole')

        ]);
       
        return redirect()->route('users.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->update([
            $user->estado = 'De Baja'
        ]);

        return redirect()->route('users.create');
    }
 
}
