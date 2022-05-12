@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h6 class="m-0 font-weight-bold text-gray-800">Data CCTV</h6>
        <div class="row my-4">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-gray-800">Tabel Menara Telekomunikasi di Kota Bandung 
                                ({{ $dataCount['dataMenara'] }})
                                </h6><button class="btn btn-sm btn-primary"
                                data-toggle="modal" data-target="#add-modal">Tambah Data</button>
                            @include('infrastruktur.menara.modal-add')
                        </div>
                        <div>
                            {!! Toastr::message() !!}
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="row">
                                <div class="col-md-12"></div>
                            </div>
                        </div>
                        <table class="table table-striped table-responsive mt-4" style="max-height: 74.5vh;">
                            <thead>
                                <tr style="font-size: 12px; font-weight: bold;">
                                    <th scope="col" style="min-width: 20px; max-height: 25px; z-index: 1;">No</th>
                                    <th scope="col"
                                        style="min-width: 150px; max-height: 25px; position: sticky; left: 0px; z-index: 2; background-color: white;">
                                        Lokasi</th>
                                    <th scope="col" style="min-width: 150px; max-height: 25px; z-index: 1;">Dinas</th>
                                    <th scope="col" style="min-width: 150px; max-height: 25px; z-index: 1;">Vendor</th>
                                    <th scope="col" style="min-width: 60px; max-height: 25px; z-index: 1;">Status</th>
                                    <th scope="col" style="min-width: 60px; max-height: 25px; z-index: 1;">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($getMenara as $menara)
                                <tr>
                                    <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td style="position: sticky; left: 0px; z-index: 2; background-color: white;">
                                        {{ $menara->lokasi }}</td>
                                    <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                        {{ $menara->dinas }}</td>
                                    <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                        {{ $menara->vendor }}</td>
                                    <td style="height:5px;text-align:center;padding:0px;font-size:12px;">
                                        {{ $menara->status }}</td>
                                    <td>
                                        <div class="dropdown no-arrow"><a class="dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i
                                                    class="fas fa-ellipsis-v fa-fw text-gray-800"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink"><a class="dropdown-item"
                                                    href="#">Ubah</a></div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection