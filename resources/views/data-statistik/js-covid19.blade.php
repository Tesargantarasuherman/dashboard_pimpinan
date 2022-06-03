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
                    console.log('re',res.data);
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
                        formatter: function () {
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
                    data:covid.data.terkonfirmasi_meninggal
                }, {
                    name: 'Konfirmasi Sembuh',
                    data: covid.data.terkonfirmasi_sembuh
                }, {
                    name: 'Konfirmasi Aktif',
                    data: covid.data.terkonfirmasi_aktif
                }]
            });




        })
    </script>
@stop
