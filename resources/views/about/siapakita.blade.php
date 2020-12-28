@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/siapakita.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')


<main>
    <section class="siapakita">
        <div class="container">
            <div class="jumbotron">
              <h1 class="display-4">APA ITU S.I.P.A</h1>
             </div>
                  
                      <div class="row">
                          <div class="gambar">
                          <img class="img1" src="img/AssetSiapaKita/sipa3.png" width="360" >
                          </div>
                          <div class="col-md-2col-sm-8 text1"><p>Sistem Informasi Perizinan Acara adalah sistem yang akan membantu kamu
                            dalam mengurus persuratan dan perizinan ketika kamu ingin membuat acara. Dari mulai acara formal,
                            non-formal, sampai acara keagamaan.
                          </p>
                          <p>
                              <i>"Proffesional"</i> menjadi komitmen bagi kami untuk membantu, melayani dan juga selalu 
                              memberikan yang terbaik dengan standar tertinggi layanan untuk pencapaian hasil terbaik
                          </p>
                          <div class="text2">
                          <p> <i>"Easy and Simple"</i></p>
                        </div>
                          </div> 
                      </div>

                                <div class="col-btn">
                                <a href="{{url('/event')}}" class="btn btn-1" >Join</a>
                              </div>
        </div>
    </section>

</main>
@endsection