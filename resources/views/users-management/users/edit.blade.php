@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Users management</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar avatar font-weight-bold"
                        style="font-size: 60px; height: 180px; width: 180px;" data-initial="{{ Auth::user()->nama[0] }}">
                    </figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{ $getData->nama }}</h5>
                                <p>{{ $getData->masterRole->nama ?? '' }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>

                <div class="card-body">

                    {{-- <h6 class="heading-small text-muted mb-4">User information</h6> --}}
                    <form class="form-horizontal" method="post" enctype="multipart/form-data"
                        action="{{ route('users.update', $getData->id) }}">
                        {{ csrf_field() }}

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Nama</label>
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Name"
                                            value="{{ old('name', $getData->nama) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email </label>
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="example@example.com" value="{{ old('email', $getData->email) }}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nip">NIP</label>
                                        <input type="integer" id="nip" class="form-control" name="nip"
                                            placeholder="Nomor Induk Pegawai " value="{{ old('nip', $getData->nip) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="nik">NIK</label>
                                        <input type="integer" id="nik" class="form-control" name="nik" placeholder="NIK"
                                            value="{{ old('nik', $getData->nik) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label">Role</label>
                                        <select class="form-control " name="id_role" required>
                                            <option value="">Pilih</option>

                                            @foreach ($role as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ $role->id == $getData->id_role ? 'selected' : '' }}>
                                                    {{ $role->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label">Skpd</label>
                                        <select class="form-control " name="id_skpd">
                                            <option value="">Pilih</option>
                                            @foreach ($maskterSkpd as $skpd)
                                                <option value="{{ $skpd->id }}"
                                                    {{ $skpd->id == $getData->id_skpd ? 'selected' : '' }}>
                                                    {{ $skpd->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection
