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

<section class="bg-dashboard">
    <div class="container judul">
        <div class="row justify-content-end">
            <div class="col-md-5 col-sm-6 text-konten">
                <h2 class="primary-text">Kamu Mau Buat Event?</h2>
                <p class="secondary-text">Yuk ceritakan event apa yang ingin kamu buat bersama kami.</p>
            </div>
            <div class="col-md-4 col-sm-4 text-konten2">
                <img class="img1" src="img/AssetDasboard/polisi.png" width="300">  
                <div class="btn">
                    <a href="{{url('/event')}}" class="btn btn-primary btn1">Join</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 countdown">
                <table class="col-countdown">
                    <tr>
                        <td id="hours">0</td>
                        <td>:</td>
                        <td id="minutes" >00</td>
                        <td>:</td>
                        <td id="seconds">00</td>
                    </tr>    
                </table>
            </div>
         </div>
         <div class="row justify-content-start wrap">
             <div class="col-md-2 text">
                <h4>Ada <strong>Event</strong> Apa <br>Hari Ini?</h4>
             </div>
             <div class="col-md-2 wrapper">
                <a href="{{url('/event-list')}}" class="btn btn-primary wrapper-btn">Lihat</a>
             </div>
        </div> 
      </div>
    </div>
    <footer>
        <div class="container">
            <div class="row wrapper-footer justify-content-end">
                <div class="col-md-2 wrapper-footer-konten mr-5">
                    <p class="wrapper-footer-text">Follow Us</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</section>
@endsection