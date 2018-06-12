@extends('layout')
@section('content')
    <h1 class="text-center">Nuevo Registro</h1>
    @if($errors->any())
    <div class="danger-alert">
        <h3>Por favor corrige estos errores</h3>
        <ul class="alert-list">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
    @endif
    <form action="{{ url('/crear')}}" method="POST" class="form-signin">
        {!! csrf_field() !!}
        <label for="nombre">Nombre:<br></label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre')}}"><br>
        <label for="email">Correo Electrónico:<br></label>
            <input type="email" name="email" id="email" value="{{ old('email')}}"><br>
        <label for="telefono">Teléfono:<br></label>
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono')}}"><br>
        <label for="profesion">Profesión:<br></label>
        <select name="cod_profesion" id="profesion">
           <option value="1">...</option>
           <option value="2">Back-End Developer</option>
           <option value="3">Front-End Developer</option>
           <option value="4">Audivisuales</option>
        </select><br>
        <br>
        <button type="submit" class="btn-sign">Registrarme</button>
    </form>
@endsection
@section('sidebar')
    
@endsection