@extends('layout')

    @section('content')
        <h1 class="text-center">{{ $title }}</h1>
        <table class="showTable">
            <tr>
                <td class="showTable_td">NOMBRE</td>
                <td class="showTable_td">EMAIL</td>
                <td class="showTable_td">TEL</td>
                <td class="showTable_td">PROFESION</td>
            </tr>
        @forelse($users as $user)        
            <tr>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->cod_profesion }} </td>
                <td><a href="{{url("/detalle-usuario/{$user->id}")}}">Ver detalle</a></td>
                <td><a href="{{ route('modificar',$user) }}">Modificar</a></td>
                <form action="{{ route('borrar',$user)}}" method="POST">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <td><button type="submit">Eliminar</button></td>
                </form>
            </tr>
        @empty        
            <p>No hay Registros</p>  
        @endforelse
        </table>        
    @endsection

    @section('sidebar')
        <h2 class="text-center">Barra Lateral</h2>
    @endsection