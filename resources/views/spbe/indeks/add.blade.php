@extends('layouts.admin')

@section('main-content')
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="" id="form-submit">
                    <div class="form-group my-2 mx-2"><label for="pilihTahun">Pilih Tahun</label>
                        <div>
                            <div><input type="year" class="form-control" name="tahun" value="" id="datepicker" required>
                            </div>
                        </div>
                    </div>
                    <div id="form-add">

                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@section('js')
<script>
    $(document).ready(function () {
        let year_now = new Date().getFullYear();
        $("#datepicker").val(year_now);

        function getIndeksSpbe(param){
            $.ajax({
                type: "GET",
                url: `../spbe/indeks-spbe/api/${param}`,
                dataType: 'json',
                async: false,
                success: function (res) {
                    console.log(res.length);
                    let no = 1;
                    let data = [];
                    if (res.length > 0) {
                        $('#form-submit').attr('action', '../spbe/update-spbe');
                        $('#btn-submit').text('Update');
                        res.forEach(res => {
                            form = `
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-6 col-form-label font-weight-bold">${res.nama_indikator}</label>
                            <div class="col-sm-6">
                            <input type="hidden" class="form-control" name="id[]" value="${res.id}" required>
                            <input type="hidden" class="form-control" name="id_indikator[]" value="${res.id_indikator}" required>
                            <input type="number" class="form-control" min=1 max=5 name="skala_nilai[]" placeholder="${res.nama_indikator}" value="${res.skala_nilai}" required id="skala_nilai">
                            </div>
                        </div>
                        `;
                            data.push(form)
                        });
                        $('#form-add').html(data);
                    } else {
                        $('#form-submit').attr('action','../spbe/add-spbe');
                        $('#btn-submit').text('Tambah');
                        $.ajax({
                            type: "GET",
                            url: `../spbe/domain-indikator/api`,
                            dataType: 'json',
                            async: false,
                            success: function (res) {
                                res.forEach(res => {
                                    form = `
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-6 col-form-label font-weight-bold">${res.nama_indikator}</label>
                                        <div class="col-sm-6">
                                        <input type="hidden" class="form-control" name="id[]" value="${res.id}" required>
                                        <input type="number" class="form-control" min=1 max=5 name="skala_nilai[]" placeholder="${res.nama_indikator}" required id="skala_nilai">
                                        </div>
                                    </div>
                                    `;
                                    data.push(form)
                                });
                                $('#form-add').html(data);
                            }
                        });
                    }
                }
            });
        }
        getIndeksSpbe(year_now);
        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
        }).on('change', function () {
            let tahun = $("#datepicker").val();
            getIndeksSpbe(tahun)
        });
        
    })

</script>
@stop
    @endsection
