<?php
include 'koneksi.php';

$id        = $_POST['id'];
$nama      = $_POST['nama'];
$ktp       = $_POST['ktp'];
$pekerjaan = $_POST['pekerjaan'];
$kontak    = $_POST['kontak'];

$query = "UPDATE penghuni SET nama='$nama', ktp='$ktp', pekerjaan='$pekerjaan', kontak='$kontak' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal mengupdate data: " . mysqli_error($koneksi);
}
?>