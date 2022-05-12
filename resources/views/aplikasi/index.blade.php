@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Aplikasi') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

    <div id="container"></div>


    </div>
@section('js')
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url:   "http://localhost:8000/aplikasi/api",
            dataType: 'json',
            async: false,
            success: function (){
            alert('Thanks for your comment!');
            }
        });
        let aplikasi =  [
                    {
                        name: "Browsers",
                        colorByPoint: true,
                        data: [
                        {
                            "y": 229,
                            "name": "Dinas Komunikasi dan Informatika"
                        },
                        ]
                    }
                ]
            Highcharts.chart('container', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares. January, 2018'
                },
                subtitle: {
                    text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
                },

                accessibility: {
                    announceNewData: {
                        enabled: true
                    },
                    point: {
                        valueSuffix: '%'
                    }
                },

                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}: {point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series:aplikasi,
            })
    });
</script>
@stop
@endsection
