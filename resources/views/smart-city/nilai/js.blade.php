@section('js')

<script>
    $(document).ready(function () {
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
                    $('#form-submit').attr('action', '../nilai/update');
                    $('#submit-data').text('Update');
                    $('#submit-data').css('visibility', 'visible');
                    res.forEach(res => {
                        let deskripsi = res.deskripsi
                        form = `
                                    <div class="form-group row">
                                        <input type="hidden" class="form-control" name="id[]" value="${res.id}">
                                        <input type="hidden" class="form-control" name="id_kuisioner[]" value="${res.id_kuisioner}">
                                        <label class="col-sm-3 mt-2 col-form-label font-weight-bold">${res.kuisioner}</label>
                                        <div class="form-group col-sm-2">
                                        <label >Ketersediaan Data</label>
                                            <select class="form-control" onchange="ketersediaanData('${res.id}','${res.nilai_tahun}','${res.deskripsi}','${res.unit_penyedia_data}')" name="ketersediaan[]" id="ketersediaan-${res.id}">
                                            <option value="tersedia" ${res.ketersediaan == 'tersedia' ? 'selected' :''}>Tersedia</option>
                                            <option value="tidak tersedia" ${res.ketersediaan == 'tidak tersedia' ? 'selected' :''}>Tidak Tersedia</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label >Nilai</label>
                                            <input type="text" class="form-control"  placeholder="Masukkan Nilai" value=${res.nilai_tahun == '' ? '""' : res.nilai_tahun} name="nilai[]" id="nilai-${res.id}" ${res.nilai_tahun == '' ?'readonly' :''}>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label>Unit Penyedia Data</label>
                                            <select class="form-control" name="penyedia[]" id="penyedia-${res.id}"  ${res.unit_penyedia_data  == '' ?'readonly' :''}>
                                            <option value='' ${res.unit_penyedia_data == '' ?'selected':''}>Pilih</option>
@foreach($skpd as $p)
                                                <option value={{ $p->id }}   ${res.unit_penyedia_data  == {{ $p->id }} ? 'selected' : ''} ${res.unit_penyedia_data  == '' ?'readonly' :''}>{{ $p->nama }}</option>
@endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-3">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="2" name="keterangan[]" id="keterangan-${res.id}" ${res.deskripsi =='' ?'readonly' : ''}>${res.deskripsi =='' ?'' : res.deskripsi}</textarea>
                                        </div>
                                        </div>
                                    </div>
                                    `;
                        data.push(form)
                    });
                    $('#alert').html(`<div class="alert alert-primary" role="alert">
                                        Sudah Diisi
                                    </div>`);
                    $('#form-kuisioner').html(data);
                } else {
                    $.ajax({
                        type: "GET",
                        url: `../kuisioner/${skpd}`,
                        success: function (res) {
                            if (res.length > 0) {
                                $('#form-submit').attr('action', '../nilai');
                                $('#submit-data').text('Submit');
                                $('#submit-data').css('visibility', 'visible');
                                res.forEach(res => {
                                    form = `
                                            <div class="form-group row">
                                                <input type="hidden" class="form-control" name="id_kuisioner[]" value="${res.id}">
                                                <label class="col-sm-3 mt-2 col-form-label font-weight-bold">${res.kuisioner}</label>
                                                <div class="form-group col-sm-2">
                                                <label >Ketersediaan Data</label>
                                                    <select class="form-control" onchange="ketersediaanData('${res.id}',null,null,null)" name="ketersediaan[]" id="ketersediaan-${res.id}">
                                                    <option value="tersedia" >Tersedia</option>
                                                    <option value="tidak tersedia">Tidak Tersedia</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label >Nilai</label>
                                                    <input type="text" class="form-control" oninvalid="this.setCustomValidity('Nilai Harus Diisi')"  placeholder="Masukkan Nilai" value="" name="nilai[]" id="nilai-${res.id}" required>
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label>Unit Penyedia Data</label>
                                                    <select class="form-control" name="penyedia[]" id="penyedia-${res.id}" required>
                                                    <option value="">Pilih</option>
@foreach($skpd as $p)
                                                        <option value={{ $p->id }}>{{ $p->nama }}</option>
@endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-3">
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <textarea class="form-control" rows="2" name="keterangan[]" id="keterangan-${res.id}" required></textarea>
                                                </div>
                                                </div>
                                            </div>
                                            `;
                                    data.push(form)
                                    $('#alert').html(`<div class="alert alert-warning" role="alert">
                                                Belum Diisi
                                        </div>`);
                                });
                                $('#form-kuisioner').html(data);
                            } else {
                                $('#submit-data').css('visibility', 'hidden');
                                $('#alert').html(`<div class="alert alert-warning" role="alert">
                                                Belum Ada
                                </div>`);
                                $('#form-kuisioner').html('');
                            }
                        },
                        error: function () {}
                    })
                }

            },
            error: function () {

            }
        })
    }

    function ketersediaanData(id, nilai, keterangan, penyedia_data) {
        let status = $(`#ketersediaan-${id}`).val();
        if (status == 'tersedia') {
            $(`input[id=nilai-${id}]`).attr('readonly', false);
            $(`input[id=nilai-${id}]`).attr('required', true);
            $(`input[id=nilai-${id}]`).val(nilai);
            $(`select[id=penyedia-${id}]`).attr('readonly', false);
            $(`select[id=penyedia-${id}]`).attr('required', true);
            $(`select[id=penyedia-${id}]`).val(penyedia_data);
            $(`textarea[id=keterangan-${id}]`).attr('readonly', false);
            $(`textarea[id=keterangan-${id}]`).attr('required', true);
            $(`textarea[id=keterangan-${id}]`).val(keterangan);
        } else {
            $(`input[id=nilai-${id}]`).attr('readonly', true);
            $(`input[id=nilai-${id}]`).val('');
            $(`input[id=nilai-${id}]`).attr('required', false);
            $(`select[id=penyedia-${id}]`).attr('readonly', true);
            $(`select[id=penyedia-${id}]`).val('');
            $(`select[id=penyedia-${id}]`).attr('required', false);
            $(`textarea[id=keterangan-${id}]`).attr('readonly', true);
            $(`textarea[id=keterangan-${id}]`).attr('required', false);
            $(`textarea[id=keterangan-${id}]`).val('');
        }
    }

</script>

@stop
