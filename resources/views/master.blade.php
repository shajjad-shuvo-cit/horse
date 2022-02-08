<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('media') }}">media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- header part -->

  <!-- content er part -->
  @yield('content')


<footer class="bg-dark text-white py-2">
    horse &copy; {{ Carbon\Carbon::now()->format('Y') }} . All rights are reserved
</footer>
<!-- footer part -->
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
