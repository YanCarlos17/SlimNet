
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Entrada del App</title>

    <!-- Bootstrap core CSS -->
  

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body class="text-center body-cover">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SlimNet</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="{{ url('/inicio') }}">Inicio</a>
            <a class="nav-link" href="#">Que es SlimNet?</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Entrada de tú página.</h1>
        <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ullam! Facilis, neque alias consequuntur saepe numquam at, quisquam reiciendis accusantium sunt ab et exercitationem amet ipsa illo placeat quidem odit id architecto eaque quos atque.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary button-cover">Ver más</a>
          <a href="{{url('/nuevo-registro')}}" class="btn btn-lg btn-secondary button-cover">Registrarme</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
