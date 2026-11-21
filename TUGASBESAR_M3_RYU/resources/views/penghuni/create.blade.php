@extends('layouts.app')

@section('title', 'Tambah Penghuni')
@section('heading', 'Tambah Penghuni Kos')
@section('container_class', 'narrow')

@section('content')
    <form method="POST" action="{{ route('penghuni.store') }}">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Penghuni</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="ktp">Nomor KTP / Identitas</label>
            <input type="text" id="ktp" name="ktp" required>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" id="pekerjaan" name="pekerjaan" required>
        </div>

        <div class="form-group">
            <label for="kontak">Kontak Darurat</label>
            <input type="text" id="kontak" name="kontak" required>
        </div>

        <button type="submit">Simpan Data</button>
    </form>

    <a href="{{ route('penghuni.index') }}" class="tombol">Batal</a>
@endsection