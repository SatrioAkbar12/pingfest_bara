@extends('master')

@section('login_daftar-logout')
  <li class="nav-item">
    <div class="dropdown show">
      <a class="nav-link" href="#" role="button" id="loginDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
      </a>
      <div class="dropdown-menu" aria-labelledby="loginDropdown">
        <a class="dropdown-item" href="/it-venture/login">IT-Venture</a>
        <a class="dropdown-item" href="/seminar/login">Seminar</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <div class="dropdown show">
      <a class="nav-link" href="#" role="button" id="pendaftaranDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pendaftaran
      </a>
      <div class="dropdown-menu" aria-labelledby="pendaftaranDropdown">
        <a class="dropdown-item" href="/it-venture/register">IT-Venture</a>
        <a class="dropdown-item" href="/seminar/register">Seminar</a>
      </div>
    </div>
  </li>
@endsection
