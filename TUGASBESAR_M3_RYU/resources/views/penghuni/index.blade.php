<!DOCTYPE html>
<html>
<head>
    <title>Data Penghuni Kos</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .container { width: 90%; height: auto; margin: auto; }
        .btn { padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-tambah { background-color: #28a745; color: white; margin-bottom: 10px; display: inline-block; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-hapus { background-color: #dc3545; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="parent">
        <div class="container">
            <h2>Data Penghuni Kos</h2>
            <a href="{{ route('penghuni.create') }}" class="btn btn-tambah">+ Tambah Penghuni Baru</a>
            
            <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Pekerjaan</th>
                    <th>Kontak Darurat</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->ktp }}</td>
                    <td>{{ $row->pekerjaan }}</td>
                    <td>{{ $row->kontak }}</td>
                    <td>
                        <a href="{{ route('penghuni.edit', $row->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('penghuni.destroy', $row->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>