@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/siapakita.css')}}">
@endsection

@section('content')


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