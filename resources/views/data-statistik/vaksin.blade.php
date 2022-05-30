@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <div>
            <h6 class="m-0 font-weight-bold ">Data Vaksin Covid-19</h6><label for=""><i><div id="updateData" style="display: flex">Update Terakhir, </div> </i></label>
            <div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class=" text-sm mb-0 font-weight-bold text-gray-600 mb-2 text-uppercase mb-4">
                                    Ketercapaian Vaksin 1</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="row">
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Tenaga Kesehatan</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_nakes0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Petugas Publik</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_petugas_publik0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Lanjut Usia</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_lansia0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Masyarakat Umum</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_masyarakat0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Remaja</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_remaja0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Anak</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_anak0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Gotong Royong</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_gotong_royong0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class=" text-sm mb-0 font-weight-bold text-gray-600 mb-2 text-uppercase mb-4">
                                    Ketercapaian Vaksin 2</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="row">
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Tenaga Kesehatan</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_nakes1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Petugas Publik</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_petugas_publik1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Lanjut Usia</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_lansia1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Masyarakat Umum</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_masyarakat1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Remaja</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_remaja1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Anak</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_anak1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Gotong Royong</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_gotong_royong1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class=" text-sm mb-0 font-weight-bold text-gray-600 mb-2 text-uppercase mb-4">
                                    Ketercapaian Vaksin 3</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="row">
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Tenaga Kesehatan</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_nakes2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Petugas Publik</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_petugas_publik2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Lanjut Usia</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_lansia2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Masyarakat Umum</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_masyarakat2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Remaja</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_remaja2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Anak</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_anak2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2 text-center my-2">
                                                <div class="card shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                                    Gotong Royong</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="vaksin_gotong_royong2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-sm font-weight-bold text-gray-600  text-uppercase mb-1 my-2">Sasaran Vaksinasi
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-danger text-uppercase mb-1 text-center align-items-center">
                                                        Total Sasaran</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_sasaran">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Tenaga Kesehatan</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="sasaran_nakes">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_nakes1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_nakes2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_nakes3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Petugas Publik</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_petugas_public">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_petugas_public1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_petugas_public2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_petugas_public3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Lanjut Usia</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_lansia">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_lansia1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_lansia2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_lansia3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Masyarakat Umum</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_masyarakat">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_masyarakat1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_masyarakat2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_masyarakat3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Remaja</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_remaja">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_remaja1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_remaja2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_remaja3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Anak</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_anak">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_anak1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_anak2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_anak3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1 text-center align-items-center">
                                                        Gotong Royong</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_gotong_royong">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_gotong_royong1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_gotong_royong2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        Total Vaksin 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center" id="total_vaksin_gotong_royong3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script>
    function getVaksin() {
        $.ajax({
            type: "GET",
            url: `../api/v1/vaksin/terkini`,
            dataType: 'json',
            async: false,
            success: function (res) {
                return(
                    
                )
            }
        });
    }
    $(document).ready(function () {
        getVaksin()
    })
</script>
@stop
    @endsection
