@extends('layouts.admin')
<style>
    #map {
        height: 900px;
        z-index: 97;
    }

    .cctv {
        min-width: none;
        max-height: 900px;
        max-width: 300px;
        z-index: 98;
        overflow-y: scroll;
        position: absolute;
        background-color: white;
        right:0;
        padding:10px;
    }

    #list_cctv>button {
        min-width: 270px;
    }
    .video-js{
        width:300px;
        height:300px;
    }
    .leaflet-popup{
        max-width:400px;
        max-height:400px;
    }
    .form-inline{
        background-color:white;
        min-width: 270px;
        padding-top:10px;
    }
    @media only screen and (max-width: 600px) {
        .cctv{
            max-height: 200px;
            right:0;
            left:0;
            top:0;
        }
        .leaflet-popup{
            width:250px;
        }
        .video-js{
            width:200px;
        }
    }

    @media only screen and (min-width: 600px) and (max-width: 900px) {
        .cctv{
            max-height: 300px;
        }
    }
</style>
@section('title','Data CCTV')
@section('main-content')
<div class="content">
    <h6 class="m-0 font-weight-bold text-gray-800">Data CCTV</h6>
    <div class="row no-gutters">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="cctv">
                        <form class="form-inline sticky-top" id="form-submit">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" id="location" placeholder="Masukkan Lokasi">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 ml-2">Cari</button>
                        </form>
                        <div id="list_cctv">
                        </div>
                    </div>
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('infrastruktur.cctv.modal-edit')

@section('js')
<script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
<script>
    var map = L.map('map').setView([-6.914744, 107.649810], 13);
    var tiles = L.tileLayer(
        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

    async function showDetailCCTV(lat, lng) {
        const response = await fetch(`../api/v1/cctv`);
        const jsonData = await response.json();
        const res = jsonData.filter((d, rows) => {
            return d.lat == lat && d.lng == lng
        });


        map.setView([res[0].lat, res[0].lng], 18)
        L.marker([res[0].lat, res[0].lng]).addTo(map)
            .bindPopup(
                '<div><video id="my-video' + res[0].id +
                '" class="video-js" controls preload="auto" data-setup="{}" controls><source src="' +
                res[0].stream_cctv +
                '" type="application/vnd.apple.mpegurl" /></video><p>' +
                res[0].cctv_name + '</p></div>'
            ).openPopup();
        var player = videojs('my-video' + res[0].id + '');
        player.play();
    }

    async function getAllCCTV() {
        const response = await fetch(`../api/v1/cctv`);
        const jsonData = await response.json();
        let listCCTC = [];

        jsonData.forEach((d, row) => {
            listCCTC.push('<button class="btn btn-primary btn-sm my-2" onclick="showDetailCCTV(' + [d.lat, d.lng] + ')" >' + d.cctv_name + '</button><br/>')
        });
        $('#list_cctv').html(listCCTC)
    }
    
    $('#form-submit').submit(
        async function cariData(e) {
            e.preventDefault();
            let lokasi = $('#location').val();

            const response = await fetch(`../api/v1/cctv`);
            const jsonData = await response.json();
            let listCCTC = [];

            let term = lokasi;
            let b = jsonData.filter(item => item.cctv_name.toLowerCase().indexOf(term) > -1);
            
            if(b.length >=1 ){
                b.forEach((d, row) => {
                    listCCTC.push('<button class="btn btn-primary btn-sm my-2" onclick="showDetailCCTV(' + [d.lat, d.lng] + ')" >' + d.cctv_name + '</button><br/>')
                });
                $('#list_cctv').html(listCCTC)
            }
            else{
                $('#list_cctv').html('<p>Data tidak ditemukan</p>')
            }
            
           
        }
    )

    

    $(document).ready(function () {
        getAllCCTV()

        $.getJSON(`../api/v1/cctv`, function (data) {
            $.each(data, function (i) {
                if (data[i].stream_cctv != '') {
                    L.marker([data[i].lat, data[i].lng]).addTo(map).on('click', (e) => {
                        map.setView([e.latlng.lat, e.latlng.lng], 18)
                        L.marker([data[i].lat, data[i].lng]).addTo(map)
                            .bindPopup(
                                '<div><video id="my-video' + data[i].id +
                                '" class="video-js" controls preload="auto" data-setup="{}" controls><source src="' +
                                data[i].stream_cctv +
                                '" type="application/vnd.apple.mpegurl" /></video><p>' +
                                data[i].cctv_name + '</p></div>'
                            ).openPopup();
                        var player = videojs('my-video' + data[i].id + '');
                        player.play();
                    });
                }
            })
        })
    })

</script>
@stop
    @endsection
