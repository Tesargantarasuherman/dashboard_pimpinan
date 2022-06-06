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
            let kecamatan = [];

            let andir_konfirmasi = [];
            let antapani_konfirmasi = [];
            let arcamanik_konfirmasi = [];
            let astana_konfirmasi = [];
            let babakan_ciparay_konfirmasi = [];
            let bandung_kidul_konfirmasi = [];
            let bandung_kulon_konfirmasi = [];
            let bandung_wetan_konfirmasi = [];
            let batununggal_konfirmasi = [];
            let bojongloa_kaler_konfirmasi = [];
            let bojongloa_kidul_konfirmasi = [];
            let buah_batu_konfirmasi = [];
            let cibeunying_kaler_konfirmasi = [];
            let cibeunying_kidul_konfirmasi = [];
            let cibiru_konfirmasi = [];
            let cicendo_konfirmasi = [];
            let cidadap_konfirmasi = [];
            let cinambo_konfirmasi = [];
            let coblong_konfirmasi = [];
            let gedebage_konfirmasi = [];
            let kiaracondong_konfirmasi = [];
            let lengkong_konfirmasi = [];
            let mandalajati_konfirmasi = [];
            let panyileukan_konfirmasi = [];
            let rancasari_konfirmasi = [];
            let regol_konfirmasi = [];
            let sukajadi_konfirmasi = [];
            let sukasari_konfirmasi = [];
            let sumur_bandung_konfirmasi = [];
            let ujung_berung_konfirmasi = [];
            
            //terkonfirmasi aktif
            let andir_konfirmasi_aktif = [];
            let antapani_konfirmasi_aktif = [];
            let arcamanik_konfirmasi_aktif = [];
            let astana_konfirmasi_aktif = [];
            let babakan_ciparay_konfirmasi_aktif = [];
            let bandung_kidul_konfirmasi_aktif = [];
            let bandung_kulon_konfirmasi_aktif = [];
            let bandung_wetan_konfirmasi_aktif = [];
            let batununggal_konfirmasi_aktif = [];
            let bojongloa_kaler_konfirmasi_aktif = [];
            let bojongloa_kidul_konfirmasi_aktif = [];
            let buah_batu_konfirmasi_aktif = [];
            let cibeunying_kaler_konfirmasi_aktif = [];
            let cibeunying_kidul_konfirmasi_aktif = [];
            let cibiru_konfirmasi_aktif = [];
            let cicendo_konfirmasi_aktif = [];
            let cidadap_konfirmasi_aktif = [];
            let cinambo_konfirmasi_aktif = [];
            let coblong_konfirmasi_aktif = [];
            let gedebage_konfirmasi_aktif = [];
            let kiaracondong_konfirmasi_aktif = [];
            let lengkong_konfirmasi_aktif = [];
            let mandalajati_konfirmasi_aktif = [];
            let panyileukan_konfirmasi_aktif = [];
            let rancasari_konfirmasi_aktif = [];
            let regol_konfirmasi_aktif = [];
            let sukajadi_konfirmasi_aktif = [];
            let sukasari_konfirmasi_aktif = [];
            let sumur_bandung_konfirmasi_aktif = [];
            let ujung_berung_konfirmasi_aktif = [];
            
            //terkonfirmasi sembuh
            let andir_konfirmasi_sembuh = [];
            let antapani_konfirmasi_sembuh = [];
            let arcamanik_konfirmasi_sembuh = [];
            let astana_konfirmasi_sembuh = [];
            let babakan_ciparay_konfirmasi_sembuh = [];
            let bandung_kidul_konfirmasi_sembuh = [];
            let bandung_kulon_konfirmasi_sembuh = [];
            let bandung_wetan_konfirmasi_sembuh = [];
            let batununggal_konfirmasi_sembuh = [];
            let bojongloa_kaler_konfirmasi_sembuh = [];
            let bojongloa_kidul_konfirmasi_sembuh = [];
            let buah_batu_konfirmasi_sembuh = [];
            let cibeunying_kaler_konfirmasi_sembuh = [];
            let cibeunying_kidul_konfirmasi_sembuh = [];
            let cibiru_konfirmasi_sembuh = [];
            let cicendo_konfirmasi_sembuh = [];
            let cidadap_konfirmasi_sembuh = [];
            let cinambo_konfirmasi_sembuh = [];
            let coblong_konfirmasi_sembuh = [];
            let gedebage_konfirmasi_sembuh = [];
            let kiaracondong_konfirmasi_sembuh = [];
            let lengkong_konfirmasi_sembuh = [];
            let mandalajati_konfirmasi_sembuh = [];
            let panyileukan_konfirmasi_sembuh = [];
            let rancasari_konfirmasi_sembuh = [];
            let regol_konfirmasi_sembuh = [];
            let sukajadi_konfirmasi_sembuh = [];
            let sukasari_konfirmasi_sembuh = [];
            let sumur_bandung_konfirmasi_sembuh = [];
            let ujung_berung_konfirmasi_sembuh = [];

            //terkonfirmasi meninggal
            let andir_konfirmasi_meninggal = [];
            let antapani_konfirmasi_meninggal = [];
            let arcamanik_konfirmasi_meninggal = [];
            let astana_konfirmasi_meninggal = [];
            let babakan_ciparay_konfirmasi_meninggal = [];
            let bandung_kidul_konfirmasi_meninggal = [];
            let bandung_kulon_konfirmasi_meninggal = [];
            let bandung_wetan_konfirmasi_meninggal = [];
            let batununggal_konfirmasi_meninggal = [];
            let bojongloa_kaler_konfirmasi_meninggal = [];
            let bojongloa_kidul_konfirmasi_meninggal = [];
            let buah_batu_konfirmasi_meninggal = [];
            let cibeunying_kaler_konfirmasi_meninggal = [];
            let cibeunying_kidul_konfirmasi_meninggal = [];
            let cibiru_konfirmasi_meninggal = [];
            let cicendo_konfirmasi_meninggal = [];
            let cidadap_konfirmasi_meninggal = [];
            let cinambo_konfirmasi_meninggal = [];
            let coblong_konfirmasi_meninggal = [];
            let gedebage_konfirmasi_meninggal = [];
            let kiaracondong_konfirmasi_meninggal = [];
            let lengkong_konfirmasi_meninggal = [];
            let mandalajati_konfirmasi_meninggal = [];
            let panyileukan_konfirmasi_meninggal = [];
            let rancasari_konfirmasi_meninggal = [];
            let regol_konfirmasi_meninggal = [];
            let sukajadi_konfirmasi_meninggal = [];
            let sukasari_konfirmasi_meninggal = [];
            let sumur_bandung_konfirmasi_meninggal = [];
            let ujung_berung_konfirmasi_meninggal = [];

            $.ajax({
                type: "GET",
                url: "https://covid19.bandung.go.id/api/v3/case",
                async: false,
                success: function(res) {
                    console.log('respon', res);

                    $.each(res.data, function(index, value) {
                        kecamatan.push(res.data[index].kecamatan)
                    });

                    $.each(res.data, function(i, value) {
                        if (res.data[i].kecamatan == "ANDIR") {
                            andir_konfirmasi = value.total_terkonfirmasi
                            andir_konfirmasi_aktif = value.terkonfirmasi_aktif
                            andir_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            andir_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "ANTAPANI") {
                            antapani_konfirmasi = value.total_terkonfirmasi
                            antapani_konfirmasi_aktif = value.terkonfirmasi_aktif
                            antapani_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            antapani_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "ARCAMANIK") {
                            arcamanik_konfirmasi = value.total_terkonfirmasi
                            arcamanik_konfirmasi_aktif = value.terkonfirmasi_aktif
                            arcamanik_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            arcamanik_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "ASTANA ANYAR") {
                            astana_konfirmasi = value.total_terkonfirmasi
                            astana_konfirmasi_aktif = value.terkonfirmasi_aktif
                            astana_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            astana_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BABAKAN CIPARAY") {
                            babakan_ciparay_konfirmasi = value.total_terkonfirmasi
                            babakan_ciparay_konfirmasi_aktif = value.terkonfirmasi_aktif
                            babakan_ciparay_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            babakan_ciparay_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BANDUNG KIDUL") {
                            bandung_kidul_konfirmasi = value.total_terkonfirmasi
                            bandung_kidul_konfirmasi_aktif = value.terkonfirmasi_aktif
                            bandung_kidul_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            bandung_kidul_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BANDUNG KULON") {
                            bandung_kulon_konfirmasi = value.total_terkonfirmasi
                            bandung_kulon_konfirmasi_aktif = value.terkonfirmasi_aktif
                            bandung_kulon_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            bandung_kulon_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BANDUNG WETAN") {
                            bandung_wetan_konfirmasi = value.total_terkonfirmasi
                            bandung_wetan_konfirmasi_aktif = value.terkonfirmasi_aktif
                            bandung_wetan_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            bandung_wetan_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BATUNUNGGAL") {
                            batununggal_konfirmasi = value.total_terkonfirmasi
                            batununggal_konfirmasi_aktif = value.terkonfirmasi_aktif
                            batununggal_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            batununggal_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BOJONGLOA KALER") {
                            bojongloa_kaler_konfirmasi = value.total_terkonfirmasi
                            bojongloa_kaler_konfirmasi_aktif = value.terkonfirmasi_aktif
                            bojongloa_kaler_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            bojongloa_kaler_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BOJONGLOA KIDUL") {
                            bojongloa_kidul_konfirmasi = value.total_terkonfirmasi
                            bojongloa_kidul_konfirmasi_aktif = value.terkonfirmasi_aktif
                            bojongloa_kidul_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            bojongloa_kidul_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "BUAH BATU") {
                            buah_batu_konfirmasi = value.total_terkonfirmasi
                            buah_batu_konfirmasi_aktif = value.terkonfirmasi_aktif
                            buah_batu_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            buah_batu_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "CIBEUNYING KALER") {
                            cibeunying_kaler_konfirmasi = value.total_terkonfirmasi
                            cibeunying_kaler_konfirmasi_aktif = value.terkonfirmasi_aktif
                            cibeunying_kaler_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            cibeunying_kaler_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "CIBEUNYING KIDUL") {
                            cibeunying_kidul_konfirmasi = value.total_terkonfirmasi
                            cibeunying_kidul_konfirmasi_aktif = value.terkonfirmasi_aktif
                            cibeunying_kidul_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            cibeunying_kidul_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "CIBIRU") {
                            cibiru_konfirmasi = value.total_terkonfirmasi
                            cibiru_konfirmasi_aktif = value.terkonfirmasi_aktif
                            cibiru_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            cibiru_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "CICENDO") {
                            cicendo_konfirmasi = value.total_terkonfirmasi
                            cicendo_konfirmasi_aktif = value.terkonfirmasi_aktif
                            cicendo_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            cicendo_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "CIDADAP") {
                            cidadap_konfirmasi = value.total_terkonfirmasi
                            cidadap_konfirmasi_aktif = value.terkonfirmasi_aktif
                            cidadap_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            cidadap_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "CINAMBO") {
                            cinambo_konfirmasi = value.total_terkonfirmasi
                            cinambo_konfirmasi_aktif = value.terkonfirmasi_aktif
                            cinambo_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            cinambo_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "COBLONG") {
                            coblong_konfirmasi = value.total_terkonfirmasi
                            coblong_konfirmasi_aktif = value.terkonfirmasi_aktif
                            coblong_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            coblong_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "GEDEBAGE") {
                            gedebage_konfirmasi = value.total_terkonfirmasi
                            gedebage_konfirmasi_aktif = value.terkonfirmasi_aktif
                            gedebage_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            gedebage_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "KIARACONDONG") {
                            kiaracondong_konfirmasi = value.total_terkonfirmasi
                            kiaracondong_konfirmasi_aktif = value.terkonfirmasi_aktif
                            kiaracondong_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            kiaracondong_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "LENGKONG") {
                            lengkong_konfirmasi = value.total_terkonfirmasi
                            lengkong_konfirmasi_aktif = value.terkonfirmasi_aktif
                            lengkong_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            lengkong_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "MANDALAJATI") {
                            mandalajati_konfirmasi = value.total_terkonfirmasi
                            mandalajati_konfirmasi_aktif = value.terkonfirmasi_aktif
                            mandalajati_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            mandalajati_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "PANYILEUKAN") {
                            panyileukan_konfirmasi = value.total_terkonfirmasi
                            panyileukan_konfirmasi_aktif = value.terkonfirmasi_aktif
                            panyileukan_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            panyileukan_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "RANCASARI") {
                            rancasari_konfirmasi = value.total_terkonfirmasi
                            rancasari_konfirmasi_aktif = value.terkonfirmasi_aktif
                            rancasari_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            rancasari_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "REGOL") {
                            regol_konfirmasi = value.total_terkonfirmasi
                            regol_konfirmasi_aktif = value.terkonfirmasi_aktif
                            regol_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            regol_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "SUKAJADI") {
                            sukajadi_konfirmasi = value.total_terkonfirmasi
                            sukajadi_konfirmasi_aktif = value.terkonfirmasi_aktif
                            sukajadi_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            sukajadi_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "SUKASARI") {
                            sukasari_konfirmasi = value.total_terkonfirmasi
                            sukasari_konfirmasi_aktif = value.terkonfirmasi_aktif
                            sukasari_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            sukasari_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "SUMUR BANDUNG") {
                            sumur_bandung_konfirmasi = value.total_terkonfirmasi
                            sumur_bandung_konfirmasi_aktif = value.terkonfirmasi_aktif
                            sumur_bandung_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            sumur_bandung_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                        if (res.data[i].kecamatan == "UJUNG BERUNG") {
                            ujung_berung_konfirmasi = value.total_terkonfirmasi
                            ujung_berung_konfirmasi_aktif = value.terkonfirmasi_aktif
                            ujung_berung_konfirmasi_sembuh = value.terkonfirmasi_sembuh
                            ujung_berung_konfirmasi_meninggal = value.terkonfirmasi_meninggal
                        }
                    });
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
                    categories: kecamatan,
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
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
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
                    data: [andir_konfirmasi, antapani_konfirmasi, arcamanik_konfirmasi,
                        astana_konfirmasi, babakan_ciparay_konfirmasi,
                        bandung_kidul_konfirmasi,
                        bandung_kulon_konfirmasi,
                        bandung_wetan_konfirmasi,
                        batununggal_konfirmasi,
                        bojongloa_kaler_konfirmasi,
                        bojongloa_kidul_konfirmasi,
                        buah_batu_konfirmasi,
                        cibeunying_kaler_konfirmasi,
                        cibeunying_kidul_konfirmasi,
                        cibiru_konfirmasi,
                        cicendo_konfirmasi,
                        cidadap_konfirmasi,
                        cinambo_konfirmasi,
                        coblong_konfirmasi,
                        gedebage_konfirmasi,
                        kiaracondong_konfirmasi,
                        lengkong_konfirmasi,
                        mandalajati_konfirmasi,
                        panyileukan_konfirmasi,
                        rancasari_konfirmasi,
                        regol_konfirmasi,
                        sukajadi_konfirmasi,
                        sukasari_konfirmasi,
                        sumur_bandung_konfirmasi,
                        ujung_berung_konfirmasi,
                    ]

                }, {
                    name: 'Konfirmasi Aktif',
                    data: [andir_konfirmasi_aktif, antapani_konfirmasi_aktif, arcamanik_konfirmasi_aktif,
                        astana_konfirmasi_aktif, babakan_ciparay_konfirmasi_aktif,
                        bandung_kidul_konfirmasi_aktif,
                        bandung_kulon_konfirmasi_aktif,
                        bandung_wetan_konfirmasi_aktif,
                        batununggal_konfirmasi_aktif,
                        bojongloa_kaler_konfirmasi_aktif,
                        bojongloa_kidul_konfirmasi_aktif,
                        buah_batu_konfirmasi_aktif,
                        cibeunying_kaler_konfirmasi_aktif,
                        cibeunying_kidul_konfirmasi_aktif,
                        cibiru_konfirmasi_aktif,
                        cicendo_konfirmasi_aktif,
                        cidadap_konfirmasi_aktif,
                        cinambo_konfirmasi_aktif,
                        coblong_konfirmasi_aktif,
                        gedebage_konfirmasi_aktif,
                        kiaracondong_konfirmasi_aktif,
                        lengkong_konfirmasi_aktif,
                        mandalajati_konfirmasi_aktif,
                        panyileukan_konfirmasi_aktif,
                        rancasari_konfirmasi_aktif,
                        regol_konfirmasi_aktif,
                        sukajadi_konfirmasi_aktif,
                        sukasari_konfirmasi_aktif,
                        sumur_bandung_konfirmasi_aktif,
                        ujung_berung_konfirmasi_aktif,
                    ]

                }, {
                    name: 'Konfirmasi Sembuh',
                    data: [andir_konfirmasi_sembuh, antapani_konfirmasi_sembuh, arcamanik_konfirmasi_sembuh,
                        astana_konfirmasi_sembuh, babakan_ciparay_konfirmasi_sembuh,
                        bandung_kidul_konfirmasi_sembuh,
                        bandung_kulon_konfirmasi_sembuh,
                        bandung_wetan_konfirmasi_sembuh,
                        batununggal_konfirmasi_sembuh,
                        bojongloa_kaler_konfirmasi_sembuh,
                        bojongloa_kidul_konfirmasi_sembuh,
                        buah_batu_konfirmasi_sembuh,
                        cibeunying_kaler_konfirmasi_sembuh,
                        cibeunying_kidul_konfirmasi_sembuh,
                        cibiru_konfirmasi_sembuh,
                        cicendo_konfirmasi_sembuh,
                        cidadap_konfirmasi_sembuh,
                        cinambo_konfirmasi_sembuh,
                        coblong_konfirmasi_sembuh,
                        gedebage_konfirmasi_sembuh,
                        kiaracondong_konfirmasi_sembuh,
                        lengkong_konfirmasi_sembuh,
                        mandalajati_konfirmasi_sembuh,
                        panyileukan_konfirmasi_sembuh,
                        rancasari_konfirmasi_sembuh,
                        regol_konfirmasi_sembuh,
                        sukajadi_konfirmasi_sembuh,
                        sukasari_konfirmasi_sembuh,
                        sumur_bandung_konfirmasi_sembuh,
                        ujung_berung_konfirmasi_sembuh,
                    ]

                }, {
                    name: 'Konfirmasi Meninggal',
                    data: [andir_konfirmasi_meninggal, antapani_konfirmasi_meninggal, arcamanik_konfirmasi_meninggal,
                        astana_konfirmasi_meninggal, babakan_ciparay_konfirmasi_meninggal,
                        bandung_kidul_konfirmasi_meninggal,
                        bandung_kulon_konfirmasi_meninggal,
                        bandung_wetan_konfirmasi_meninggal,
                        batununggal_konfirmasi_meninggal,
                        bojongloa_kaler_konfirmasi_meninggal,
                        bojongloa_kidul_konfirmasi_meninggal,
                        buah_batu_konfirmasi_meninggal,
                        cibeunying_kaler_konfirmasi_meninggal,
                        cibeunying_kidul_konfirmasi_meninggal,
                        cibiru_konfirmasi_meninggal,
                        cicendo_konfirmasi_meninggal,
                        cidadap_konfirmasi_meninggal,
                        cinambo_konfirmasi_meninggal,
                        coblong_konfirmasi_meninggal,
                        gedebage_konfirmasi_meninggal,
                        kiaracondong_konfirmasi_meninggal,
                        lengkong_konfirmasi_meninggal,
                        mandalajati_konfirmasi_meninggal,
                        panyileukan_konfirmasi_meninggal,
                        rancasari_konfirmasi_meninggal,
                        regol_konfirmasi_meninggal,
                        sukajadi_konfirmasi_meninggal,
                        sukasari_konfirmasi_meninggal,
                        sumur_bandung_konfirmasi_meninggal,
                        ujung_berung_konfirmasi_meninggal,
                    ]

                }]
            });




        })
    </script>
@stop
