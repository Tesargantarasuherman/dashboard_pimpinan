@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold ">Daftar Users</h6>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                    @include('users-management.users.modal-add')

                </div>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getData as $data)
                            <tr>
                                <td>
                                    {{ $data->nama }}
                                </td>
                                <td>
                                    {{ $data->masterRole->nama ?? '' }}
                                </td>
                                <td>
                                    <a href="{{ route('users.detail', $data->id ) }}" class="btn btn-sm btn-info">Detail</a>
                                    <a href="{{ route('users.edit', $data->id ) }}" class="btn btn-sm btn-warning">Edit</a>

                                    {{-- <div class="dropdown no-arrow"><a class="dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v fa-fw text-gray-800"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                        aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">Ubah</a>
                                    </div>
                                </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
