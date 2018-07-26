@extends('layout')

@section('content')
        <h1 class="text-center">{{ $title }}</h1>
        <table class="table table-striped table-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">email</th>
                <th scope="col">Password</th>
                <th scope="col">profesion</th>
            </tr>
        @forelse($users as $user) 
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->contraseña }}</td>
                <td>{{ $user->cod_profesion }} </td>
                <td><a href="{{url("/detalle-usuario/{$user->id}")}}"><button class="btn btn-success">Detalles</button></a></td>
                <td><a href="{{ route('modificar',$user) }}"><button class="btn btn-warning">Modificar</button></a></td>
                <form action="{{ route('borrar',$user)}}" method="POST">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
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