<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>S.I.P.A &mdash; {{ $title }}</title>
</head>
<body>
    <div id="app" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="img/AssetSignin/1123.png" class="img-background-signup">
                </div>
                <div class="col-4">
                    <form class="mt-5" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}
                        <div class="container-col-title">
                            <h2 class="primary-text text-center">Sign Up</h2>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Name" name="nama" autofocus autocomplete="off" value="{{ old('nama') }}">

                          @error('nama')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpBlock">

                          @if (Session::has('afterlogin') == false)
                          <small id="emailHelpBlock" class="form-text text-muted mt-2 ml-3">
                            We'll never share your email
                          </small>
                          @endif

                          @error('email')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text form-no">+62</div>
                                </div>
                                <input type="text" class="form-control nomor @error('nomor_hp') is-invalid @enderror" id="number" placeholder="Phone Number" name="nomor_hp" value="{{ old('nomor_hp') }}"  onkeypress="return hanyaAngka(event)">

                                @error('nomor_hp')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
                              </div>

                          
                        </div>
                        <div class="form-group mb-3">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password">

                          @error('password')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="btn-login mt-3">
                        <button type="submit" class="btn btn-1 mx-auto" tabindex="3">Sign Up</button>
                    </div>
                      </form>

                      <h2 class="text-center mt-4 forgot"><span style="opacity: 65%;">Already have an Account?</span><a href="{{ url('/login') }}"> Sign In</a></h2>
                      

                </div>
              </div>
        </div>
    </div>

    <script>
      function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
   
          return false;
        return true;
      }
    </script>


<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>

</html>