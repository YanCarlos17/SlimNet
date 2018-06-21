@extends('layout')
@section('content')
     <h1 class="text-center">{{ $title }}&nbsp;{{$user->nombre}}</h1> 
    @if($errors->any())
    <div class="danger-alert">
        <h3>Atención! Por favor corrige estos errores:</h3>
        <ul class="alert-list">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
    @endif
    <form method="POST" action="{{ url("/detalle-usuario/{$user}/editar")}}" class="form-signin">
        {{ csrf_field() }}
        <label for="nombre">Nuevo Nombre:<br></label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $user->nombre)}}"><br>
        <label for="email">Nuevo Correo Electrónico:<br></label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email)}}"><br>
        <label for="telefono">Nuevo Teléfono:<br></label>
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $user->telefono)}}"><br>
        <label for="profesion">Nueva Profesión:<br></label>
        <select name="cod_profesion" id="profesion" value="{{ old('cod_profesion', $user->cod_profesion)}}">
           <option value="1">...</option>
           <option value="2">Back-End Developer</option>
           <option value="3">Front-End Developer</option>
           <option value="4">Audivisuales</option>
           <option value="5">Ingeniero</option>
        </select><br>
        <br>
        <button type="submit" class="btn-sign">Actializar Sujeto</button>
    </form>
@endsection
@section('sidebar')
    
@endsection