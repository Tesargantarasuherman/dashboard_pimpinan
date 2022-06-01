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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form id="form-submit" action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group"><label for="pilihTahun">Pilih Tahun</label>
                            <div>
                                <input type="tahun" class="form-control" value="" id="datepicker" name="tahun" onchange="getKuisioner()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Skpd</label>
                            <select class="form-control" id="skpd" name="id_skpd" required onchange="getKuisioner()">
                                <option value="">Pilih</option>
                                @foreach($skpd as $p)
                                    <option value={{ $p->id }}>{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="alert"></div>
                        <div id="form-kuisioner">

                        </div>
                        <button type="submit" class="btn btn-primary mb-2" id="submit-data" style="visibility:hidden">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('smart-city.nilai.js')
@endsection
