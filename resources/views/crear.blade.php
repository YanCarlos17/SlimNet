@extends('layout')
@section('content')
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
    <form action="{{ url('/crear')}}" method="POST" class="form-signin form">
            <h1 class="h3 mb-3 text-center">Nuevo Registro</h1>
            {{csrf_field()}}
            <label for="nombre" class="sr-only">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tú nombre" required autofocus>
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Tú email" required>
            <label for="telefono" class="sr-only">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" required>
           
            <select name="cod_profesion" id="cod_profesion">
                <option value="1">Elige una profesión</option>
                <option value="2">Back-End Developer</option>
                <option value="3">Front-End Developer</option>
                <option value="4">Audivisuales</option>
            </select><br>
        <button class="btn btn-md btn-primary btn-block" type="submit">Registrarme</button>
    </form>



@endsection
@section('sidebar')
    
@endsection