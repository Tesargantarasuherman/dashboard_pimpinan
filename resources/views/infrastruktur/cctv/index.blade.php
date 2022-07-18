@extends('layouts.admin')
<style>
    #map {
        height: 900px;
    }
</style>
@section('main-content')
    <div class="container-fluid">
        <h6 class="m-0 font-weight-bold text-gray-800">Data CCTV</h6>
        <div class="row my-4">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-gray-800">Tabel CCTV di Kota Bandung
                                ( Total : {{ $dataCount['dataCctv'] }} CCTV)</h6>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-modal">Tambah Data
                                CCTV
                            </button>
                            @include('infrastruktur.cctv.modal-add')
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="row">
                                <div class="col-md-12"></div>
                            </div>
                        </div>
                        <table class="table table-striped table-responsive mt-4" style="max-height: 74.5vh;">
                            <thead>
                                <tr style="font-size: 12px; font-weight: bold;">
                                    <th scope="col" style="min-width: 20px; max-height: 25px; z-index: 1;">No</th>
                                    <th scope="col"
                                        style="min-width: 150px; max-height: 25px; position: sticky; left: 0px; z-index: 2; background-color: white;">
                                        Lokasi</th>
                                    <th scope="col" style="min-width: 150px; max-height: 25px; z-index: 1;">Dinas</th>
                                    <th scope="col" style="min-width: 150px; max-height: 25px; z-index: 1;">Vendor</th>
                                    <th scope="col" style="min-width: 60px; max-height: 25px; z-index: 1;">Status</th>
                                    <th scope="col" style="min-width: 60px; max-height: 25px; z-index: 1;">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($getCctv as $cctv)
                                <tr>
                                    @if ($cctv->link_stream != '')
                                        <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td style="position: sticky; left: 0px; z-index: 2; background-color: white;">
                                            {{ $cctv->lokasi }}</td>
                                        <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                            {{ $cctv->dinas }}</td>
                                        <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                            {{ $cctv->vendor }}</td>
                                        <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                            {{ $cctv->status != 0 ? 'ON' : 'OFF' }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning" data-toggle="modal"
                                                data-target="#edit-modal-{{ $cctv->id }}">Edit
                                            </button>
                                        </td>
                                    @else
                                    @endif

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">

                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('infrastruktur.cctv.modal-edit')

@section('js')
    <script>
        var map = L.map('map').setView([-6.914744, 107.609810], 13);
        var tiles = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

        $.getJSON('api/cctv', function(data) {
            $.each(data, function(i) {
                if (data[i].link_stream != '') {
                    L.marker([data[i].latitude, data[i].longitude]).addTo(map).on('click', (e) => {
                        L.marker([data[i].latitude, data[i].longitude]).addTo(map)
                            .bindPopup(
                                '<div><video id="my-video" autoplay="autoplay" controls="controls" muted="muted" loop="loop" class="video-js" controls preload="auto" width="300px" data-setup="{}"><source src=" ' +
                                data[i].link_stream +
                                ' " type="application/vnd.apple.mpegurl" /></video><p>' +
                                data[i].lokasi + '</p></div>'
                            ).openPopup();
                        var player = videojs('my-video');
                        player.play();
                    });
                } else {

                }

            });
        });
        $(document).ready(function() {

        })
    </script>
@stop
@endsection
