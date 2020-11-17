@extends('template.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')

<main>
    <section class="event-list">
        <div class="container container-eventlist">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h2 class="text-center judul-text">Event Hari Ini</h2>
                    <table class="table text-center">
                        <thead>
                          <tr class="table-edit">
                            <th scope="col">No</th>
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Tanggal Acara</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody class="table-body">
                          <tr>
                            <th scope="row">1</th>
                            <td class="cuk">Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection