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
                    <div class="card">
                        <div class="form-group my-2 mx-2"><label for="pilihTahun">Pilih Tahun</label>
                            <div>
                                <div><input type="year" class="form-control" value="" id="datepicker" onChange="sort()"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mr-4"></div>
                        <div class="card-body">
                            <h6 class="m-0 font-weight-bold mb-4">Tabel Index SPBE</h6>
                            <table class="table table-striped" id="data-table">
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
                                <tbody id="row-table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('js')
    <script>
         function sort() {
            let tahun = $('#datepicker').val();
            $.ajax({
            type: "GET",
            url:   `http://localhost:8000/spbe/domain-indikator/api`,
            dataType: 'json',
            async: false,
            success: function (res){
                console.log(res);
                let no = 1;
                res.forEach(res => {
                    table = `
                    <tr>
                        <td> ${no++} </td>
                        <td>${res.nama_indikator}</td>
                        <td>${tahun}</td>
                        <td>${res.bobot}</td>
                        <td><input type="text" class="form-control" value=""></td>
                        <td><input type="text" class="form-control" value=""></td>
                        <td><input type="text" class="form-control" value=""></td>
                    </tr>
                    `;
                    $('#row-table').append(table);
                });
                

            }
            // $.ajax({
            // type: "GET",
            // url:   `https://api-dashboard-pimpinan.herokuapp.com/api/v1/get-index-spbe/${tahun}`,
            // dataType: 'json',
            // async: false,
            // success: function (res){
            // console.log(res)
            // }
        });
        }
        $(document).ready(function() {
            $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years", 
                minViewMode: "years",
            });
        });
       
    </script>
    @stop
@endsection
