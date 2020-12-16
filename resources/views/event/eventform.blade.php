@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

            @if (Session::has('alert'))
                <script>
                swal("Info!", "{{ Session::get('alert') }}", "info");
                </script>
            @endif

<main>
    <section class="event">
        <div class="container">
            <div class="container-form col-lg-4">
                <h2 class="container-form-judul text-center">Kami Akan Membantu Event Kamu</h2>
                <form class="inputEvent" action="{{ url('/event-register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="step" id="step" value="event1">
                    <div class="form-group mb-3">
                        <label for="NamaEvent" class="form-text text-muted mx-2">Nama Event</label>
                        <input type="text" class="form-control" id="NamaEvent" name="namaEvent" required autofocus>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="lokasiEvent" class="form-text text-muted mx-2">Lokasi Event</label>
                        <input type="text" class="form-control" id="lokasiEvent" name="lokasiEvent" required>
                      </div>
                      
                      <div class="form-group mb-3">
                        <label for="InputEmail" class="form-text text-muted mx-2">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required id="InputEmail">
                      </div>
                      <p class="container-notice text-muted">*Kami akan menjaga kerahasiaan informasi anda.</p>
                      <button type="submit" class="btn btn-event">Kirim</button>
                </form>
            </div>
        </div>
    </section>
</main>


@endsection