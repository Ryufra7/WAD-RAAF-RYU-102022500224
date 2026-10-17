<?php
include 'koneksi.php';
$query = "SELECT * FROM penghuni ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penghuni Kos (CRUD)</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container { width: 90%; height: auto; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; border-radius: 3px; }
        .btn-tambah { background-color: #28a745; margin-bottom: 10px; display: inline-block; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-hapus { background-color: #dc3545; }
    </style>
</head>
<body>
    <div class="parent">
        <div class="container">
            <h2>Data Penghuni Kos</h2>
            <a href="form.html" class="btn btn-tambah">+ Tambah Penghuni Baru</a>
            
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Pekerjaan</th>
                    <th>Kontak Darurat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['ktp']; ?></td>
                    <td><?php echo $row['pekerjaan']; ?></td>
                    <td><?php echo $row['kontak']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>