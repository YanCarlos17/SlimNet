@extends('layout')

    @section('content')
        <h1 class="text-center">{{ $title }}</h1>
        <ul>
            @forelse($users as $user)
                <li>
                    {{ $user->nombre }} --> {{ $user->email }} --tel: {{ $user->telefono }} 
                    <a href="{{url("/detalle-usuario/{$user->id}")}}">Ver detalles</a>
                </li>
            @empty
                <li>No hay Usuarios Registrados</li>
            @endforelse        
        </ul>
    @endsection

    @section('sidebar')
        <h2 class="text-center">Barra Lateral</h2>
    @endsection