@extends('layouts.app')

@section('navbar')
  @parent

  <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
  <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('services') }}">Layanan</a></li>
  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">Tentang</a></li>
  <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Kontak</a></li>
@endsection
