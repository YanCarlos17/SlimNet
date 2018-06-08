<?php

namespace App\Http\Controllers;

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

    public function show($id)
    {
        $users = UserModel::find($id);
        //$users= User::all();
        $title= 'Listado de Usuarios';
     
        dd($users);
        return view('registro',compact('users','title'));
    }
}
