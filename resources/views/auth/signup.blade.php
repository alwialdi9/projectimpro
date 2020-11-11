<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/auth.css')}}">
    <title>S.I.P.A &mdash; {{ $title }}</title>
</head>
<body>
    <div id="app" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="img/AssetSignIn/1123.png" class="img-background-signup">
                </div>
                <div class="col-4">
                    <form class="mt-5">
                        <div class="container-col-title">
                            <h2 class="primary-text text-center">Sign Up</h2>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text form-no">+62</div>
                                </div>
                                <input type="text" class="form-control nomor" id="inlineFormInputGroupUsername2" placeholder="Phone Number">
                              </div>

                          
                        </div>
                        <div class="form-group mb-3">
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>

</html>