@extends('template.app')
@section('content')

<main>
    <section class="event-regist">
        <div class="container container-event">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h2 class="text-center container-event-text">Lengkapi Data Anda</h2>
                    <form class="container-event-form" method="POST" action="#"> 
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Surat Pengantar</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Proposal Keramaian (jika peserta >500 orang)</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>      
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi Acara</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>  
                        <button type="submit" class="btn btn-event-regist">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection