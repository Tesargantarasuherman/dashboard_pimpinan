@extends('layouts.admin')
<style>
    #map {
        height: 900px;
    }
    .chart{
        height:410px;
    }
</style>
@section('title','Dashboard')
@section('main-content')

<div class="container-fluid">
    <h6 class="m-0 font-weight-bold ">Dashboard</h6>
    <div class="row my-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-dashboard"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Indeks Smart City</div>
                                <h4 class="number mb-0" id="nilai_index">3,251 <span class="font-12 text-muted"><i
                                            class="fa fa-level-up"></i> 13%</span></h4>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card border-left-primary shadow h-100 py-2">
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
                        </div> -->
                </div>
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-flag"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Indeks SPBE</div>
                                <h4 class="number mb-0" id="nilai_index">3,251 <span class="font-12 text-muted"><i
                                            class="fa fa-level-up"></i> 13%</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-flag"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Indeks KAMI</div>
                                <h4 class="number mb-0" id="nilai_index">3,251 <span class="font-12 text-muted"><i
                                            class="fa fa-level-up"></i> 13%</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-flag"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Indeks KIP</div>
                                <h4 class="number mb-0" id="nilai_index">3,251 <span class="font-12 text-muted"><i
                                            class="fa fa-level-up"></i> 13%</span></h4>
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
                        <div class="card-body chart">
                            <h6 class="m-0 font-weight-bold">Statistik Rekapitulasi</h6>
                            <div type="bar" height="450" width="100%" style="min-height: 315px;" id="chart">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="text mb-2 text-uppercase"
                                                id="hari">
                                            </div>
                                            <h4 class="number mb-0"
                                                id="tanggal">
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <h6 class="text mb-2 text-uppercase">Waktu Shalat Selajutnya</h6>
                                                <h4 class="text mb-2 text-uppercase font-weight-bold" id="time_salah_next"></h4>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Selengkapnya
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card top_widget py-2">
                                <div class="body">
                                <div class="icon"><i class="wi wi-day-cloudy-gusts"></i> </div>
                                <div class="content">
                                    <div class="text mb-2 text-uppercase">Suhu</div>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jadwal Shalat Hari Ini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
            <table class="table"
                style="">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@section('js')
<script>
    let aplikasiLength = 0;
    let cctvLength = 0;
    let wifiLength = 0;

    function getCuaca() {
        $.ajax({
            type: "GET",
            url: `../api/v1/cuaca`,
            success: function (res) {
                $('#suhu').text(res?.data?.response?.data?.main?.temp)
            }
        })
    }

    function dateNow() {
        let date_now = moment(new Date()).lang("id").format('MMMM Do YYYY, h:mm:ss a');
        let bulan = moment(new Date()).lang("id").format('LL');
        let hari = moment(new Date()).lang("id").format('dddd');
        let date = date_now.split(",")
        setTimeout(() => {
        // setInterval
            dateNow();
        }, 1000);
        $('#hari').text(hari + ', ' + bulan)
        $('#tanggal').text(date[1])
    }

    function salahNow(salah){
        let date_now = new Date();
        let data = null;
        console.log(salah[1],'data');
        salah.forEach((index,i) => {
            if(index.waktu <= date_now){
                data = salah[i+1]
            };
        });
        $('#time_salah_next').text(data.nama+' ').append((new Date(data.waktu).getHours())+':'+(new Date(data.waktu).getMinutes()));
        return data;

    }

    function getShalat() {
        $.ajax({
            type: "GET",
            url: `../api/v1/shalat`,
            success: function (res) {
                console.log(res?.data?.data?.jadwal);
                const time_salah = [];
                const salah =['subuh','dzuhur','ashar','maghrib','isya'];

                salah.forEach((index,i) => {
                    time_salah.push({nama:salah?.[i],waktu:new Date(res?.data?.data?.jadwal?.date +' '+ res?.data?.data?.jadwal?.[index]).getTime()})
                });

                console.log(time_salah);
                let s = salahNow(time_salah);
                console.log((new Date(s.waktu).getHours())+':'+(new Date(s.waktu).getMinutes()),'s');
                let data = null;
                $('#waktu-subuh').text(res.data.data.jadwal.subuh);
                $('#waktu-dzuhur').text(res.data.data.jadwal.dzuhur);
                $('#waktu-ashar').text(res.data.data.jadwal.ashar);
                $('#waktu-maghrib').text(res.data.data.jadwal.maghrib);
                $('#waktu-isya').text(res.data.data.jadwal.isya);
            }
        })

    }

    function setCalendar() {
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
            eventClick: function (e) {
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

    // $('#addEventButton').on('click', function () {
    //     $('#dialog').css("display", "block");
    //     $('#dialog').dialog({
    //         title: 'Add Agenda',
    //         width: 600,
    //         height: 700,
    //         modal: true,
    //         show: {
    //             effect: 'clip',
    //             duration: 350
    //         },
    //         hide: {
    //             effect: 'clip',
    //             duration: 250
    //         }
    //     })
    // })

    function setChart(params) {
        // Create the chart
        Highcharts.chart('chart', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Data Rekapitulasi'
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

            series: [{
                name: "Data",
                colorByPoint: true,
                data: [{
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
            }],
        });
    }

    function getAplikasi() {
        $.ajax({
            type: "GET",
            url: "https://aplikasi.bandung.go.id/wp-json/api/v1/aplikasi?page=1&per_page=300",
            dataType: 'json',
            headers: {
                "Authorization": "261b3b04f89120d8515b57cd1011610b8fd2272a",
            },
            async: false,
            success: function (res) {
                aplikasiLength = res.data.length;
                setChart();
            }
        });
    }

    function getTicketToday() {
        $.ajax({
            type: "GET",
            url: "../ticket",
            dataType: 'json',

            async: false,
            success: function (res) {
                console.log('res', res)
            }
        });
    }

    function getCCTV() {
        $.ajax({
            type: "GET",
            url: `../infrastruktur-tik/api/cctv`,
            success: function (res) {
                cctvLength = res.length;
                setChart();
            }
        })
    }

    function getWifi() {
        $.ajax({
            type: "GET",
            url: `../api/v1/master-data-wifi`,
            success: function (res) {
                wifiLength = res.length;
                setChart();
            }
        })
    }
    $(document).ready(function () {
        getTicketToday();
        dateNow();
        getShalat();
        getAplikasi();
        getCuaca();
        setCalendar();
        setChart();
        getCCTV();
        getWifi();
        indexSpbe();
    })

    // function displayMessage(message) {
    //     toastr.success(message, 'Event');
    // }

    function indexSpbe() {
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
                $.each(res, function (i, value) {
                    if (res[i].tahun == years) {
                        $('#nilai_index').append(res[i].nilai)
                    }
                });
            }
        });
    }

</script>
@stop
    @endsection
