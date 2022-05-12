@extends('layouts.admin')

@section('main-content')
    <div>
        {!! Toastr::message() !!}
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-800">Daftar Nilai Smart City
                        </h6><button class="btn btn-sm btn-primary"
                        data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                        @include('smart-city.nilai.modal-add')

                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">SKPD</th>
                            <th scope="col">Kuisioner</th>
                            <th scope="col">Iso</th>
                            {{-- <th scope="col">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getData as $data)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $data->id_skpd }}
                                </td>
                                <td>
                                    {{ $data->kuisioner }}
                                </td>
                                <td>
                                    {{ $data->iso }}
                                </td>
                                <td>
                                {{-- <td>
                                    <div class="dropdown no-arrow"><a class="dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-ellipsis-v fa-fw text-gray-800"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">Ubah</a>
                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
