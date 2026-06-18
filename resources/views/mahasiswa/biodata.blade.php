@extends('layout.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Biodata Saya</h1>
    <p class="mb-4">Informasi biodata mahasiswa yang sedang aktif di sistem akademik.</p>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi</h6>
                </div>
                <div class="card-body">
                    @if($mahasiswa)
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th width="30%">NIM</th>
                                    <td>{{ $mahasiswa->nim }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>{{ $mahasiswa->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Program Studi</th>
                                    <td>{{ $mahasiswa->prodi->nama_prodi ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $mahasiswa->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Status Akun</th>
                                    <td>
                                        <span class="badge badge-success">Aktif</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-warning">
                            Data biodata mahasiswa belum diisi atau tidak ditemukan. Silakan hubungi Administrator.
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Akun</h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-profile rounded-circle mb-3" src="{{ asset('img/undraw_profile.svg') }}" width="100" height="100">
                    <h5>{{ Auth::user()->name }}</h5>
                    <p class="text-muted">Username: {{ Auth::user()->username }}</p>
                    <p class="text-muted">Role: <span class="badge badge-primary">{{ ucfirst(Auth::user()->role) }}</span></p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
