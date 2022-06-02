@section('js')
    <script>
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
            let tanggal = [];
            console.log(tanggal);
            $.ajax({
                type: "GET",
                url: "../api/v1/covid",
                async: false,
                success: function(res) {
                    console.log(res);

                    $.each(res.data.labels, function(index, value) {
                        tanggal.push((res.data.labels[index]));
                    });

                }

            })

            Highcharts.chart('container', {

                title: {
                    text: 'Grafik Perkembangan Covid-19 di Kota Bandung'
                },

                // tooltip: {
                //     pointFormat: "Value: {point.y:,.1f} mm"
                // },

                yAxis: {
                    title: {
                        text: ''
                    }
                },

                xAxis: {
                    gridLineWidth: 1,
                    type: 'datetime',
                    labels: {
                        format: '{value:%Y-%m-%d}',
                        rotation: -45,
                        align: 'right'
                    }
                },

                legend: {
                    align: 'left',
                    verticalAlign: 'top',
                    borderWidth: 0
                },

                series: [
                {
                    name: 'Terkonfirmas',
                    data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175],
                    pointStart: Date.UTC(2021),
                    pointInterval: 24 * 36e5
                }, {
                    name: 'Manufacturing',
                    data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434],
                    pointStart: Date.UTC(2021),
                    pointInterval: 24 * 36e5
                }, {
                    name: 'Sales & Distribution',
                    data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387],
                    pointStart: Date.UTC(2021),
                    pointInterval: 24 * 36e5
                }, {
                    name: 'Project Development',
                    data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227],
                    pointStart: Date.UTC(2021),
                    pointInterval: 24 * 36e5
                }, {
                    name: 'Other',
                    data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111],
                    pointStart: Date.UTC(2021),
                    pointInterval: 24 * 36e5
                }],



            });




        })
    </script>
@stop
