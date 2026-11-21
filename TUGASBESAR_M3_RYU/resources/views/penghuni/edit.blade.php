@extends('layouts.app')

@section('title', 'Edit Penghuni')
@section('heading', 'Edit Penghuni Kos')
@section('container_class', 'narrow')

@section('content')
    <form method="POST" action="{{ route('penghuni.update', $penghuni->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Penghuni</label>
            <input type="text" id="nama" name="nama" value="{{ $penghuni->nama }}" required>
        </div>

        <div class="form-group">
            <label for="ktp">Nomor KTP / Identitas</label>
            <input type="text" id="ktp" name="ktp" value="{{ $penghuni->ktp }}" required>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" id="pekerjaan" name="pekerjaan" value="{{ $penghuni->pekerjaan }}" required>
        </div>

        <div class="form-group">
            <label for="kontak">Kontak Darurat</label>
            <input type="text" id="kontak" name="kontak" value="{{ $penghuni->kontak }}" required>
        </div>

        <button type="submit">Update Data</button>
    </form>

    <a href="{{ route('penghuni.index') }}" class="tombol">Batal</a>
@endsection