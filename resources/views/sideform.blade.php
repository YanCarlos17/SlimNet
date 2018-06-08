@section('sidebar')
    <h1 class="text-center form-title">Registrate</h1>
    <form class="form-signin">
        <div class="">
            <label for="inputEmail">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" class="" placeholder="Nombre" required>
        </div>
  
        <div class="">
            <label for="inputPassword">Email</label><br>
            <input type="email" id="email" name="email" class="" placeholder="Email" required>
        </div>

        <div class="">
            <label for="inputPhone">Teléfono</label><br>
            <input type="text" id="telefono" name="telefono" class="" placeholder="Teléfono" required>
        </div>

        <div class="">
            <label for="inputProfesion">Profesión</label><br>
            <select name="Profesion" id="profesion" required>
                <option value="0">...</option>
                <option value="1">Desarrollador Back-End</option>
                <option value="2">Diseñador Web</option>
                <option value="3">Diseñador Gráfico</option>
                <option value="4">Arquitecto</option>
                <option value="5">Ingeniero en Sistemas</option>
            </select>
        </div>
        <br>
        <div class="">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
        <p class="mt-5 mb-3 text-center">&copy; 2017-2018</p>
      </form>
@endsection