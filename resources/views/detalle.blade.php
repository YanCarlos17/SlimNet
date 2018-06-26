@extends('layout')
          
    @section('content')
        <h1 class="text-center">{{$title}}{{$user->nombre}}</h1>
        <h2> Usuario#&nbsp;{{$user->id}}</h2> <br>
        <h3> <span class="detailspan">Nombre Usuario:&nbsp;</span>&nbsp;{{$user->nombre}}.</h3><br> 
        <h3> <span class="detailspan">Correo Electrónico:&nbsp;</span>&nbsp;{{$user->email}}.</h3><br>
        <h3> <span class="detailspan">Teléfono:&nbsp;</span>&nbsp;{{$user->telefono}}.</h3><br>
        <h3> <span class="detailspan">Profesión:&nbsp;</span>&nbsp;{{ $user->cod_profesion }}.</h3><br>
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