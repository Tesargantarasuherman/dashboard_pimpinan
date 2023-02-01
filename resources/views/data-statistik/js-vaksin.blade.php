@section('js')
    <script>
        function getVaksin() {
            $.ajax({
                type: "GET",
                url: `../api/v1/vaksin/terkini`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    // console.log(res)
                    // dosis vaksin 1
                    $('#updateData').append(res.date)
                    const result_nakes0 = Math.round((res.data[0].vaksin_nakes / res.sasaran_nakes) * 100)
                    const result_vaksin_petugas_publik0 = Math.round((res.data[0].vaksin_petugas_publik / res.sasaran_petugas_publik) * 100)
                    const result_vaksin_lansia0 = Math.round((res.data[0].vaksin_lansia / res.sasaran_lansia) * 100)
                    const result_vaksin_masyarakat0 = Math.round((res.data[0].vaksin_masyarakat / res.sasaran_masyarakat) * 100)
                    const result_vaksin_remaja0 = Math.round((res.data[0].vaksin_remaja / res.sasaran_remaja) * 100)
                    const result_vaksin_anak0 = Math.round((res.data[0].vaksin_anak / res.sasaran_anak) * 100)
                    const result_vaksin_gotong_royong0 = Math.ceil((res.data[0].vaksin_gotong_royong / res.sasaran_gotong_royong) * 100)

                    $('#vaksin_nakes0').append(result_nakes0 + '%')
                    $('#vaksin_petugas_publik0').append(result_vaksin_petugas_publik0 + '%')
                    $('#vaksin_lansia0').append(result_vaksin_lansia0 + '%')
                    $('#vaksin_masyarakat0').append(result_vaksin_masyarakat0 + '%')
                    $('#vaksin_remaja0').append(result_vaksin_remaja0 + '%')
                    $('#vaksin_anak0').append(result_vaksin_anak0 + '%')
                    $('#vaksin_gotong_royong0').append(result_vaksin_gotong_royong0 + '%')

                    // dosis vaksin 2
                    const result_nakes1 = Math.round((res.data[1].vaksin_nakes / res.sasaran_nakes) * 100)
                    const result_vaksin_petugas_publik1 = Math.round((res.data[1].vaksin_petugas_publik / res.sasaran_petugas_publik) * 100)
                    const result_vaksin_lansia1 = Math.round((res.data[1].vaksin_lansia / res.sasaran_lansia) * 100)
                    const result_vaksin_masyarakat1 = Math.round((res.data[1].vaksin_masyarakat / res.sasaran_masyarakat) * 100)
                    const result_vaksin_remaja1 = Math.round((res.data[1].vaksin_remaja / res.sasaran_remaja) * 100)
                    const result_vaksin_anak1 = Math.round((res.data[1].vaksin_anak / res.sasaran_anak) * 100)
                    const result_vaksin_gotong_royong1 = Math.ceil((res.data[1].vaksin_gotong_royong / res.sasaran_gotong_royong) * 100)

                    $('#vaksin_nakes1').append(result_nakes1 + '%')
                    $('#vaksin_petugas_publik1').append(result_vaksin_petugas_publik1 + '%')
                    $('#vaksin_lansia1').append(result_vaksin_lansia1 + '%')
                    $('#vaksin_masyarakat1').append(result_vaksin_masyarakat1 + '%')
                    $('#vaksin_remaja1').append(result_vaksin_remaja1 + '%')
                    $('#vaksin_anak1').append(result_vaksin_anak1 + '%')
                    $('#vaksin_gotong_royong1').append(result_vaksin_gotong_royong1 + '%')

                    // dosis vaksin 3
                    const result_nakes2 = Math.round((res.data[2].vaksin_nakes / res.sasaran_nakes) * 100)
                    const result_vaksin_petugas_publik2 = Math.round((res.data[2].vaksin_petugas_publik / res.sasaran_petugas_publik) * 100)
                    const result_vaksin_lansia2 = Math.round((res.data[2].vaksin_lansia / res.sasaran_lansia) * 100)
                    const result_vaksin_masyarakat2 = Math.round((res.data[2].vaksin_masyarakat / res.sasaran_masyarakat) * 100)
                    const result_vaksin_remaja2 = Math.round((res.data[2].vaksin_remaja / res.sasaran_remaja) * 100)
                    const result_vaksin_anak2 = Math.round((res.data[2].vaksin_anak / res.sasaran_anak) * 100)
                    const result_vaksin_gotong_royong2 = Math.ceil((res.data[2].vaksin_gotong_royong / res.sasaran_gotong_royong) * 100)

                    $('#vaksin_nakes2').append(result_nakes2 + '%')
                    $('#vaksin_petugas_publik2').append(result_vaksin_petugas_publik2 + '%')
                    $('#vaksin_lansia2').append(result_vaksin_lansia2 + '%')
                    $('#vaksin_masyarakat2').append(result_vaksin_masyarakat2 + '%')
                    $('#vaksin_remaja2').append(result_vaksin_remaja2 + '%')
                    $('#vaksin_anak2').append(result_vaksin_anak2 + '%')
                    $('#vaksin_gotong_royong2').append(result_vaksin_gotong_royong2 + '%')

                    //Total Sasaran Vaksin
                    // const total_vaksin1 = (res.total_vaksinasi1).toLocaleString();
                    // const total_vaksin2 = (res.total_vaksinasi2).toLocaleString();
                    // const total_vaksin3 = (res.total_vaksinasi3).toLocaleString();

                    // const result_total = ((res.total_vaksinasi1) + (res.total_vaksinasi2) + (res
                    //     .total_vaksinasi3)).toLocaleString()

                    const total_vaksin1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.total_vaksinasi1);

                    const total_vaksin2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.total_vaksinasi2);

                    const total_vaksin3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.total_vaksinasi3);


                    const result_total =
                        Intl.NumberFormat("id-ID", {
                            currency: "IDR"
                        }).format((res.total_vaksinasi1) + (res.total_vaksinasi2) + (res
                            .total_vaksinasi3));

                    $('#total_sasaran').append(result_total)

                    $('#total_vaksin1').append(total_vaksin1)
                    $('#total_vaksin2').append(total_vaksin2)
                    $('#total_vaksin3').append(total_vaksin3)

                    //Total Sasaran Vaksin Nakes
                    const sasaran_nakes = (res.sasaran_nakes);
                    const datas = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(sasaran_nakes);

                    $('#sasaran_nakes').append(datas)

                    const total_nakes1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_nakes);

                    $('#total_nakes1').append(total_nakes1)

                    const total_nakes2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_nakes);

                    $('#total_nakes2').append(total_nakes2)

                    const total_nakes3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_nakes);

                    $('#total_nakes3').append(total_nakes3)

                    //Total Sasaran Vaksin Petugas Public
                    const petugas_public = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.sasaran_petugas_publik);

                    $('#total_petugas_public').append(petugas_public)

                    const total_petugas_public1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_petugas_publik);

                    $('#total_petugas_public1').append(total_petugas_public1)

                    const total_petugas_public2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_petugas_publik);

                    $('#total_petugas_public2').append(total_petugas_public2)

                    const total_petugas_public3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_petugas_publik);

                    $('#total_petugas_public3').append(total_petugas_public3)

                    //Total Sasaran Vaksin Lanjut Usia
                    const vaksin_lansia = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.sasaran_lansia);

                    $('#total_vaksin_lansia').append(vaksin_lansia)

                    const total_vaksin_lansia1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_lansia);

                    $('#total_vaksin_lansia1').append(total_vaksin_lansia1)

                    const total_vaksin_lansia2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_lansia);

                    $('#total_vaksin_lansia2').append(total_vaksin_lansia2)

                    const total_vaksin_lansia3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_lansia);

                    $('#total_vaksin_lansia3').append(total_vaksin_lansia3)

                    //Total Sasaran Masyarakat Umum
                    const vaksin_masyarakat = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.sasaran_masyarakat);

                    $('#total_vaksin_masyarakat').append(vaksin_masyarakat)

                    const total_vaksin_masyarakat1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_masyarakat);

                    $('#total_vaksin_masyarakat1').append(total_vaksin_masyarakat1)

                    const total_vaksin_masyarakat2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_masyarakat);

                    $('#total_vaksin_masyarakat2').append(total_vaksin_masyarakat2)

                    const total_vaksin_masyarakat3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_masyarakat);

                    $('#total_vaksin_masyarakat3').append(total_vaksin_masyarakat3)

                    //Total Sasaran remaja
                    const vaksin_remaja = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.sasaran_remaja);

                    $('#total_vaksin_remaja').append(vaksin_remaja)

                    const total_vaksin_remaja1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_remaja);

                    $('#total_vaksin_remaja1').append(total_vaksin_remaja1)

                    const total_vaksin_remaja2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_remaja);

                    $('#total_vaksin_remaja2').append(total_vaksin_remaja2)

                    const total_vaksin_remaja3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_remaja);

                    $('#total_vaksin_remaja3').append(total_vaksin_remaja3)

                    //Total Sasaran Anak
                    const vaksin_anak = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.sasaran_anak);

                    $('#total_vaksin_anak').append(vaksin_anak)

                    const total_vaksin_anak1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_anak);

                    $('#total_vaksin_anak1').append(total_vaksin_anak1)

                    const total_vaksin_anak2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_anak);

                    $('#total_vaksin_anak2').append(total_vaksin_anak2)

                    const total_vaksin_anak3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_anak);

                    $('#total_vaksin_anak3').append(total_vaksin_anak3)

                    //Total Sasaran Gotong Rroyong
                    const vaksin_gotong_royong = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.sasaran_gotong_royong);

                    $('#total_vaksin_gotong_royong').append(vaksin_gotong_royong)

                    const total_vaksin_gotong_royong1 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[0].vaksin_gotong_royong);

                    $('#total_vaksin_gotong_royong1').append(total_vaksin_gotong_royong1)

                    const total_vaksin_gotong_royong2 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[1].vaksin_gotong_royong);

                    $('#total_vaksin_gotong_royong2').append(total_vaksin_gotong_royong2)

                    const total_vaksin_gotong_royong3 = Intl.NumberFormat("id-ID", {
                        currency: "IDR"
                    }).format(res.data[2].vaksin_gotong_royong);

                    $('#total_vaksin_gotong_royong3').append(total_vaksin_gotong_royong3)

                    setVaksin(result_nakes1)

                }
            });
        }
        function setVaksin(vaksin_nakes1){
            Highcharts.chart('chart_vaksin2', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Data Rekapitulasi'
            },
            subtitle: {
                align: 'left',
                text: 'Source: '
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
                    text: 'Total Data'
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
                        format: ''
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
            },

            series: [{
                name: "Data",
                colorByPoint: true,
                data: [{
                        name: "Aplikasi",
                        y: vaksin_nakes1,
                        drilldown: "Aplikasi"
                    }
                ]
            }],
        });
        }
        $(document).ready(function() {
            getVaksin()
        })
    </script>
@stop
