<!DOCTYPE html>
<html>
<head>
    <title>Edit Penghuni</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="parent">
        <div class="container">
            <div class="blok">
                <h2>Form Edit Data Penghuni Kos</h2>
                <form method="POST" action="{{ route('penghuni.update', $penghuni->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Penghuni:</label><br>
                        <input type="text" name="nama" value="{{ $penghuni->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor KTP / Identitas:</label><br>
                        <input type="text" name="ktp" value="{{ $penghuni->ktp }}" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan:</label><br>
                        <input type="text" name="pekerjaan" value="{{ $penghuni->pekerjaan }}" required>
                    </div>
                    <div class="form-group">
                        <label>Kontak Darurat:</label><br>
                        <input type="text" name="kontak" value="{{ $penghuni->kontak }}" required>
                    </div>
                    <button type="submit" style="padding: 10px; background-color: #ffc107; border: none;">Update Data</button>
                    <a href="{{ route('penghuni.index') }}" style="margin-left: 10px;">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>