@extends('layout')
          
    @section('content')
        <h1 class="text-center">{{$title}}</h1>
        <h2>Usuario #{{$users->id}}</h2> <br>
        <h4>Nombre Usuario:{{$users->nombre}}.</h4><br> 
        <h4>Correo Electrónico:{{$users->email}}.</h4><br>

        <a href="{{url('/nuevo-registro')}}">Volver a Listado</a>
    @endsection

    @section('sidebar')
        <h2 class="text-center">Barra Lateral</h2>
    @endsection