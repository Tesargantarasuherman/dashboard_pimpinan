@section('js')
    <script>

        $(document).ready(function() {
            let total_layanan_publik = 0;
            let total_administrasi_pemerintahan = 0;
            let value = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            let  total_jenis_layanan = {
                        layanan_publik: 0,
                        administrasi_pemerintahan: 0
                    }
                publik = [];
                administrasi = [];

            $.ajax({
                type: "GET",
                url: "https://aplikasi.bandung.go.id/wp-json/api/v1/aplikasi?page=1&per_page=300",
                dataType: 'json',
                headers: {
                    "Authorization": "261b3b04f89120d8515b57cd1011610b8fd2272a",
                },
                async: false,
                success: function(res) {
                    // console.log(res)
                    let category = [];
                    let jenis_layanan = [];

                    total_jenis_layanan = {
                        layanan_publik: 0,
                        administrasi_pemerintahan: 0
                    }
                    publik = [];
                    administrasi = [];

                    $.each(res.data, function(index, value) {
                        category.push(res.data[index].meta.detail_aplikasi_bidangsektor)
                    });

                    $.each(res.data, function(i, object) {
                        if (res.data[i].meta.detail_aplikasi_jenis_layanan ==
                            "Layanan Publik") {
                                publik.push(
                                    res.data[i].title,)
                        } else {
                            administrasi.push(
                                    res.data[i].title,)
                        }
                    })

                    $.each(res.data, function(i, object) {
                        if (res.data[i].meta.detail_aplikasi_jenis_layanan ==
                            "Layanan Publik") {
                            total_jenis_layanan.layanan_publik += 1;
                        } else {
                            total_jenis_layanan.administrasi_pemerintahan += 1;
                        }
                        jenis_layanan.push(res.data[i].meta.detail_aplikasi_jenis_layanan)
                    })

                    total_layanan_publik =( total_jenis_layanan.layanan_publik / res.data.length * 100 );
                    total_administrasi_pemerintahan =( total_jenis_layanan.administrasi_pemerintahan / res.data.length * 100 );

                    $('#total_layanan_publik').append(total_layanan_publik + '%')
                    $('#total_administrasi_pemerintahan').append(total_administrasi_pemerintahan + '%')
                    $('#total_aplikasi').append(res.total)
                    $('#total_aplikasi_layanan_publik').append(total_jenis_layanan.layanan_publik)
                    $('#total_aplikasi_administrasi_pemerintahan').append(total_jenis_layanan.administrasi_pemerintahan)

                    value = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    for (let i = 0; i < category.length; i++) {
                        if (category[i] == "Kepegawaian") {
                            value[0]++;
                        }
                        if (category[i] == "Keuangan") {
                            value[1]++;
                        }
                        if (category[i] == "Pariwisata") {
                            value[2]++;
                        }
                        if (category[i] == "Pekerjaan & Usaha") {
                            value[3]++;
                        }
                        if (category[i] == "Kependudukan") {
                            value[4]++;
                        }
                        if (category[i] == "Kesehatan") {
                            value[5]++;
                        }
                        if (category[i] == "Lingkungan Hidup") {
                            value[6]++;
                        }
                        if (category[i] == "Komunikasi & Informasi") {
                            value[7]++;
                        }
                        if (category[i] == "Kepemudaan") {
                            value[8]++;
                        }
                        if (category[i] == "Keolahragaan") {
                            value[9]++;
                        }
                        if (category[i] == "Perencanaan") {
                            value[10]++;
                        }
                        if (category[i] == "Perdagangan") {
                            value[11]++;
                        }
                        if (category[i] == "Website") {
                            value[12]++;
                        }
                        if (category[i] == "Perhubungan") {
                            value[13]++;
                        }
                        if (category[i] == "Jaminan Sosial") {
                            value[14]++;
                        }
                        if (category[i] == "Ketenagakerjaan") {
                            value[15]++;
                        }
                        if (category[i] == "Pelayanan Kewilayahan") {
                            value[16]++;
                        }
                        if (category[i] == "Kearsipan") {
                            value[17]++;
                        }
                        if (category[i] == "Pengawasan") {
                            value[18]++;
                        }
                        if (category[i] == "Pengadaan B/J") {
                            value[19]++;
                        }
                        if (category[i] == "Akuntabilitas Kinerja") {
                            value[20]++;
                        }
                        if (category[i] == "Instruktur Publik") {
                            value[21]++;
                        }
                        if (category[i] == "Layanan PDAM") {
                            value[22]++;
                        }
                        if (category[i] == "Pendidikan") {
                            value[22]++;
                        }
                        if (category[i] == "Tata Ruang") {
                            value[23]++;
                        }
                        if (category[i] == "Pemberdayaan Masyarakat") {
                            value[24]++;
                        }
                    }

                }

            });

            let aplikasi = [{
                name: "Data",
                colorByPoint: true,
                data: [{
                        "y": total_layanan_publik,
                        "name": "Layanan Publik"
                    },
                    {
                        "name": 'Administrasi Pemerintahan',
                        "y": total_administrasi_pemerintahan
                    },
                ]
            }, ]
            Highcharts.chart('container', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Grafik Berdasarkan Layanan'
                },
                subtitle:{
                    align:'left',
                    text: 'Sumber:https://aplikasi.bandung.go.id/ '
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
                    headerFormat: '<span style="font-size:11px">{aplikasi.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series: aplikasi,
            })


            //Bar
            let app = [ 
                {
                    nama: "Data",
                    colorByPoint: true,
                    data: [
                        {
                            name: "Kepegawaian",
                            y: value[0],
                        },
                        {
                            name: "Keuangan",
                            y: value[1],
                        },
                        {
                            name: "Pariwisata",
                            y: value[2],
                        },
                        {
                            name: "Pekerjaan & Usaha",
                            y: value[3],
                        },
                        {
                            name: "Kependudukan",
                            y: value[4],
                        },
                        {
                            name: "Kesehatan",
                            y: value[5],
                        },
                        {
                            name: "Lingkungan Hidup",
                            y: value[6],
                            
                        },
                        {
                            name: "Komunikasi & Informasi",
                            y: value[7],
                            
                        },
                        {
                            name: "Kepemudaan",
                            y: value[8],
                            
                        },
                        {
                            name: "Keolahragaan",
                            y: value[9],
                            
                        },
                        {
                            name: "Perencanaan",
                            y: value[10],
                            
                        },
                        {
                            name: "Perdagangan",
                            y: value[11],
                            
                        },
                        {
                            name: "Website",
                            y: value[12],
                            
                        },
                        {
                            name: "Perhubungan",
                            y: value[13],
                            
                        },
                        {
                            name: "Jaminan Sosial",
                            y: value[14],
                            
                        },
                        {
                            name: "Ketenagakerjaan",
                            y: value[15],
                            
                        },
                        {
                            name: "Pelayanan Kewilayahan",
                            y: value[16],
                            
                        },
                        {
                            name: "Kearsipan",
                            y: value[17],
                            
                        },
                        {
                            name: "Pengawasan",
                            y: value[18],
                            
                        },
                        {
                            name: "Pengadaan B/J",
                            y: value[19],
                            
                        },
                        {
                            name: "Akuntabilitas Kinerja",
                            y: value[20],
                            
                        },
                        {
                            name: "Instruktur Publik",
                            y: value[21],
                            
                        },
                        {
                            name: "Layanan PDAM",
                            y: value[22],
                            
                        },
                        {
                            name: "Pendidikan",
                            y: value[23],
                            
                        },
                        {
                            name: "Tata Ruang",
                            y: value[24],
                            
                        },
                        {
                            name: "Pemberdayaan Masyarakat",
                            y: value[25],
                            
                        },
                    ]
                }, ]
            
            Highcharts.chart('bar', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'left',
                    text: 'Grafik Berdasarkan Bidang/Sektor'
                },
                subtitle: {
                    align: 'left',
                    text: 'Sumber:https://aplikasi.bandung.go.id/ '
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: ''
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.nama}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: jumlah <b>{point.y}</b> <br/>'
                },

                series: app
            });


        });


    </script>
@stop
