@extends('layouts.guest')

@section('title', 'Masuk')

@section('content')
    <h2>Masuk</h2>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label class="check">
                <input type="checkbox" name="remember"> Ingat saya
            </label>
        </div>

        <button type="submit">Masuk</button>
    </form>

    <p class="auth-switch">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
@endsection