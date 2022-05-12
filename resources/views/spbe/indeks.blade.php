@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h6 class="m-0 font-weight-bold ml-3 mb-4">Indeks SPBE</h6>
                <div type="area" height="300" width="100%" style="min-height: 315px;">

                </div>
            </div>
        </div>
        <div class="card my-4">
            <div class="card-body">
                <h6 class="m-0 font-weight-bold mb-4 ml-3">Indeks SPBE Tahunan</h6>
                <div class="col-md-12">
                    <div class="card" style="max-height: 90vh; overflow: scroll;">
                        <div class="form-group my-2 mx-2"><label for="pilihTahun">Pilih Tahun</label>
                            <div>
                                <div><input type="text" class="" value=""></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mr-4"></div>
                        <div class="card-body">
                            <h6 class="m-0 font-weight-bold mb-4">Tabel Index SPBE</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr style="font-size: 12px; font-weight: bold;">
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Indikator</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Bobot</th>
                                        <th scope="col">Skala Nilai</th>
                                        <th scope="col">Index</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
