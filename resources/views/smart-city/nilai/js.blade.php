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
                        '<option selected disabled="true" value="0">=== Pilih === </option>'
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

                    if (data.length == 0) {
                        $("#kuisioners").html(
                            '<option selected disabled="true" value="0">=== Data belum ada === </option>'
                        );
                        $("#upd").html("");
                        $("#keterangan_tahun").val("");
                        $("#ketersediaan").val("");
                        $("#keterangan").val("");

                    } else if (data.length == 1) {
                        $("#kuisioners").html(
                            '<option selected disabled="true" value="0">=== Pilih === </option>'
                        );
                        $.each(data, function(index, value) {
                            $('#kuisioners').append(
                                $('<option>').val(value.id).text(value.kuisioner)
                            )
                        });
                        $("#upd").html("");
                        $("#keterangan_tahun").val("");
                        $("#ketersediaan").val("");
                        $("#keterangan").val("");

                    } else {
                        $("#kuisioners").html(
                            '<option selected disabled="true" value="0">=== Pilih === </option>'
                        );
                        $.each(data, function(index, value) {
                            $('#kuisioners').append(
                                $('<option>').val(value.id).text(value.kuisioner)
                            )
                        });

                    }
                },
                error: function() {}
            });

        };

        function getDataNilai() {
            var tahun = $('#datepicker').val();
            var id_kuisioner = $('#kuisioners').val();

            $.ajax({
                type: "GET",
                url: "../../api/v1/nilai/kuisioner/" + id_kuisioner + "/" + tahun,

                success: function(data) {
                    console.log(data);

                    var keterangan_tahun = document.getElementById('keterangan_tahun');
                    var ketersediaan = document.getElementById('ketersediaan');
                    var keterangan = document.getElementById('keterangan');
                    var upd = document.getElementById('upd');

                    if (data.length == 0) {
                        $("#keterangan_tahun").val("");
                        $("#ketersediaan").val("");
                        $("#keterangan").val("");

                        $.ajax({
                            type: "GET",
                            url: '../../skpd',

                            success: function(data) {
                                console.log(data);
                                $("#upd").html(
                                    '<option selected disabled="true" value="0">=== Pilih === </option>'
                                );
                                $.each(data, function(index, value) {
                                    $("#upd").append("<option value=' " + value.id +
                                        " '> " + value
                                        .nama + "</option>");
                                });
                            },
                            error: function() {}
                        });

                    } else {
                        $("#keterangan_tahun").val(data[0][0].keterangan_tahun);
                        $("#ketersediaan").val(data[0][0].ketersediaan);
                        $("#keterangan").val(data[0][0].keterangan);


                        $("#upd").html(
                            '<option selected disabled="true" value="0">=== Pilih === </option>'
                        );

                        $.each(data[1], function(index, object) {
                            $('#upd').append(
                                '<option ' + ((object.id == data[0][0].unit_penyedia_data) ?
                                    'selected' : '') + '>' + object.nama + '</option>'
                            );
                        });



                    }

                },
                error: function() {}
            });
        };
    </script>

@stop
