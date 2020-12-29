@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/bukti.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')
<main>
    <section class="bukti">
        <div class="container">
         
                <div class="jumbotron">
                <h3 class="display-4">Dokumentasi</h3>
                </div>
            <div class="row ">
                    <div class="col-md-2-col-sm-8 text1"><p>Berikut ini merupakan event yang telah berhasil<br>
                                        Diselenggarakan melalui </br>Kami
                                      </p>
                    </div>
                    <!-- GAMBAR PANAH KEBAWAH -->
                    <div class="gambar1">
                        <img class="img1" src="img/AssetBukti/path 21.png"  >
                    </div>
                    <!-- GAMBAR BAR -->
                    <div class="gambar2">
                        <img class="img2" src="img/AssetBukti/Rectangle 17.png"  >
                    </div>

                    

                    <div class="row kolom">
                            <div class="col-sm mt-1 "><iframe width="180" height="120" src="https://www.youtube.com/embed/zsTG7KhseTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="col-sm mt-1 "><iframe width="180" height="120" src="https://www.youtube.com/embed/q5sky56o9sE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="col-sm mt-1 "><iframe width="180" height="120" src="https://www.youtube.com/embed/ISV3x6THEEg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="col-sm mt-1 "><iframe width="180" height="120" src="https://www.youtube.com/embed/dpgRfiH14SE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            <div class="col-sm mt-1 "><iframe width="180" height="120" src="https://www.youtube.com/embed/dpgRfiH14SE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                
                                
                    </div>
                    <!-- GAMBAR PANAH KEKANAN -->
                    <div><a href="" class=""><img src="img/AssetBukti/Path 23.png" alt="" width="90" height="90"  class="btn-kanan"></a></div>
                

                        

                       
                               
            </div>       
        </div>
  
                
    </section>

</main>
@endsection