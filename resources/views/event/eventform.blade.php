@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

<main>
    <section class="event">
        <div class="container">
            <div class="container-form col-4">
                <h2 class="container-form-judul text-center">Kami Akan Membantu Event Kamu</h2>
                <form class="inputEvent" action="" method="post">
                    <div class="form-group mb-3">
                        <label for="exampleNamaEvent" class="form-text text-muted mx-2">Nama Event</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="namaEvent" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-text text-muted mx-2">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                      </div>
                </form>
                <p class="container-notice text-muted">*Kami akan menjaga kerahasiaan informasi anda.</p>
                <button type="submit" class="btn btn-event">Kirim</button>
            </div>
        </div>
    </section>
</main>


@endsection