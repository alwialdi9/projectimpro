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
                    <img src="img/AssetLogin/gambar kiri@2x.png" class="img-background-2">
                </div>
                <div class="col-4">
                    <form class="mt-5">
                        <div class="container-col-title">
                            <h2 class="primary-text text-center">Sign In</h2>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="form-text text-muted mx-2">Email or Phone Number</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1" class="form-text text-muted mx-2">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="btn-login mt-3">
                        <button type="submit" class="btn btn-1 mx-auto" tabindex="3">Login</button>
                    </div>
                      </form>

                      <div class="row mt-3">
                          <div class="col"><hr></div>
                          <div class="col-sm-auto" style="opacity: 65%; margin-top: 2px;">or with</div>
                          <div class="col"><hr></div>
                      </div>

                      <div class="mt-3 sosmed">
                        <a href="" class="mx-3 img-sosmed"><img src="img/AssetLogin/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt="" width="30" height="30" class="btn-google"></a>

                        <a href="" class="mx-3 img-sosmed"><img src="img/AssetLogin/d2e5359f8402cb8d3d7b22c463f9013b.png" alt="" width="30" height="30" class="btn-fb"></a>
                      </div>

                      <a href=""><h2 class="text-center mt-4 forgot">Forget Password?</h2></a>
                      

                </div>
              </div>
        </div>
    </div>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>

</html>