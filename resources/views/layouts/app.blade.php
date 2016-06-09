<!DOCTYPE html>
<html lang="en">
<head>
  <title>DBK Kargo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-md-3 col-md-offset-2">
      <a href="{{ url('/') }}">
        <img src="/image/logo.png" style="width: 150px; height: 75px" />
      </a>
    </div>
    <div class="hdr col-md-6 text-center">
      <h3>Devian Bachti Karsa</h2>
      <h4><i>Professional Full Services</i></h3>
    </div>
  </div>
  <br>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
        <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}">Layanan</a></li>
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">Tentang</a></li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Kontak</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="{{ Request::is( 'logout') ? 'active' : '' }}"><a href="{{ url('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
        @else
          <li class="{{ Request::is( 'login') ? 'active' : '' }}"><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<div class="{{ Request::is('/') ? '' : 'content' }}">

    @yield('content')

</div>
<footer class="container-fluid text-center">
  <p>© Copyright 2016 DBK Kargo</p>
</footer>

</body>
</html>
