@extends('layouts.admin')
<style>
    #map {
        height: 900px;
    }

</style>

@section('main-content')
  
    <div class="container-fluid">
        <h6 class="m-0 font-weight-bold ">Beranda</h6>
        <div class="row my-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-md-3 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto bg-primary d-none d-md-none d-lg-block p-2 rounded text-light"><i
                                            class="fa fa-lg fa-building" aria-hidden="true"></i></div>
                                    <div class="col-md-6 ml-4">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Indeks
                                            Smart City</div>
                                        <div class="text-sm font-weight-bold text-gray-800 text-uppercase">3.21</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto bg-info d-none d-md-none d-lg-block p-2 rounded text-light"><i
                                            class="fa fa-lg fa-list" aria-hidden="true"></i></div>
                                    <div class="col-md-6 ml-4">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Indeks SPBE
                                            <div id="spbe_tahun">Tahun </div>
                                        </div>
                                        <div class="text-sm font-weight-bold text-gray-800 text-uppercase" id="nilai_index"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto bg-warning d-none d-md-none d-lg-block p-2 rounded text-light"><i
                                            class="fa fa-lg fa-users" aria-hidden="true"></i></div>
                                    <div class="col-md-6 ml-4">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Indeks KAMI
                                        </div>
                                        <div class="text-sm font-weight-bold text-gray-800 text-uppercase">3.21</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto bg-danger d-none d-md-none d-lg-block p-2 rounded text-light"><i
                                            class="fa fa-lg fa-info-circle" aria-hidden="true"></i></div>
                                    <div class="col-md-6 ml-4">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Indeks KIP
                                        </div>
                                        <div class="text-sm font-weight-bold text-gray-800 text-uppercase">3.21</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card shadow">
                            <div class="card-body">
                                <h6 class="m-0 font-weight-bold">Statistik Rekapitulasi</h6>
                                <div type="bar" height="300" width="100%" style="min-height: 315px;" id="chart">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-auto bg-info  d-none d-md-none d-lg-block p-2 rounded text-light">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 ml-4">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1" id="hari">
                                                </div>
                                                <div class="text-sm font-weight-bold text-gray-800 text-uppercase" id="tanggal">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-12">
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-auto bg-info  d-none d-md-none d-lg-block p-2 rounded text-light">
                                                <i class="fa fa-mosque"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <!-- <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1" id="shalat">
                                                    
                                                </div>
                                                <div class="text-sm font-weight-bold text-gray-800 text-uppercase"  id="waktu-shalat">

                                                </div> -->
                                                <table class="table table-responsive" style="margin:-10px 40px -10px 0 !important;overflow-x:scroll !important">
                                                <thead class="thead-light">
                                                    <tr>
                                                    <th scope="col" style="font-size:12px">Subuh</th>
                                                    <th scope="col" style="font-size:12px">Dzuhur</th>
                                                    <th scope="col" style="font-size:12px">Ashar</th>
                                                    <th scope="col" style="font-size:12px">Maghrib</th>
                                                    <th scope="col" style="font-size:12px">isya</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th style="font-size:12px" id="waktu-subuh">-</th>
                                                    <td style="font-size:12px" id="waktu-dzuhur">-</td>
                                                    <td style="font-size:12px" id="waktu-ashar">-</td>
                                                    <td style="font-size:12px" id="waktu-maghrib">-</td>
                                                    <td style="font-size:12px" id="waktu-isya">-</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-md-12">
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-auto bg-info  d-none d-md-none d-lg-block p-2 rounded text-light">
                                                <i class="fas fa-thermometer-half"></i>
                                            </div>
                                            <div class="col-md-6 ml-4">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                    Suhu
                                                </div>
                                                <div class="text-sm font-weight-bold text-gray-800 text-uppercase">
                                                    <span id="suhu"></span>&#176;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h6 class="m-0 font-weight-bold text-secondary">Agenda</h6>
                        <div class="row mt-4">
                            <div class="container">
                                <button class="btn btn-danger my-2" id="addEventButton">Tambah Agenda</button>
                                <div id='calendar'>
                                    @include('home.component.add_agenda')
                                    @include('home.component.detail_agenda')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('js')
