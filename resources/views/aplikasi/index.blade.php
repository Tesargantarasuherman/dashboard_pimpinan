@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">{{ __('Aplikasi') }}</h1>

        @if (session('success'))
            <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger border-left-danger" role="alert">
                <ul class="pl-4 my-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div id="container"></div>
                        {{-- <div id="containers"></div> --}}
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div style="width: 100%">
                                                <table class="table table-striped auto">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Layanan Publik</th>
                                                            <th scope="col">Administrasi Pemerintahan</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div id="total_aplikasi_layanan_publik" class="stle:center"></div>
                                                                <div id="total_layanan_publik"></div>
                                                            </td>
                                                            <td>
                                                                <div id="total_aplikasi_administrasi_pemerintahan"></div>
                                                                <div id="total_administrasi_pemerintahan"></div>
                                                            </td>
                                                            <td>
                                                                <div id="total_aplikasi"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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


        <div class="row my-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('aplikasi.javascript')
@endsection
