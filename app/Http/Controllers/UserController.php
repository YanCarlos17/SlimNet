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
        return view('registro');
    }

    public function show()
    {
        
        $users= User::all();
        
        $title= 'Listado de Usuarios';
    
        return view('registro',compact('users','title'));
    }

    public function detail($id)
    {
        
        $users= User::find($id);
        $id= $users->id;
        $title= 'Detalle del Usuario:';
    
        return view('detalle',compact('users','title'));
    }
}
