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
            url: `../get-kuisioner/${skpd}/${tahun}`,
            success: function (res) {
                if (res.length > 0) {
                    res.forEach(res => {
                        form = `
                                    <div class="form-group row">
                                        <input type="hidden" class="form-control" name="id_kuisioner[]" value="${res.id}">
                                        <label class="col-sm-3 mt-2 col-form-label font-weight-bold">${res.kuisioner}</label>
                                        <div class="form-group col-sm-2">
                                        <label >Ketersediaan Data</label>
                                            <select class="form-control" onchange="tersedia(${res.id})" name="ketersediaan[]" id="ketersediaan-${res.id}">
                                            <option value="tersedia" ${res.ketersediaan == 'tersedia' ? 'selected' :''}>Tersedia</option>
                                            <option value="tidak tersedia" ${res.ketersediaan == 'tidak tersedia' ? 'selected' :''}>Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label >Nilai</label>
                                            <input type="text" class="form-control"  placeholder="Masukkan Nilai" value=${res.keterangan_tahun} name="nilai[]" id="nilai-${res.id}">
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Unit Penyedia Data</label>
                                            <select class="form-control" name="penyedia[]" id="penyedia-${res.id}">
                                            <option value="">Pilih</option>
                                            @foreach($skpd as $p)
                                                <option value={{ $p->id }}   ${res.unit_penyedia_data  == {{ $p->id }} ? 'selected' : ''} >{{ $p->nama }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-3">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="2" name="keterangan[]" id="keterangan-${res.id}">${res.keterangan}</textarea>
                                        </div>
                                        </div>
                                    </div>
                                    `;
                        data.push(form)
                    });
                    $('#form-kuisioner').html(data);
                }
                else{
                    $('#form-kuisioner').html('');
                }
            },
            error: function () {}
        });
    }

    function tersedia(id) {
        let status = $(`#ketersediaan-${id}`).val();
        console.log(status);
        if (status == 'tersedia') {
            $(`input[id=nilai-${id}`).prop('disabled', false);
            $(`select[id=penyedia-${id}]`).prop('disabled', false);
            $(`textarea[id=keterangan-${id}]`).prop('disabled', false);
        } else {
            $(`input[id=nilai-${id}`).prop('disabled', true);
            $(`input[id=nilai-${id}`).val('');
            $(`select[id=penyedia-${id}]`).prop('disabled', true);
            $(`select[id=penyedia-${id}]`).val('');
            $(`textarea[id=keterangan-${id}]`).prop('disabled', true);
            $(`textarea[id=keterangan-${id}]`).val('');
        }

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
