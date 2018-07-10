@extends('layout')
    @section('content')
    <form {{--action="{{ route('/Loguear')}}"--}} method="POST" class="form-signin form">
        <h1 class="h3 mb-3 text-center">Ingreso</h1>
        {{csrf_field()}}
        <label for="mail" class="sr-only">Mail</label>
        <input type="text" id="nombre" name="mail" class="form-control" placeholder="Tú email" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="pasword" class="form-control" placeholder="Tú Password" required>
        <button class="btn btn-md btn-primary btn-block" type="submit">Entrar</button>
    </form>
    @endsection

   