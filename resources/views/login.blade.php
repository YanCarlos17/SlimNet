@extends('LoginLayout')
    @section('content')
    <form action="{{ route('Loguear')}}" method="POST" class="form-login">
        <h1 class="h3 mb-3 text-center">Ingreso</h1>
        {{csrf_field()}}
        <input type="text" id="nombre" name="mail" class="form-input" placeholder="Tú email" required autofocus><br>
        <input type="password" id="password" name="telefono" class="form-input" placeholder="Tú telefono" required><br>
        <button class="btn-log" type="submit">Entrar</button><br>
    </form>
    @endsection

   