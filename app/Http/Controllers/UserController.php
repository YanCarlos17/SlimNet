<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function detail(User $user)
    {
        $title= 'Detalle del Usuario:';
        return view('detalle',compact('user','title'));
    }

    public function store()//Request $request
    {

        $data = request()->all();
        User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'cod_profesion' => $data['cod_profesion']
        ]);    
        return redirect()->route('registro');//
    }
}
