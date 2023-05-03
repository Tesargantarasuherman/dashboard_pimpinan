@extends('layouts.admin')
@section('title','Data Sakti 112')
@section('main-content')
<!-- Page Heading -->
<div class="container-fluid">
    <h6 class="m-0 font-weight-bold ">Data Integrasi dengan Aplikasi Sakti 112</h6>
    <!-- <i>
        <div id="lastUpdate" style="display: flex">Update Terakhir, </div>
    </i> -->
    <div class="row my-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title ">Tiket Hari ini</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody id="tiket">
                            <tr>
                                <th scope="col">Total Complaint</th>
                                <th scope="col" id="complaint"></th>
                            </tr>
                            <tr>
                                <th scope="col">Active</th>
                                <th scope="col" id="active"></th>
                            </tr>
                            <tr>
                                <th scope="col">Done</th>
                                <th scope="col" id="done"></th>
                            </tr>
                            <tr>
                                <th scope="col">Normal</th>
                                <th scope="col" id="normal"></th>
                            </tr>
                            <tr>
                                <th scope="col">Prank</th>
                                <th scope="col" id="prank"></th>
                            </tr>
                            <tr>
                                <th scope="col">Ghost</th>
                                <th scope="col" id="ghost"></th>
                            </tr>
                            <tr>
                                <th scope="col">Open</th>
                                <th scope="col" id="open"></th>
                            </tr>
                            <tr>
                                <th scope="col">Handling</th>
                                <th scope="col" id="handling"></th>
                            </tr>
                            <tr>
                                <th scope="col">Resolve</th>
                                <th scope="col" id="resolve"></th>
                            </tr>
                            <tr>
                                <th scope="col">Kpi</th>
                                <th scope="col" id="kpi"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title ">Laporan Perkategori Hari ini</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody id="category">
       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('data-statistik.js-sakti112')
@endsection
