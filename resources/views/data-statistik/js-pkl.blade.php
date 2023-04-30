@section('js')
<script>
    
    function setChart(idElement,params,title,type) {
        Highcharts.chart(idElement, {
            chart: {
                type: type
            },
            title: {
                align: 'left',
                text: title
            },
            subtitle: {
                align: 'left',
                text: 'Sumber: <a href="https://sipkl.kitapeduli.org/data-pkl" target="_blank">sipkl.kitapeduli.org</a>'
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
                        format: type == 'pie' ? '<b>{point.name}</b>: {point.y}' :'{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
            },

            series: [{
                dataSorting: {
                    enabled: true
                },
                name: "Total",
                colorByPoint: true,
                data: params
            }],

        });
    }
    function totalPemilikBisnis(){
        $.ajax({
            type: "GET",
            url: '../data-statistik/pkl/api/pemilik-bisnis',
            async: false,
            success: function (res) {
                $('#titlePemilikBisnis').append('Total Pemilik Bisnis')
                $('#totalPemilikBisnis').append(res[0].totalPemilikBisnis)
            }})
    }
    function totalProfileBisnis(){
        $.ajax({
            type: "GET",
            url: '../data-statistik/pkl/api/profile',
            async: false,
            success: function (res) {
                $('#titleBisnis').append('Total Profile Bisnis')
                $('#totalBisnis').append(res[0].totalBisnis)
        }})
    }
    function getPKL(URL,idElement,title,type) {
        let arr=[]
        $.ajax({
            type: "GET",
            url: URL,
            async: false,
            success: function (res) {
                console.log(res,'res');
                res.forEach(pkl => {
                    if(pkl.kecamatan)
                    arr.push({'name':pkl.kecamatan,'y':pkl.total,'drilldown':pkl.kecamatan})
                    if(pkl.education)
                    arr.push({'name':pkl.education,'y':pkl.total,'drilldown':pkl.education})
                    if(pkl.areaBinaan)
                    arr.push({'name':pkl.areaBinaan,'y':pkl.total,'drilldown':pkl.areaBinaan})
                    if(pkl.religion)
                    arr.push({'name':pkl.religion,'y':pkl.total,'drilldown':pkl.religion})
                    if(pkl.product)
                    arr.push({'name':pkl.product,'y':pkl.total,'drilldown':pkl.product})
                    if(pkl.waktuBisnis)
                    arr.push({'name':pkl.waktuBisnis,'y':pkl.total,'drilldown':pkl.waktuBisnis})
                    if(pkl.mediaBisnis)
                    arr.push({'name':pkl.mediaBisnis,'y':pkl.total,'drilldown':pkl.mediaBisnis})
                    if(pkl.kepemilikan)
                    arr.push({'name':pkl.kepemilikan,'y':pkl.total,'drilldown':pkl.kepemilikan})
                    if(pkl.maritalStatus)
                    arr.push({'name':pkl.maritalStatus,'y':pkl.total,'drilldown':pkl.maritalStatus})
                    if(pkl.label)
                    arr.push({'name':pkl.label,'y':pkl.total,'drilldown':pkl.label})
                    if(pkl.omzet)
                    arr.push({'name':pkl.omzet,'y':pkl.total,'drilldown':pkl.omzet})
                    if(pkl.title)
                    arr.push({'name':pkl.title,'y':pkl.total,'drilldown':pkl.title})
                });
            }
        })
        setChart(idElement,arr,title,type)
    }

    $(document).ready(function () {
        totalPemilikBisnis()
        totalProfileBisnis()
        getPKL('../data-statistik/pkl/api/wilayah','pkl','Pedagang Perkecamatan Kota Bandung','column')
        getPKL('../data-statistik/pkl/api/status-pendidikan','pklPendidikan','Pemilik Bisnis Berdasarkan Status Pendidikan','column')
        getPKL('../data-statistik/pkl/api/area','pklBinaan','Bisnis Per Area Binaan','column')
        getPKL('../data-statistik/pkl/api/status-agama','pklAgama','Pedagang Berdasarkan Agama','column')
        getPKL('../data-statistik/pkl/api/produk','pklKategoriProduk','Kategori Produk','pie')
        getPKL('../data-statistik/pkl/api/waktu','pklWaktu','Waktu Berusaha','pie')
        getPKL('../data-statistik/pkl/api/media','pklMedia','Media Berusaha','pie')
        getPKL('../data-statistik/pkl/api/status-pemilik','pklStatusPemilik','Status Kepemilikan','pie')
        getPKL('../data-statistik/pkl/api/status-pernikahan','pklStatusPernikahan','Pedagang Berdasarkan Status Pernikahan','pie')
        getPKL('../data-statistik/pkl/api/status-nik','pklStatusNik','NIK KTP','pie')
        getPKL('../data-statistik/pkl/api/omset','pklOmset','Pedagang Berdasarkan Omzet','pie')
        getPKL('../data-statistik/pkl/api/bisnis','pklBisnis','Jumlah Bisnis Pkl','pie')
        getPKL('../data-statistik/pkl/api/cetak-kartu','pklCetakKartu','Jumlah Pkl Cetak Kartu','pie')
    })

</script>
@stop
