<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>College and Student Management System</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
        <strong>College and Student Management System</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('colleges.index') }}" class="nav-link">Colleges</a></li>
          <li class="nav-item"><a href="{{ route('students.index') }}" class="nav-link">Students</a></li>
          <li class="nav-item"><a href="{{ route('colleges.create') }}" class="nav-link">Add New College</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
    $(document).ready(function() { // extra code for nicer UI
      $('.nav-item').hover(
        function() {
          $(this).addClass('active');
        },
        function() {
          $(this).removeClass('active');
        }
      );
    });
  </script>
</body>
<footer class="text-center mt-5 text-muted" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #f8f9fa; padding: 10px 0;">
  <p>Home Assignment for Server-Side Scripting Deo Borg SWD6.2B</p>
</footer>
</html>