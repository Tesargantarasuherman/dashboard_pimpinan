@extends('layouts.admin')

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
</div>
@include('data-statistik.js-pkl')
@endsection
