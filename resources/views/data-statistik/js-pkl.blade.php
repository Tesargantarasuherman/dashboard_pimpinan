@section('js')
<script>
    
    function setChart(idElement,params,title) {
        Highcharts.chart(idElement, {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: title
            },
            subtitle: {
                align: 'left',
                text: 'Source: <a href="https://sipkl.kitapeduli.org/data-pkl target="_blank">sipkl.kitapeduli.org</a>'
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
                    text: 'Jumlah PKL'
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
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
            },

            series: [{
                name: "Total",
                colorByPoint: true,
                data: params
            }],

        });
    }

    function getPKL(URL,idElement,title) {
        let arr=[]
        $.ajax({
            type: "GET",
            url: URL,
            async: false,
            success: function (res) {
                res.forEach(pkl => {
                    if(pkl.kecamatan)
                    arr.push({'name':pkl.kecamatan,'y':pkl.total,'drilldown':pkl.kecamatan})
                    else if(pkl.education)
                    arr.push({'name':pkl.education,'y':pkl.total,'drilldown':pkl.education})
                    else if(pkl.areaBinaan)
                    arr.push({'name':pkl.areaBinaan,'y':pkl.total,'drilldown':pkl.areaBinaan})
                    else if(pkl.religion)
                    arr.push({'name':pkl.religion,'y':pkl.total,'drilldown':pkl.religion})
                });
            }
        })
        setChart(idElement,arr,title)
    }
    $(document).ready(function () {
        getPKL('https://sipkl.kitapeduli.org/data-pkl/district?keys=&target=','pkl','Pedagang Perkecamatan Kota Bandung')
        getPKL('https://sipkl.kitapeduli.org/data-pkl/businessOfEducation?keys=&target=','pklPendidikan','Pemilik Bisnis Berdasarkan Status Pendidikan')
        getPKL('https://sipkl.kitapeduli.org/data-pkl/businessOfBuildArea?keys=&target=','pklBinaan','Bisnis Per Area Binaan')
        getPKL('https://sipkl.kitapeduli.org/data-pkl/businessOfReligion?keys=&target=','pklAgama','Pedagang Berdasarkan Agama')
    })

</script>
@stop
