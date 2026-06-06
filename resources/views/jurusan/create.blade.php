@extends('layout.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
</head>
<body>
    <h1>Tambah Jurusan</h1>
    <form action="{{ route('jurusan.store') }}" method="POST">
         @csrf
        <label for="nama_jurusan">Nama Jurusan :</label>
        <input type="text" name="nama_jurusan">
        <br>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('jurusan.index') }}">Kembali</a>
    </form>

</body>
</html>
@endsection