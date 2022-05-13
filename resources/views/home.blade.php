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
                                        </div>
                                        <div class="text-sm font-weight-bold text-gray-800 text-uppercase">3.21</div>
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
                                <h6 class="m-0 font-weight-bold">Statistik</h6>
                                <div type="bar" height="300" width="100%" style="min-height: 315px;">

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
                                            <div class="col-auto bg-info  d-none d-md-none d-lg-block p-2 rounded text-light">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 ml-4">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Selasa
                                                </div>
                                                <div class="text-sm font-weight-bold text-gray-800 text-uppercase">2 maret</div>
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
                                            <div class="col-auto bg-info  d-none d-md-none d-lg-block p-2 rounded text-light">
                                                <i class="fa fa-mosque"></i>
                                            </div>
                                            <div class="col-md-6 ml-4">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Dzuhur
                                                </div>
                                                <div class="text-sm font-weight-bold text-gray-800 text-uppercase">12:05</div>
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
                                            <div class="col-auto bg-info  d-none d-md-none d-lg-block p-2 rounded text-light">
                                                <i class="fas fa-thermometer-half"></i>
                                            </div>
                                            <div class="col-md-6 ml-4">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Suhu
                                                </div>
                                                <div class="text-sm font-weight-bold text-gray-800 text-uppercase">26.30&#176;</div>
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
    $(document).ready(function() {
            $('#addEventButton').on('click', function() {
                $('#dialog').css("visibility", "visible");
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
                    $('#detail-dialog').css("visibility", "visible");
                    $('#title').val(e.title);
                    $('#location').val(e.location);
                    $('#start').val(e.start);
                    $('#end').val(e.end);
                    $('#end_time').val(e.end_time);
                    $('#start_time').val(e.start_time);
                    $('#detail-dialog').dialog({
                        title: 'Detail Agenda',
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
                }
            });
        })

        function displayMessage(message) {
            toastr.success(message, 'Event');
        }
</script>
@stop
@endsection
