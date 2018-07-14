@extends('LoginLayout')
    @section('content')
    <form action="{{ route('Loguear')}}" method="POST" class="form-login">
        <h1 class="h3 mb-3 text-center">Ingreso</h1>
        {{csrf_field()}}
        <label for="mail" class="sr-only">Mail</label> <br>
        <input type="text" id="nombre" name="mail" class="form-input" placeholder="Tú email" required autofocus><br>
        <label for="password" class="sr-only">Password</label><br>
        <input type="password" id="password" name="pasword" class="form-input" placeholder="Tú Password" required><br>
        <button class="btn-log" type="submit">Entrar</button><br>
    </form>
    @endsection

   