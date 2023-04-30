@section('js')
<script>
    let covid = null;

    function getTicket() {
        $.ajax({
            type: "GET",
            url: "../ticket",
            async: false,
            success: function (res) {
                console.log(res, 'res');
                $('#complaint').append(res.data.total_complaint);
                $('#active').append(res.data.active);
                $('#done').append(res.data.done);
                $('#normal').append(res.data.normal);
                $('#prank').append(res.data.prank);
                $('#ghost').append(res.data.ghost);
                $('#open').append(res.data.open);
                $('#handling').append(res.data.handling);
                $('#resolve').append(res.data.resolve);
                $('#kpi').append(res.data.kpi);
            }
        })
    }
    function setChart(params) {
        console.log(params, 'param');
        Highcharts.chart('pkl', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Browser market shares. January, 2018'
            },
            subtitle: {
                align: 'left',
                text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
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
                    text: 'Total percent market share'
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


    

    function getCategory() {
        $.ajax({
            type: "GET",
            url: "../category",
            async: false,
            success: function (res) {
                console.log(res.data.data);
                var trHTML = '';
                // var data = JSON.parse(res.data)
                $.each(res.data.data, function (i, item) {
                    trHTML += '<tr><td>' +
                        item.name +
                        '</td><td>' +
                        item.total + '</td></tr>';
                });
                $('#category').append(trHTML);
            }
        })
    }
    $(document).ready(function () {
        getTicket()
        getCategory()
    })

</script>
@stop
