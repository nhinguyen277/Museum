<!doctype html>
<html>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Toronto Gallery Guide | Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link href="{{url('app.css')}}" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg">

          <a class="navbar-brand" href="/admin/index">
            <img src="/img/logoA.png" alt="Toronto Gallery Guide Logo" width="297" height="75"
              class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/admin/index">Admin Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/museum/index">Museums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/comment/index">Comments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/list">Users</a>
              </li>
            </ul>
            <h5 class="me-2 mt-3">Welcome
            <?php if(Auth::check()); ?>
                <?= auth()->user()->fname ?> <?= auth()->user()->lname ?>
                <a type="button" class="btn btn-secondary text-white" href="{{url('user/logout')}}">Logout</a>

            </h5>
          </div>
        </nav>
      </div>
    </div>
  <hr>
  <div style="max-width: 1500px; margin: auto; padding: 0 1%;">
  <div class="container" style="min-height:65vh;">
            @yield('content')
        </div>
    </div>

    <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 | Toronto Gallery Guide Admin Panel</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
        </ul>
    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if( Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
        @if( Session::has('error'))
            toastr.info("{{ Session::get('error') }}")
        @endif
    </script>


</body>
</html>