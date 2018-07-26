@extends('layout')
          
    @section('content')
        <h2 class="text-center">{{$title}}{{$user->nombre}}</h1>
        <h3> Usuario#&nbsp;{{$user->id}}</h3> <br>
        <h4> <span class="detailspan">Nombre Usuario:&nbsp;</span>&nbsp;{{$user->nombre}}</h4><br> 
        <h4> <span class="detailspan">Correo Electrónico:&nbsp;</span>&nbsp;{{$user->email}}</h4><br>
        <h4> <span class="detailspan">Password:&nbsp;</span>&nbsp;{{$user->contraseña}}</h4><br>
        <h4> <span class="detailspan">Profesión:&nbsp;</span>&nbsp;{{$profesion->titulo}}</h4><br>
        <a href="{{url('/registro')}}">Volver a Listado</a> <br>
        <a href="{{ route('modificar',['id' => $user]) }}">Modificar</a> <br>
        <form action="{{ route('borrar',$user)}}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button type="submit">Eliminar</button>
        </form>
    @endsection

    @section('sidebar')
        <h2 class="text-center">Lorem</h2>
    @endsection