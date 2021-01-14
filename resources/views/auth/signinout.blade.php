<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>

    <title>S.I.P.A</title>

    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form method="POST" action="{{ url('/signin') }}" class="sign-in-form">
                {{ csrf_field() }}
                <h2 class="title">SIPA - Sign in</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" required placeholder="Password">
              </div>
              <button type="submit" class="btn solid">Login</button>
              <p class="social-text">Or Sign in with social platforms</p>
              <div class="social-media">
                <a href="{{ url('auth/facebook') }}" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ url('auth/google') }}" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
              </div>
            </form>
            <form method="POST" action="{{ url('register') }}" class="sign-up-form">
            {{ csrf_field() }}
              <h2 class="title">SIPA - Sign up</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" name="nama" autofocus autocomplete="off" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                @enderror
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpBlock">
                          @error('email')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
              </div>

              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" id="number" placeholder="Phone Number" name="nomor_hp" value="{{ old('nomor_hp') }}"  onkeypress="return hanyaAngka(event)">
                                @error('nomor_hp')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">

                          @error('password')
                                <div class="invalid-feedback mt-2 ml-3">{{ $message }}</div>
                            @enderror
              </div>
              <button type="submit" class="btn">Sign Up</button>
              <p class="social-text">Or Sign up with social platforms</p>
              <div class="social-media">
                <a href="{{ url('auth/facebook') }}" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ url('auth/google') }}" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
              </div>
            </form>
          </div>
        </div>
  
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>New here ?</h3>
              <p>
                Register yourself for the convenience of organizing the event
              </p>
              <h3 style="margin-bottom: 5%">"Easy and Simple"</h3>
              <button class="btn transparent" id="sign-up-btn">
                Sign up
              </button>
            </div>
            <img src="{{asset('img/AssetSignin/undraw_having_fun_iais.svg')}}" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>One of us ?</h3>
              <p>
                Sign in to our website to view and register your event.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Sign in
              </button>
            </div>
            <img src="{{asset('img/AssetSignin/undraw_remotely_2j6y.svg')}}" class="image" alt="" />
          </div>
        </div>
      </div>
  
      <script src="{{asset('js/sign.js')}}"></script>
      <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
     
            return false;
          return true;
        }
      </script>
</body>
</html>