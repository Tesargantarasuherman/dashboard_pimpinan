@extends('layouts.admin')

@section('main-content')
<div>
    {!! Toastr::message() !!}
</div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold ">Daftar Peraturan Perundangan</h6>
                <button class="btn btn-sm btn-primary"
                        data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                    @include('perpu.modal-add')
                </div>
                <table class="table table-striped table-responsive mt-4" style="max-height: 700px;">
                    <thead>
                        <tr>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pemerkasa</th>
                            <th scope="col">Perihal</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
