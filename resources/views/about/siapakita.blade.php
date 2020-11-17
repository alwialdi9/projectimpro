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
                  <a class="nav-link active" href="{{ url('/siapakita') }}">Siapa Kita</a>
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
    <section class="siapakita">
        <div class="container">
          <img src="img/AssetSiapaKita/Group 2.png" class="img-background-2">
            <div class="jumbotron">
            
              <h1 class="display-4">APA ITU S.I.P.A</h1>

            </div>
                  <img class="img1" src="img/AssetSiapaKita/sipa3.png" width="300">
                      <div class="row">
                          <div class="col-sm-5"></div>
                          <div class="col-sm-7"><p>Sistem Informasi Perizinan Acara adalah sistem yang akan membantu kamu
                            dalam mengurus persuratan dan perizinan ketika kamu ingin membuat acara. Dari mulai acara formal,
                            non-formal, sampai acara keagamaan.
                          </p>
                          <p>
                              <i>"Proffesional"</i> menjadi komitmen bagi kami untuk membantu, melayani dan juga selalu 
                              memberikan yang terbaik dengan standar tertinggi layanan untuk pencapaian hasil terbaik
                          </p>
                          </div> 
                      </div>

                              <div class="row">
                                      <div class="col-sm-7"></div>
                                      <div class="col-sm-5">It's Easy and It's Simple</div>
                              </div>
                              <button type="button" class="btn btn-1" >Join</button>
                        
        </div>
  
                
    </section>

</main>

@endsection