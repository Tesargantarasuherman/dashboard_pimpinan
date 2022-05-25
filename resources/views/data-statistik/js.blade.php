@section('js')
    <script>
        function getVaksin() {
            $.ajax({
                type: "GET",
                url: `../api/v1/vaksin/terkini`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    console.log(res)
                    $('#updateData').append(res.date)
                    $('#vaksin_nakes').append(res.data[0].vaksin_nakes)
                    $('#vaksin_petugas_publik').append(res.data[0].vaksin_petugas_publik)

                }
            });
        }
        $(document).ready(function() {
            getVaksin()
        })
    </script>
@stop
