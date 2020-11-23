@extends('template.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
@section('content')

@if (Session::has('alert'))
            <script>
                swal("Peringatan!", "{{ Session::get('alert') }}", "error");
                </script>
            @endif

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
                            <a href="{{url('/event')}}" class="btn btn-primary btn1">Join</a>
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
                <a href="{{url('/event-list')}}" class="btn btn-primary container-col2-btn">Lihat</a>
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