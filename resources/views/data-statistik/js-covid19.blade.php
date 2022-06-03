@section('js')
    <script>
        let covid = null;
        $(document).ready(function() {

            $.ajax({
                type: "GET",
                url: "https://covid19.bandung.go.id/api/v3/case-summary",
                async: false,
                success: function(res) {
                    // console.log(res);

                    let format_data = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    })

                    $('#lastUpdate').append((new Date(res.data.latest_updates.date)).toISOString()
                        .split('T')[
                            0])
                    $('#total_terkonfirmasi').append(format_data.format(res.data.latest_updates
                        .total_terkonfirmasi))
                    $('#selisih_total_konfirmasi').append(format_data.format(res.data.selisih
                        .total_terkonfirmasi))

                    $('#terkonfirmasi_aktif').append(format_data.format(res.data.latest_updates
                        .terkonfirmasi_aktif))
                    $('#selisih_terkonfirmasi_aktif').append(format_data.format(res.data.selisih
                        .terkonfirmasi_aktif))

                    $('#terkonfirmasi_sembuh').append(format_data.format(res.data.latest_updates
                        .terkonfirmasi_sembuh))
                    $('#selisih_terkonfirmasi_sembuh').append(format_data.format(res.data.selisih
                        .terkonfirmasi_sembuh))

                    $('#terkonfirmasi_meninggal').append(format_data.format(res.data.latest_updates
                        .terkonfirmasi_meninggal))
                    $('#selisih_terkonfirmasi_meninggal').append(format_data.format(res.data.selisih
                        .terkonfirmasi_meninggal))

                    $('#total_suspek').append(format_data.format(res.data.latest_updates.total_suspek))
                    $('#selisih_total_suspek').append(format_data.format(res.data.selisih.total_suspek))

                    $('#suspek_dalam_pantauan').append(format_data.format(res.data.latest_updates
                        .suspek_dalam_pantauan))
                    $('#selisih_suspek_dalam_pantauan').append(format_data.format(res.data.selisih
                        .suspek_dalam_pantauan))

                    $('#kontak_erat').append(format_data.format(res.data.latest_updates
                        .kontak_erat_discarded))
                    $('#selisih_total_kontak_erat').append(format_data.format(res.data.selisih
                        .kontak_erat_discarded))

                    $('#total_kontak_erat').append(format_data.format(res.data.latest_updates
                        .kontak_erat_discarded))
                    $('#selisih_kontak_erat').append(format_data.format(res.data.selisih
                        .kontak_erat_discarded))

                    $('#kontak_erat_dalam_pantauan').append(format_data.format(res.data.latest_updates
                        .kontak_erat_dalam_pantauan))
                    $('#selisih_kontak_erat_dalam_pantauan').append(format_data.format(res.data.selisih
                        .kontak_erat_dalam_pantauan))

                    $('#kontak_erat_discarded').append(format_data.format(res.data.latest_updates
                        .kontak_erat_discarded))
                    $('#selisih_kontak_erat_discarded').append(format_data.format(res.data.selisih
                        .kontak_erat_discarded))

                }
            })


            // Grafik
            $.ajax({
                type: "GET",
                url: "../api/v1/covid",
                async: false,
                success: function(res) {
                    // console.log('re',res.data);
                    covid = res.data;
                }

            })

            Highcharts.chart('container', {
                chart: {
                    type: 'area'
                },
                title: {
                    text: 'Data Covid 19 Kota Bandung'
                },
                subtitle: {
                    text: 'Source: bandung.go.id'
                },
                xAxis: {
                    categories: covid.labels,
                    tickmarkPlacement: 'on',
                    title: {
                        enabled: false
                    }
                },
                yAxis: {
                    title: {
                        text: 'Jumlah'
                    },
                    labels: {
                        formatter: function() {
                            return this.value;
                        }
                    }
                },
                tooltip: {
                    split: true,
                    valueSuffix: ' Orang'
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
                    name: 'Suspek',
                    data: covid.data.total_suspek
                }, {
                    name: 'Terkonfirmasi',
                    data: covid.data.total_terkonfirmasi
                }, {
                    name: 'Konfirmasi Meninggal',
                    data: covid.data.terkonfirmasi_meninggal
                }, {
                    name: 'Konfirmasi Sembuh',
                    data: covid.data.terkonfirmasi_sembuh
                }, {
                    name: 'Konfirmasi Aktif',
                    data: covid.data.terkonfirmasi_aktif
                }]
            });


            // Detail Case Kecamatan
            $.ajax({
                type: "GET",
                url: "https://covid19.bandung.go.id/api/v3/case",
                async: false,
                success: function(res) {
                    console.log('respon', res);
                    datas = res.data;
                    console.log(datas);
                }

            })

            Highcharts.chart('kecamatan', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Detail PerKecamatan'
                },
                subtitle: {
                    text: 'Source: Bandung.go.id'
                },
                xAxis: {
                    categories: [
                        'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'May',
                        'Jun',
                        'Jul',
                        'Aug',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dec'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Terkonfirmasi',
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6,
                        54.4
                    ]

                }, {
                    name: 'Aktif',
                    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6,
                        92.3
                    ]

                }, {
                    name: 'London',
                    data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

                }, {
                    name: 'Berlin',
                    data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

                }]
            });




        })
    </script>
@stop
