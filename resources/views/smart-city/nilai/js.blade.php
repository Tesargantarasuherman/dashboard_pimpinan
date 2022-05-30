@section('js')

<script>
    $(document).ready(function () {
        $("#skpd").selectize(options);
        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
        });
    });

    function getKuisioner() {
        let data = [];
        let tahun = $("#datepicker").val();
        let skpd = $("#skpd").val();

        $.ajax({
            type: "GET",
            url: '../kuisioner/' + skpd,
            success: function (res) {
                res.forEach(res => {
                    form = `
                                    <div class="form-group row">
                                        <label class="col-sm-3 mt-2 col-form-label font-weight-bold">${res.kuisioner}</label>
                                        <div class="form-group col-sm-2">
                                        <label >Ketersediaan Data</label>
                                            <select class="form-control" onchange="tersedia(${res.id})" id="${res.id}">
                                            <option value="">Pilih</option>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak tersedia">Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <div id="${res.id}-ketersediaan">
                                        </div>
                                        </div>
                                    `;
                    data.push(form)
                });
                $('#form-kuisioner').html(data);
            },
            error: function () {}
        });
    }

    function tersedia(id) {
        console.log(id)
        let html = `<div class="form-group col-sm-2">
                                            <label >Nilai</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nilai">
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Unit Penyedia Data</label>
                                            <select class="form-control" >
                                            <option value="">Pilih</option>
                                            @foreach($skpd as $p)
                                                <option value={{ $p->id }}>{{ $p->nama }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-3">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        </div>`
        $(`#${id}-ketersediaan`).html(html);
    }

    function getDataSkpd() {
        // var id_skpd = $(this).val();
        var id_skpd = $('#skpd').val();

        $.ajax({
            type: "GET",
            url: '../api/v1/kuisioner-smart-city/' + id_skpd,

            success: function (data) {
                console.log(data);
                $("#id_kuisioner").html(
                    '<option selected disabled="true" value="0">=== Pilih === </option>'
                );
                $.each(data, function (index, value) {
                    $("#id_kuisioner").append("<option value=' " + value.id + " '> " + value
                        .kuisioner + "</option>");
                });
            },
            error: function () {}
        });

    };

    function getSkpd() {
        // var id_skpd = $(this).val();
        var id_skpd = $('#skpd').val();


        $.ajax({
            type: "GET",
            url: '../../api/v1/kuisioner-smart-city/' + id_skpd,

            success: function (data) {
                console.log(data);

                if (data.length == 0) {
                    $("#kuisioners").html(
                        '<option selected disabled="true" value="0">=== Data belum ada === </option>'
                    );
                    $("#upd").html("");
                    $("#keterangan_tahun").val("");
                    $("#ketersediaan").val("");
                    $("#keterangan").val("");

                } else {
                    $("#kuisioners").html(
                        '<option selected disabled="true" value="0">=== Pilih === </option>'
                    );
                    $.each(data, function (index, value) {
                        $('#kuisioners').append(
                            $('<option>').val(value.id).text(value.kuisioner)
                        )
                    });
                }
            },
            error: function () {}
        });

    };

    function getDataNilai() {
        var tahun = $('#datepicker').val();
        var id_kuisioner = $('#kuisioners').val();

        $.ajax({
            type: "GET",
            url: "../../api/v1/nilai/kuisioner/" + id_kuisioner + "/" + tahun,

            success: function (data) {
                console.log(data);

                var keterangan_tahun = document.getElementById('keterangan_tahun');
                var ketersediaan = document.getElementById('ketersediaan');
                var keterangan = document.getElementById('keterangan');
                var upd = document.getElementById('upd');

                if (data.length == 0) {
                    $("#keterangan_tahun").val("");
                    $("#ketersediaan").val("");
                    $("#keterangan").val("");
                } else {
                    $("#keterangan_tahun").val(data[0][0].keterangan_tahun);
                    $("#ketersediaan").val(data[0][0].ketersediaan);
                    $("#keterangan").val(data[0][0].keterangan);


                    $("#upd").html(
                        '<option selected disabled="true" value="0">=== Pilih === </option>'
                    );

                    $.each(data[1], function (index, object) {
                        $('#upd').append(
                            '<option ' + ((object.id == data[0][0].unit_penyedia_data) ?
                                'selected' : '') + '>' + object.nama + '</option>'
                        );
                    });



                }

            },
            error: function () {}
        });
    };

</script>

@stop
