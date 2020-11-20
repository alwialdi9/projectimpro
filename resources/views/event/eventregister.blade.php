@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

@endsection

@section('content')

<main>
    <section class="event-regist">
        <div class="container container-event">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h2 class="text-center container-event-text">Lengkapi Data Event Anda</h2>
                    <form class="container-event-form" method="POST" action="{{ url('/event-create') }}" enctype= "multipart/form-data" >
                        @csrf 
                        <input type="hidden" name="namaEvent" id="namaEvent" value="{{ $event }}">
                        <input type="hidden" name="lokasi" id="lokasi" value="{{ $lokasi }}">
                        <input type="hidden" name="email" id="email" value="{{ $email }}">
                        <div class="form-group">
                            <label for="suratpengantar">Surat Pengantar</label>
                            <input type="file" class="form-control-file" id="suratpengantar" name="pengantar">
                        </div>

                        <div class="form-group">
                            <label for="proposal">Proposal Acara</label>
                            <input type="file" class="form-control-file" id="proposal" name="proposal">
                        </div>

                        <div class="form-group">
                            <label for="proposalkeramaian">Proposal Keramaian (jika peserta >500 orang)</label>
                            <input type="file" class="form-control-file" id="proposalkeramaian" name="proposalRamai">
                        </div>

                        <div class="form-group">
                            <label for="tanggalEvent">Tanggal Event</label>
                            <input type="text" class="form-control-file" id="tanggalEvent" name="tanggalEvent" placeholder="Masukkan tanggal event berlangsung" autocomplete="off" value="">
                        </div> 

                        <div class="form-group">
                                <label for="deskripsi">Deskripsi Acara</label>
                                <textarea class="form-control" id="deskripsi" rows="6" name="deskripsi"></textarea>
                        </div>  
                        <button type="submit" class="btn btn-event-regist">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
    $(function() {
        var today = new Date();
      $('input[name="tanggalEvent"]').daterangepicker({
          autoUpdateInput: false,
          minDate: today,
          locale: {
              cancelLabel: 'Clear'
          }
      });
    
      $('input[name="tanggalEvent"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('YYYY-MM-DD') + ' s/d ' + picker.endDate.format('YYYY-MM-DD'));
      });
    
      $('input[name="tanggalEvent"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
    
    });
    </script>

@endsection