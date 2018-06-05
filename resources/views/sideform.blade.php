@section('sidebar')
    <h1 class="text-center">Registrate</h1>
    <form class="form-signin">
        <div class="form-label-group">
            <label for="inputEmail">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>
  
        <div class="form-label-group">
            <label for="inputPassword">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="form-label-group">
            <label for="inputPhone">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" required>
        </div>
        <br>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
        <p class="mt-5 mb-3 text-center">&copy; 2017-2018</p>
      </form>
@endsection