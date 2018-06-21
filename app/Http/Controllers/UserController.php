<?php

namespace App\Http\Controllers;

use App\Profesion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    } 
    
    public function create()
    {
        return view('crear');
    }

    public function show()
    {
        $users= User::all();
        $title= 'Listado de Usuarios';
        return view('registro',compact('users','title'));
    }

    public function detail(User $user, Profesion $profesion)
    {
        $title= 'Detalle del Usuario:';
        $profesion = DB::table('Profesion')->get();
        // dd($profesion);
        return view('detalle', compact('user','title','profesion'));
    }
   

    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'cod_profesion' => 'required'
        ]);
        User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'cod_profesion' => $data['cod_profesion']
        ]);    
        return redirect()->route('registro');
    }

    public function edit(User $user)
    {
        $title= 'Editar Sujeto Alias:';  
        return view('editar',compact('user','title'));
    }

    public function update(User $user){

        $user = User::find($request->user);
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->cod_profesion = $request->cod_profesion;
        
        
        $data = request()->validate([
            'nombre'=>'required',
            'email'=> 'required',
            'telefono' => 'required',
            'cod_profesion' => 'required'
        ]);

        $user->save($data);

        return redirect()->route('detalle',['user'=>$user]);
    }
}
