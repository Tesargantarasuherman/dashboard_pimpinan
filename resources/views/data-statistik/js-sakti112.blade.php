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
