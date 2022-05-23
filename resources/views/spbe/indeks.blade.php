@extends('layouts.admin')

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h6 class="m-0 font-weight-bold ml-3 mb-4">Indeks SPBE</h6>
            <div class="row">
                <div class="col-md-12">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <div class="card-body">
            <h6 class="m-0 font-weight-bold mb-4 ml-3">Indeks SPBE Tahunan</h6>
            <form method="GET" action="{{ route('indeksspbe.add') }}">
                <button class="btn btn-sm btn-primary" data-toggle="modal">
                    Tambah Data
                </button>
            </form>
            <!-- <div class="col-md-12">
                <div class="card">
                    <div class="form-group my-2 mx-2"><label for="pilihTahun">Pilih Tahun</label>
                        <div>
                            <div><input type="year" class="form-control" value="" id="datepicker" onChange="sort()">
                            </div>
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
            </div> -->
        </div>
    </div>
</div>
@section('js')
<script>
    // function sort() {
    //     let tahun = $('#datepicker').val();
    //     $.ajax({
    //         type: "GET",
    //         url: `../spbe/api/indeks-spbe-tahun`,
    //         dataType: 'json',
    //         async: false,
    //         success: function (res) {
    //             console.log(res);
    //             let no = 1;
    //             let data = []
    //             res.forEach(res => {
    //                 table = `
    //                 <tr>
    //                     <td>${no++} </td>
    //                     <td>${res.nama_indikator}</td>
    //                     <td>${tahun}</td>
    //                     <td>${res.bobot}</td>
    //                     <td><input type="text" class="form-control" value=""></td>
    //                     <td><input type="text" class="form-control" value=""></td>
    //                     <td><input type="text" class="form-control" value=""></td>
    //                 </tr>
    //                 `;
    //                 data.push(table)
    //             });
    //             $('#row-table').html(data);

    //         }
    //         // $.ajax({
    //         // type: "GET",
    //         // url:   `https://api-dashboard-pimpinan.herokuapp.com/api/v1/get-index-spbe/${tahun}`,
    //         // dataType: 'json',
    //         // async: false,
    //         // success: function (res){
    //         // console.log(res)
    //         // }
    //     });
    // }
    $(document).ready(function () {
        let tahun =[];
        let data = [];
        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
        });

        $.ajax({
            type: "GET",
            url: `../spbe/api/indeks-spbe-tahun`,
            dataType: 'json',
            async: false,
            success: function (res) {
                res.forEach(res => {
                    tahun.push(res.tahun)
                    data.push(res.nilai)
                });
            }
        });

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Grafik Indeks SPBE/Tahun'
            },
            subtitle: {
                text: 'Source: Bandung.go.id'
            },
            xAxis: {
                categories: tahun,
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'Indeks'
                },
                labels: {
                    formatter: function () {
                        return this.value;
                    }
                }
            },
            tooltip: {
                split: true,
                valueSuffix: ''
            },
            plotOptions: {
                area: {
                    stacking: 'normal',
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                }
            },
            series: [{
                name: 'Indek SPBE',
                data: data
            }]
        });
    });

</script>
@stop
    @endsection
