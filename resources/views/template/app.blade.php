<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    @yield('css')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <title>S.I.P.A &mdash; {{ $title }}</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">S.I.P.A</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav justify-content-end navbar-nav mr-auto center">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/siapakita') }}">Siapa Kita</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/event-list')}}">Event</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Bukti</a>
                    </li>
                  </ul>
                  <p class="nav-user">
                      @if (Session::has('nama'))
                          Hi, {{ Session::get('nama') }}
                      @else
                      <a href="{{ url('/login') }}">Sign In</a> 
                      @endif
                    </p>
                   <ul class="nav-icon ">
                    <li class="nav-item dropdown icon">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                      </div>
                    </li>
                  </ul> 
            </div>
          </nav>
    </header>
@yield('content')

<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>
