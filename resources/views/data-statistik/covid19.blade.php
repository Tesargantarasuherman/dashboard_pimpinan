@extends('layouts.admin')
@section('title','Data Covid 19')
@section('main-content')
<!-- Page Heading -->
<div class="container-fluid">
    <h6 class="m-0 font-weight-bold ">Data Covid-19</h6>
    <i>
        <div id="lastUpdate" style="display: flex">Update Terakhir, </div>
    </i>
    <div class="row my-4">
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center">
                                        Total Konfirmasi
                                    </div>
                                    <div class="text-sm font-weight-bold text-gray-800 text-uppercase text-center"
                                        id="total_terkonfirmasi"></div>
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                                class="fa fa-lg fa-angle-double-up" id="selisih_total_konfirmasi"> </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <div
                                        class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center">
                                        Konfirmasi Aktif
                                    </div>
                                    <div class="text-sm font-weight-bold text-gray-800 text-uppercase text-center"
                                        id="terkonfirmasi_aktif"></div>
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                                class="fa fa-lg fa-angle-double-up" id="selisih_terkonfirmasi_aktif">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center">
                                        Konfirmasi Sembuh
                                    </div>
                                    <div class="text-sm font-weight-bold text-gray-800 text-uppercase text-center"
                                        id="terkonfirmasi_sembuh"></div>
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                                class="fa fa-lg fa-angle-double-up" id="selisih_terkonfirmasi_sembuh"> </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center">
                                        Konfirmasi
                                        Meninggal</div>
                                    <div class="text-sm font-weight-bold text-gray-800 text-uppercase text-center"
                                        id="terkonfirmasi_meninggal"></div>
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                                class="fa fa-lg fa-angle-double-up" id="selisih_terkonfirmasi_meninggal">
                                            </i>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="text-center mb-0 font-weight-bold text-gray-800 mb-2">Suspek</h5>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 text-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="total_suspek"></div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                    class="fa fa-lg fa-angle-double-up" id="selisih_total_suspek"> </i> </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total</div>
                        </div>
                        <div class="col mr-2 text-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="suspek_dalam_pantauan"></div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                    class="fa fa-lg fa-angle-double-up" id="selisih_suspek_dalam_pantauan"> </i> </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Dipantau</div>
                        </div>
                        <div class="col mr-2 text-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="kontak_erat"></div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                    class="fa fa-lg fa-angle-double-up" id="selisih_total_kontak_erat"> </i> </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discarded</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="text-center mb-0 font-weight-bold text-gray-800 mb-2">Kontak Erat</h5>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 text-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="total_kontak_erat"></div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                    class="fa fa-lg fa-angle-double-up" id="selisih_kontak_erat"> </i> </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total</div>
                        </div>
                        <div class="col mr-2 text-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="kontak_erat_dalam_pantauan"></div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                    class="fa fa-lg fa-angle-double-up" id="selisih_kontak_erat_dalam_pantauan"> </i>
                            </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Dipantau</div>
                        </div>
                        <div class="col mr-2 text-center">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="kontak_erat_discarded"></div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><i
                                    class="fa fa-lg fa-angle-double-up" id="selisih_kontak_erat_discarded"> </i> </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Discarded</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex justify-content-end my-4 mr-4">
                    <!-- <button class="btn btn-primary btn-sm px-4 mr-4">Grafik</button>
                            <button class="btn btn-light px-4">Tabel</button> -->
                </div>
                <div class="card-body" id="container"><canvas role="img" height="782" width="1566"
                        style="display: block; box-sizing: border-box; height: 391px; width: 783px;"></canvas></div>
            </div>

        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold ">Grafik Detail PerKecamatan</h6>
                    {{-- <div class="form-group"><label>Pilih Kecamatan</label><select class="form-control"></select>
                        </div> --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my-4">
                                {{-- <div class="spinner-border" role="status"><span class="sr-only">Loading...</span>
                                    </div> --}}
                                <div id="kecamatan"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('data-statistik.js-covid19')
@endsection
