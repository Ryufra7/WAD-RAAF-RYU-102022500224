<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="parent">
        <div class="container">
            <h3>Data yang berhasil ditambahkan:</h3>
            
            <table>
                <tr>
                    <th>Nama Profil</th>
                    <th>Nomor KTP</th>
                    <th>Pekerjaan</th>
                    <th>Kontak Darurat</th>
                </tr>
                <tr>
                    <td><?php echo $_POST['nama']; ?></td>
                    <td><?php echo $_POST['ktp']; ?></td>
                    <td><?php echo $_POST['pekerjaan']; ?></td>
                    <td><?php echo $_POST['kontak']; ?></td>
                </tr>
            </table>
            
            <br>
            <a href="form.html">Kembali isi form</a>
        </div>
    </div>

</body>
</html>