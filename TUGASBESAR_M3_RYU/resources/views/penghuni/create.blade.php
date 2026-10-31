<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penghuni</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="parent">
        <div class="container">
            <div class="blok">
                <h2>Form Input Data Penghuni Kos</h2>
                <form method="POST" action="{{ route('penghuni.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Penghuni:</label><br>
                        <input type="text" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor KTP / Identitas:</label><br>
                        <input type="text" name="ktp" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan:</label><br>
                        <input type="text" name="pekerjaan" required>
                    </div>
                    <div class="form-group">
                        <label>Kontak Darurat:</label><br>
                        <input type="text" name="kontak" required>
                    </div>
                    <button type="submit" style="padding: 10px; background-color: #28a745; color: white; border: none;">Simpan Data</button>
                    <a href="{{ route('penghuni.index') }}" style="margin-left: 10px;">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>