<script>
    let aplikasiLength = 0;
    let cctvLength = 0;
    let wifiLength=0;
    function getCuaca() {
        $.ajax({
        type: "GET",
        url: `../api/v1/cuaca`,
        success: function (res) {
            // console.log(res)
            $('#suhu').text(res?.data?.response?.data?.main?.temp)
        }
    }) 
    }
    function dateNow(){
        let date_now = moment(new Date()).lang("id").format('MMMM Do YYYY, h:mm:ss a');
        let bulan = moment(new Date()).lang("id").format('LL');
        let hari = moment(new Date()).lang("id").format('dddd');
        let date = date_now.split(",")
        setTimeout(() => {
            dateNow();
        }, 1000);
        // console.log(date)
        $('#hari').text(hari+', '+bulan)
        $('#tanggal').text(date[1])
    }
    function getShalat() {
        $.ajax({
        type: "GET",
        url: `../api/v1/shalat`,
        success: function (res) {
            const now = new Date();
            const current = now.getHours() + ':' + now.getMinutes();
            // const current = '19:19'
            let data = null;
            $('#waktu-subuh').text(res.data.data.jadwal.subuh);
            $('#waktu-dzuhur').text(res.data.data.jadwal.dzuhur);
            $('#waktu-ashar').text(res.data.data.jadwal.ashar);
            $('#waktu-maghrib').text(res.data.data.jadwal.maghrib);
            $('#waktu-isya').text(res.data.data.jadwal.isya);

            // if((current >= res.data.data.jadwal.ashar) &&  (current < res.data.data.jadwal.maghrib )){
            //     $('#shalat').text('Ashar')
            //     $('#waktu-shalat').text(res.data.data.jadwal.ashar)
            // }
            // else if((current >= res.data.data.jadwal.maghrib ) && (current < res.data.data.jadwal.isya )){
            //     $('#shalat').text('Maghrib')
            //     $('#waktu-shalat').text(res.data.data.jadwal.maghrib)            
            // }
            // else if((current >= res.data.data.jadwal.isya ) && (current < '24:00')){
            //     $('#shalat').text('Isya')
            //     $('#waktu-shalat').text(res.data.data.jadwal.isya) 
            // }
            // else if((current >= res.data.data.jadwal.subuh )&& (current < res.data.data.jadwal.terbit )){
            //     $('#shalat').text('Subuh')
            //     $('#waktu-shalat').text(res.data.data.jadwal.subuh)
            // }
            // else if((current >= res.data.data.jadwal.dzuhur ) && (current < res.data.data.jadwal.ashar)){
            //     $('#shalat').text('Dzuhur')
            //     $('#waktu-shalat').text(res.data.data.jadwal.dzuhur)
            // }
            // else{
            //     console.log('kesini');
            // }
            // console.log(current,res.data.data.jadwal);
        }
    })
    setTimeout(() => {
        getShalat();
    }, 1000);
    }
    function setCalendar(){
        var calendar = $('#calendar').fullCalendar({
                height: 650,
                showNonCurrentDates: false,
                editable: false,
                defaultView: 'month',
                yearColums: 3,
                header: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'year,month,basicweek,basicDay'
                },
                events: "{{ url('agenda') }}",

                // dayClick:function(date,event,view){
                //     $('#dialog').css("visibility", "visible");
                //     $('#dialog').dialog({
                //         title:'Add Agenda',
                //         width:600,
                //         height:700,
                //         modal:true,
                //         show:{effect:'clip',duration:350},
                //         hide:{
                //             effect:'clip',duration:250
                //         }
                //     })
                // },
                eventClick: function(e) {
                    $('#detail-dialog').css("display", "block");
                    $('#title').val(e.title);
                    $('#location').val(e.location);
                    $('#start').val(e.start);
                    $('#end').val(e.end);
                    $('#end_time').val(e.end_time);
                    $('#start_time').val(e.start_time);
                    $('#detail-dialog').dialog({
                        title: 'Detail Agenda',
                        width: 600,
                        height: 500,
                        modal: true,
                        show: {
                            effect: 'clip',
                            duration: 350
                        },
                        hide: {
                            effect: 'clip',
                            duration: 250
                        }
                    })
                }
            });
    }
    $('#addEventButton').on('click', function() {
        $('#dialog').css("display", "block");
        $('#dialog').dialog({
            title: 'Add Agenda',
            width: 600,
            height: 700,
            modal: true,
            show: {
                effect: 'clip',
                duration: 350
            },
            hide: {
                effect: 'clip',
                duration: 250
            }
        })
    })
    function setChart(params) {
        // Create the chart
Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: 'Data Rekapitulasi Rescource'
    },
    subtitle: {
        align: 'left',
        text: 'Source: '
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Data'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: ''
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
    },

    series: [
        {
            name: "Data",
            colorByPoint: true,
            data: [
                {
                    name: "Aplikasi",
                    y: aplikasiLength,
                    drilldown: "Aplikasi"
                },
                {
                    name: "CCTV",
                    y: cctvLength,
                    drilldown: "CCTV"
                },
                {
                    name: "Wifi",
                    y: wifiLength,
                    drilldown: "Wifi"
                }
            ]
        }
    ],
});
    }
    function getAplikasi(){
        $.ajax({
            type: "GET",
            url:   "https://aplikasi.bandung.go.id/wp-json/api/v1/aplikasi?page=1&per_page=300",
            dataType: 'json',
            headers: {
                    "Authorization": "261b3b04f89120d8515b57cd1011610b8fd2272a",
                },
            async: false,
            success: function (res){
                aplikasiLength = res.data.length;
                setChart();
            }
        });
    }
    function getTicketToday(){
        $.ajax({
            type: "GET",
            url:   "../ticket",
            dataType: 'json',

            async: false,
            success: function (res){
                console.log('res',res)
            }
        });
    }
    function getCCTV(){
        $.ajax({
        type: "GET",
        url: `../infrastruktur-tik/api/cctv`,
        success: function (res) {
            // console.log(res.length)
            cctvLength = res.length;
            setChart();
        }
    })
    }
    function getWifi(){
        $.ajax({
        type: "GET",
        url: `../api/v1/master-data-wifi`,
        success: function (res) {
            // console.log(res)
            wifiLength = res.length;
            setChart();
        }
    })
    }
    $(document).ready(function() {
        getTicketToday();
        setTimeout(() => {
            dateNow();
            getShalat();
        }, 1000);
        getAplikasi();
        getCuaca();
        setCalendar();
        setChart();
        getCCTV();
        getWifi();
        indexSpbe();
    })
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
    function indexSpbe(){
        let year_now = new Date().getFullYear();
        years = year_now - 1;
        $('#spbe_tahun').append(years)
        let tahun = [];
        let data = [];

        $.ajax({
            type: "GET",
            url: '../spbe/api/indeks-spbe-tahun',
            dataType: 'json',
            async: false,
            success: function (res) {
                $.each(res, function(i, value) {
                    if (res[i].tahun == years ) {
                        $('#nilai_index').append(res[i].nilai)
                    }
                });
            }
        });
    }
</script>
@stop
@endsection
