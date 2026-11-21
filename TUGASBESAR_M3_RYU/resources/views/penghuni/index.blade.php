@extends('layouts.app')

@section('title', 'Data Penghuni Kos')
@section('heading', 'Data Penghuni Kos')

@section('content')
    @php
        $role = strtolower(trim((string) (Auth::user()->role ?? 'user')));
        $canManage = in_array($role, ['admin', 'staff'], true);
    @endphp

    @if ($canManage)
        <a href="{{ route('penghuni.create') }}" class="tombol tambah">+ Tambah Penghuni Baru</a>
    @else
        <p class="success">Anda login sebagai user biasa, jadi hanya dapat melihat data.</p>
    @endif

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Pekerjaan</th>
                    <th>Kontak Darurat</th>
                    @if ($canManage)
                        <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse($data as $index => $row)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->ktp }}</td>
                        <td>{{ $row->pekerjaan }}</td>
                        <td>{{ $row->kontak }}</td>
                        @if ($canManage)
                            <td>
                                <div class="aksi">
                                    <a href="{{ route('penghuni.edit', $row->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('penghuni.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-hapus"
                                            onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ $canManage ? 6 : 5 }}" class="kosong">Belum ada data penghuni.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <a href="{{ route('dashboard') }}" class="tombol">Kembali ke Dashboard</a>
@endsection