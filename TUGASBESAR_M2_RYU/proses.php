<?php
include 'koneksi.php';

$nama      = $_POST['nama'];
$ktp       = $_POST['ktp'];
$pekerjaan = $_POST['pekerjaan'];
$kontak    = $_POST['kontak'];

$query = "INSERT INTO penghuni (nama, ktp, pekerjaan, kontak) VALUES ('$nama', '$ktp', '$pekerjaan', '$kontak')";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php"); 
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    echo "<br><a href='form.html'>Kembali</a>";
}
?>