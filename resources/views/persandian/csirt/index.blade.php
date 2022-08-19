@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-800">CSIRT
                        {{-- </h6><button class="btn btn-sm btn-primary"
                        data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                    @include('persandian.csirt.modal-add') --}}
                </div>
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama CSIRT</th>
                            <th scope="col">CSIRT</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getPentest as $pentest)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $pentest->nama_aplikasi }}</td>
                                <td>
                                    <a href="{{ $pentest->link_website }}" target="_blank"
                                        rel="noopener noreferrer">{{ $pentest->link_website }}</a>
                                </td>
                                <td>
                                    {{ $pentest->tanggal }}</td>
                                <td>
                                    {{ $pentest->status }}</td>
                                <td>
                                    <div class="dropdown no-arrow"><a class="dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-v fa-fw text-gray-800"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">Ubah</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
    </div>
@endsection
