    @extends('layout.app')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Prodi</h1>
    <p class="mb-4">
        Form untuk memperbarui nama prodi dalam sistem akademik.
    </p>

    <!-- Card Form Edit -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Prodi 
            </h6>
        </div>

    <h1>Tambah Prodi</h1>

    <form action="/prodi" method="POST">
        @csrf
        <div>
            <label>Jurusan</label>
            <select name="jurusan_id">

                @foreach($jurusans as $jurusan)

                <option value="{{ $jurusan->id }}">
                    {{ $jurusan->nama_jurusan }}
                </option>
                @endforeach
            </select>
        </div>
        <br>
        
        <div>

            <label>Nama Prodi</label>

            <input type="text"
                   name="nama_prodi">

        </div>

        <br>

        <button type="submit" class="btn btn-primary shadow-sm">
                    <i class="fas fa-save"></i> Simpan
        </button>

    </form>
@endsection