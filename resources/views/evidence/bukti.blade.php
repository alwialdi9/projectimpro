@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/bukti.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

<section class="bukti">
    <div class="container">
        <h3 class="display-4 text-center">Bukti</h3>
            <div class="row justify-content-center">
                    <div class="col-md-8 text">
                        <div class="text-konten text-center">
                            <h4>Berikut bukti kami yang telah berhasil menyelenggarakan berbagai acara <br> di masyarakat.</h4>
                        </div>   
                    </div>              
                </div>       
            </div>
            {{-- <i class="fas fa-arrow-down"></i>  --}}
                <div id="carouselExampleIndicators" class="carousel slide carousel-edit" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                        <iframe width="180" height="120" class="col-sm mx-2 my-2" src="https://www.youtube.com/embed/q5sky56o9sE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="180" height="120" class="col-sm mx-2 my-2" src="https://www.youtube.com/embed/ISV3x6THEEg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <iframe width="180" height="120" class="col-sm mx-2 my-2" src="https://www.youtube.com/embed/dpgRfiH14SE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 

                        <iframe width="180" height="120" class="col-sm mx-2 my-2" src="https://www.youtube.com/embed/zsTG7KhseTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                        </div>
                      <div class="carousel-item">
                        <iframe width="180" height="120" src="https://www.youtube.com/embed/q5sky56o9sE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe width="180" height="120" src="https://www.youtube.com/embed/ISV3x6THEEg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe width="180" height="120" src="https://www.youtube.com/embed/dpgRfiH14SE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                        <iframe width="180" height="120" src="https://www.youtube.com/embed/zsTG7KhseTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
          
            
    </section>
     
@endsection