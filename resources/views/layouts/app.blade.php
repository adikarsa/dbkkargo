<!DOCTYPE html>
<html lang="en">
<head>
  <title>DBK Kargo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/flags.css">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
  <br>
  <div class="row">
    @if (!Auth::check())
      <div class="pull-right" style="margin-right:50px;">
        <a href="#"><img src="/image/blank.png" class="flag flag-gb" alt="EN" /></a>
        <a href="#"><img src="/image/blank.png" class="flag flag-id" alt="ID" /></a>
      </div>
    @endif
    <div class="col-md-3 col-md-offset-2">
      <a href="{{ url('/') }}">
        <img src="/image/logo.png" style="width: 150px; height: 75px" />
      </a>
    </div>
    <div class="hdr col-md-5 text-center">
      <h3>Devian Bachti Karsa</h2>
      <h4><i>Professional Full Services</i></h3>
    </div>
    {{-- Bahasa --}}

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
    <div id="myNavbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        @if (Auth::check())
          @if (Auth::user()->role=="admin")
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="{{ Request::is('admin/pegawai') ? 'active' : '' }}"><a href="{{ url('/admin/pegawai') }}">Pegawai</a></li>
          @elseif (Auth::user()->role=="pegawai")
            <li class="{{ Request::is('pegawai/dashboard') ? 'active' : '' }}"><a href="{{ url('/pegawai/dashboard') }}">Dashboard</a></li>
            <li class="{{ Request::is('pegawai/barang') ? 'active' : '' }}"><a href="{{ url('/pegawai/barang') }}">Barang</a></li>
            <li class="{{ Request::is('pegawai/awb') ? 'active' : '' }}"><a href="{{ url('/pegawai/awb') }}">AWB</a></li>
            <li class="{{ Request::is('pegawai/status') ? 'active' : '' }}"><a href="{{ url('/pegawai/status') }}">Status</a></li>
          @endif
        @else
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
          <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('services') }}">Layanan</a></li>
          <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">Tentang Kami</a></li>
          <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Kontak</a></li>
        @endif
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
