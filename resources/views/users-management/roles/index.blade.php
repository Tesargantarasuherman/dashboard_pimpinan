@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold ">Daftar Role</h6>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                    @include('users-management.roles.modal-add')

                </div>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getData as $data)
                            <tr>
                                <td>
                                    {{ $data->nama }}
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
