@extends('layout')
@section('content')
    <h1 class="text-center">Nuevo Registro</h1>
    <form action="{{ url('/crear')}}" method="POST" class="form-signin">
        {!! csrf_field() !!}
        <label for="nombre">Nombre:<br></label>
       <input type="text" name="nombre" id="nombre"><br>
        <label for="email">Correo Electrónico:<br></label>
       <input type="email" name="email" id="email"> <br>
        <label for="telefono">Teléfono:<br></label>
       <input type="text" name="telefono" id="telefono"> <br>
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