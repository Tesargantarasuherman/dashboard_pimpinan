@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('nilai.index') }}">Nilai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nilai Kuisioner</li>
            </ol>
        </nav>
        <div class="row my-4">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form class="addModal" method="POST" action="{{ route('nilai.store') }}"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="modal-body">

                                <div class="form-group"><label for="pilihTahun">Pilih Tahun</label>
                                    <div>
                                        <input type="tahun" class="form-control" value="" id="datepicker" name="tahun">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Skpd</label>
                                    <select class="form-control" id="skpd" name="id_skpd" required onchange="getSkpd()">
                                        <option value="">Pilih</option>
                                        @foreach ($skpd as $p)
                                            <option value={{ $p->id }}>{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">


                        <div class="form-group">
                            <label for="name">Kuisioner</label>
                            <select class="form-control" id="kuisioners" name="id_kuisioner" required onchange="getDataNilai()">
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Keterangan Tahun</label>
                            <textarea class="form-control" id="keterangan_tahun" rows="5" name="keterangan_tahun"
                                placeholder="{{ __('Contoh:  3.000 juta liter') }}"
                                value="" required autofocus></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Ketersediaan Data</label>
                            <textarea class="form-control" id="ketersediaan" rows="5" name="ketersediaan"
                                placeholder="{{ __('Contoh: Tersedia') }}" value="{{ old('Ketersediaan') }}"
                                required autofocus></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Instansi/Unit Penyedia Data</label>
                            <select class="form-control" id="upd" name="unit_penyedia_data"
                                required>
                                {{-- <option value="">== Pilih == </option> --}}
                                {{-- @foreach ($master as $p)
                                    <option value= {{ $p->id }}>{{ $p->nama }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Keterangan</label>
                            <textarea class="form-control" id="keterangan" rows="5" name="keterangan"
                                placeholder="{{ __('Contoh: Data diperoleh dari stasiun PT PAM Lyonnaise Jaya (PALYJA)') }}"
                                value="{{ old('Ketersediaan') }}" required autofocus></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('smart-city.nilai.js')
@endsection