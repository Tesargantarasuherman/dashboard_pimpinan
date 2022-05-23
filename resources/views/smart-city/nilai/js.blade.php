@section('js')

    <script>
        $(document).ready(function() {
            $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
            });
        });


        function getDataSkpd() {
            // var id_skpd = $(this).val();
            var id_skpd = $('#skpd').val();

            $.ajax({
                type: "GET",
                url: '../api/v1/kuisioner-smart-city/' + id_skpd,

                success: function(data) {
                    console.log(data);
                    $("#id_kuisioner").html(
                        '<option selected disabled="true" value="0">=== Silahkan Pilih === </option>'
                    );
                    $.each(data, function(index, value) {
                        $("#id_kuisioner").append("<option value=' " + value.id + " '> " + value
                            .kuisioner + "</option>");
                    });
                },
                error: function() {}
            });

        };

        function getSkpd() {
            // var id_skpd = $(this).val();
            var id_skpd = $('#skpd').val();

            $.ajax({
                type: "GET",
                url: '../../api/v1/kuisioner-smart-city/' + id_skpd,

                success: function(data) {
                    console.log(data);
                    $("#kuisioners").html(
                        '<option selected disabled="true" value="0">=== Silahkan Pilih === </option>'
                    );
                    $.each(data, function(index, value) {
                        $("#kuisioners").append("<option value=' " + value.id + " '> " + value
                            .kuisioner + "</option>");
                    });
                },
                error: function() {}
            });

        };

        function dataNilai() {
            var tahun = $('#datepicker').val();

            $.ajax({
                type: "GET",
                url: '../../api/v1/nilai-kuisioner/' + tahun,


                success: function(data) {
                    console.log(data);

                    var keterangan_tahun = document.getElementById('keterangan_tahun');

                    if (data.length == 0 ) {
                        $("#keterangan_tahun").val("");

                    } else {
                        $("#keterangan_tahun").val(data[0].keterangan_tahun);
                    }


                },
                error: function() {}
            });
        };
    </script>

@stop
