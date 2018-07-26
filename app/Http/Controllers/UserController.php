<?php

namespace App\Http\Controllers;

use App\User;
use App\Profesion;
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
        return view('detalle', compact('user','title','profesion'));
    }
   

    public function store(Request $request)
    {

        $data = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'cod_profesion' => 'required'
        ]);
        
        User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'contraseña' => $data['contraseña'],
            'cod_profesion' => $data['cod_profesion']
        ]);  

        return redirect()->route('registro');
    }


    public function edit(User $user, Profesion $profesion)
    {
        $title= 'Modificar Usuario:';  
        return view('editar',compact('user','title','profesion'));
    }

    public function modified(User $user, Profesion $profesion)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'cod_profesion' => 'required'
        ]);

        $user->update($data);
        return redirect()->route('detalle',['user' => $user->id]);    
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('registro',['user' => $user->id]);
    }

}
