@extends('template.app')

@section('content')

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">S.I.P.A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-end navbar-nav mr-auto center">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Siapa Kita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Event</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Bukti</a>
                </li>
              </ul>
              <p class="nav-user"><a href="{{ url('/login') }}">Sign In</a> </p>
              <img src="img/AssetDasboard/polisi.png" width="35">
        </div>
      </nav>
</header>

<main>
    <section class="dashboard">
        <img src="img/AssetDasboard/Path 11.png" class="img-background-2">
            <div class="container">
                <div class="container-col">
                    <div class="container-col-title">
                        <h2 class="primary-text">Kamu Mau Buat Event?</h2>
                        <p class="secondary-text">Yuk ceritakan event apa yang ingin kamu buat <br> bersama kami.</p>
                    </div>
                        <img class="img1" src="img/AssetDasboard/polisi.png" width="300">
                            <div class="container-col-btn">
                                <button type="button" class="btn btn-primary btn1">Join</button>
                        </div>
                </div>
                <div class="container-col2">
                        <table class="container-col2-countdown">
                            <tr>
                                <td id="hours">0</td>
                                <td>:</td>
                                <td id="minutes" >00</td>
                                <td>:</td>
                                <td id="seconds">00</td>
                            </tr>    
                        </table>
                    <div class="container-col2-title2">
                        <h4>Ada <strong>Event</strong> Apa <br>Hari Ini?</h4>
                    </div>
                    <button type="button" class="btn btn-primary container-col2-btn">Lihat</button>
                </div>
            


                <footer>
                    <div class="container-col3">
                        <p class="container-col3-text">Follow Us</p>
                          <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

</main>
@endsection