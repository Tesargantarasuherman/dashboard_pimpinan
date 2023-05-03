@extends('layouts.admin')
@section('title','Data PKL')
@section('main-content')
<!-- Page Heading -->
<div class="container-fluid">
    <h6 class="m-0 font-weight-bold ">Data Integrasi dengan Aplikasi SIPKL</h6>
    <!-- <i>
        <div id="lastUpdate" style="display: flex">Update Terakhir, </div>
    </i> -->
    <div class="row my-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div id="pkl"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div id="pklPendidikan"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div id="pklBinaan"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div id="pklAgama"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div id="pklKategoriProduk"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklWaktu"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklMedia"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklStatusPemilik"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklStatusPernikahan"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklStatusNik"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold" id="titlePemilikBisnis"></h5>
                        </div>
                        <div class="card-body h-100">
                            <h2 class="text-center my-4 font-weight-bold" id="totalPemilikBisnis" style="min-height:250px"></h2>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklOmset"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklBisnis"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div id="pklCetakKartu"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold" id="titleBisnis"></h5>
                        </div>
                        <div class="card-body h-100">
                            <h2 class="text-center my-4 font-weight-bold" id="totalBisnis" style="min-height:250px"></h2>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('data-statistik.js-pkl')
@endsection
