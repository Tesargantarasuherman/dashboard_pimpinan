@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold ">Daftar Peraturan Perundangan</h6>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                    @include('perpu.modal-add')
                </div>
                <table class="table table-striped  mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Tahun</th>
                            <th scope="col">Pemerkasa</th>
                            <th scope="col">Perihal</th>
                            <th scope="col">Nama file</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getData as $data)
                            <tr>
                                <td>
                                    {{ $data->tahun }}
                                </td>
                                <td>
                                    {{ $data->masterSkpd->nama }}
                                </td>
                                <td>
                                    {{ $data->perihal }}
                                </td>
                                <td>
                                    {{ $data->file }}
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal"
                                        data-target="#detailModal{{ $data->id }}">Detail</button>

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
                    @include('perpu.modal-detail')

                </table>
            </div>
        </div>
    </div>
@endsection
