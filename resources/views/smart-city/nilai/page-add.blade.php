@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <div>
            {!! Toastr::message() !!}
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('nilai.index') }}">Nilai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Nilai</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-800">Tambah Nilai Smart City
                    </h6>
                </div>
            </div>

            <form class="addModal" method="POST" action="{{ route('tte.create') }}"
            enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="modal-body">

                <div class="form-group">
                    <label for="name">Kuisioner</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="id_skpd" required>
                        <option value="">Pilih</option>

                        @foreach ($getKuisioner as $p)
                            <option value={{ $p->id }}>{{ $p->kuisioner }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Tahun</label>
                    <input type="text" id="datepicker" name="tahun"
                        placeholder="{{ __('Tahun') }}" value="{{ old('tahun') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="name">Keterangan Tahun</label>
                    <textarea class="form-control" id="keterangan_tahun" rows="5" name="keterangan_tahun" placeholder="{{ __('Contoh:  3.000 juta liter') }}"
                        value="{{ old('keterangan_tahun') }}" required autofocus></textarea>
                </div>

                <div class="form-group">
                    <label for="name">Ketersediaan Data</label>
                    <textarea class="form-control" id="kuisioner" rows="5" name="kuisioner" placeholder="{{ __('Contoh: Tersedia') }}"
                        value="{{ old('Ketersediaan') }}" required autofocus></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
            </div>
        </form>
        </div>
    </div>
    @include('smart-city.nilai.js')

@endsection
