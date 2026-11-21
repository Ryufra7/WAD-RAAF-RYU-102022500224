@extends('layouts.app')

@section('title', 'Dashboard Data Kos')

@section('fullpage')
@php
    $role = strtolower(trim((string) (Auth::user()->role ?? 'user')));
    $canManage = in_array($role, ['admin', 'staff'], true);
@endphp
<div class="wrapper">

    <div class="header">
        <h1>Dashboard Data Kos</h1>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>
        <p>Role: {{ ucfirst($role) }}</p>
    </div>

    <div class="content">
        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <h2>Menu Data Kos</h2>
        <p>Silakan pilih menu yang ingin kamu akses.</p>

        <div class="menu-card">
            <h3>Data Penghuni</h3>
            @if ($canManage)
                <p>Kelola dan lihat informasi data penghuni kos. Total saat ini: {{ $totalPenghuni }} penghuni.</p>
            @else
                <p>Lihat informasi data penghuni kos (hanya lihat). Total saat ini: {{ $totalPenghuni }} penghuni.</p>
            @endif
            <a href="{{ route('penghuni.index') }}">Buka Data Penghuni</a>
        </div>

        {{-- Jika halamannya sudah dibuat, ganti <span class="menu-soon"> menjadi
             <a href="{{ route('nama.route') }}">Buka ...</a> --}}
        <div class="menu-card">
            <h3>Data Inventaris</h3>
            <p>Informasi data inventaris kos.</p>
            <span class="menu-soon">Segera hadir</span>
        </div>

        <div class="menu-card">
            <h3>Data Staff Kos</h3>
            <p>Informasi data staff kos.</p>
            <span class="menu-soon">Segera hadir</span>
        </div>

        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" onclick="return confirm('Yakin ingin keluar?');">Logout</button>
            </form>
        </div>
    </div>

</div>
@endsection