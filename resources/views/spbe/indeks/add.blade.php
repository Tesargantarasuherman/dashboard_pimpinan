@extends('layouts.admin')

@section('main-content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('add.spbe') }}">
                    <div class="form-group my-2 mx-2"><label for="pilihTahun">Pilih Tahun</label>
                        <div>
                            <div><input type="year" class="form-control" name="tahun" value="" id="datepicker" required>
                            </div>
                        </div>
                    </div>
                    <div id="form-add">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    @section('js')
    <script>
        $(document).ready(function () {
            $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
            });
            $.ajax({
                type: "GET",
                url: `http://localhost:8000/spbe/domain-indikator/api`,
                dataType: 'json',
                async: false,
                success: function (res) {
                    console.log(res);
                    let no = 1;
                    let data = []
                    res.forEach(res => {
                        form = `
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-6 col-form-label">${res.nama_indikator}</label>
                            <div class="col-sm-6">
                            <input type="hidden" class="form-control" name="id[]" value="${res.id}" required>
                            <input type="text" class="form-control" name="skala_nilai[]" placeholder="${res.nama_indikator}" required>
                            </div>
                        </div>
                        `;
                        data.push(form)
                    });
                    $('#form-add').html(data);
                }
            });
        })

    </script>
    @stop
@endsection
