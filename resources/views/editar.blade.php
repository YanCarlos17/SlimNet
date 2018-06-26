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
    {{-- <form method="POST" action="{{url("/detalle-usuario/{$user->id}")}}" class="form-signin">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="nombre">Nuevo Nombre:<br></label>
            <input type="text" name="nombre" id="nombre" value="{{old('nombre',$user->nombre)}}"><br>
        <label for="email">Nuevo Correo Electrónico:<br></label>
            <input type="email" name="email" id="email" value="{{old('email',$user->email)}}"><br>
        <label for="telefono">Nuevo Teléfono:<br></label>
            <input type="tel" name="telefono" id="telefono" maxlength="18" value="{{old('telefono',$user->telefono)}}"><br>
        <label for="cod_profesion">Nueva Profesión:<br></label>
        <select name="cod_profesion" id="cod_profesion" value="{{old('cod_profesion',$user->cod_profesion)}}">
           <option value="1">...</option>
           <option value="2">Back-End Developer</option>
           <option value="3">Front-End Developer</option>
           <option value="4">Audivisuales</option>
           <option value="5">Ingeniero</option>
        </select><br>
        <br>
        <button type="submit" class="btn-sign">Modificar!</button>
    </form> --}}


    <form action="{{url("/detalle-usuario/{$user->id}")}}" method="POST" class="form-signin form">
        <h1 class="h3 mb-3 text-center">Modificar Registro</h1>
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="nombre" class="sr-only">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control"  value="{{old('nombre',$user->nombre)}}" required autofocus>
        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" name="email" class="form-control"  value="{{old('nombre',$user->email)}}" required>
        <label for="telefono" class="sr-only">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" class="form-control"  value="{{old('nombre',$user->telefono)}}" required>
       
        <select name="cod_profesion" id="cod_profesion">
            <option value="1">Nueva profesión</option>
            <option value="2">Back-End Developer</option>
            <option value="3">Front-End Developer</option>
            <option value="4">Audivisuales</option>
        </select><br>
    <button class="btn btn-md btn-primary btn-block" type="submit">Registrarme</button>
    </form>



@endsection
@section('sidebar')
    
@endsection