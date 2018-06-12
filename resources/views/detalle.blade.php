@extends('layout')
          
    @section('content')
        <h1 class="text-center">{{$title}}</h1>
        <h2>Usuario #&nbsp;{{$users->id}}</h2> <br>
        <h4>Nombre Usuario:&nbsp;{{$users->nombre}}.</h4><br> 
        <h4>Correo Electrónico:&nbsp;{{$users->email}}.</h4><br>

        <a href="{{url('/registros')}}">Volver a Listado</a>
    @endsection

    @section('sidebar')
        <h2 class="text-center">Barra Lateral</h2>
    @endsection