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
                <div class="d-flex justify-content-between align-items-center mx-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Pilih Tahun</label>
                        <div class="col-sm-8">
                            <input type="year" class="form-control" name="tahun" value="" id="datepicker" required>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">
                        Tambah Data
                    </button>
                </div>
            </form>
            <div id="chartDetail" style="height:90vh"></div>
        </div>
    </div>
</div>
@section('js')
<script>
    function getChart(param) {
        $.ajax({
            type: "GET",
            url: `../spbe/chart/indeks-spbe/api/${param}`,
            dataType: 'json',
            async: false,
            success: function (res) {
                setChart(res)
            }
        });
    }

    function setChart(params) {
        Highcharts.chart('chartDetail', {
            chart: {
                type: 'bar',
                marginLeft: 300
            },
            title: {
                text: 'Detail Pertahun'
            },
            subtitle: {
                text: `Indeks`
            },
            xAxis: {
                type: 'category',
                title: {
                    text: null
                },
                min: 0,
                max: 15,
                scrollbar: {
                    enabled: true
                },
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Indeks',
                    align: 'high'
                }
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                enabled: false
            },
            credits: {
                enabled: false
            },
            series: [{
                dataSorting: {
                    enabled: true,
                },
                name: 'Indeks',
                data: params
            }]
        });
    }
    $(document).ready(function () {
        let year_now = new Date().getFullYear();
        $("#datepicker").val(year_now);
        getChart(year_now);
        let tahun = [];
        let data = [];

        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
        }).on('change', function () {
            let tahun = $("#datepicker").val();
            getChart(tahun);
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
        // 
    });

</script>
@stop
    @endsection
