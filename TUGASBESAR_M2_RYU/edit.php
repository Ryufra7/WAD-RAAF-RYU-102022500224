<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM penghuni WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Penghuni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="parent">
        <div class="container" style="height: auto;">
            <div class="blok">
                <h2>Form Edit Data Penghuni Kos</h2>
                <form method="POST" action="proses_edit.php">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="form-group">
                        <label>Nama Penghuni:</label><br>
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor KTP / Identitas:</label><br>
                        <input type="text" name="ktp" value="<?php echo $data['ktp']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan:</label><br>
                        <input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kontak Darurat:</label><br>
                        <input type="text" name="kontak" value="<?php echo $data['kontak']; ?>" required>
                    </div>
                    <button type="submit">Update Data</button>
                    <a href="index.php" style="margin-left: 10px;">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>