@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

<main>
    <section class="event-list">
        <div class="container container-eventlist">
            <div class="row justify-content-center">
                <div class="col">
                    <h2 class="text-center judul-text mt-2">Event Hari Ini</h2>
                    <div class="table-responsive">
                    <table class="table text-center" id="table-event">
                        <thead>
                          <tr class="table-edit">
                            <th scope="col">No</th>
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Tanggal Acara</th>
                            <th scope="col">Selesai Acara</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody class="table-body table-hover">
                          @foreach ($event as $e)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td class="cuk">{{ $e->nama_event }}</td>
                            <td>{{ date('d F Y', strtotime($e->mulai_acara)) }}</td>
                            <td>{{ date('d F Y', strtotime($e->akhir_acara)) }}</td>
                            <td>{{ $e->lokasi }}</td>
                            <td>{{ $e->status }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
$('#table-event').DataTable( {
    responsive: true
} );
      </script>

</main>


@endsection