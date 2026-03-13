<?php
include 'database.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$tahun_lulus = $_POST['tahun_lulus'];
$pekerjaan = $_POST['pekerjaan'];
$lokasi = $_POST['lokasi'];
$status = $_POST['status'];

mysqli_query($conn,"UPDATE alumni SET
nama='$nama',
prodi='$prodi',
tahun_lulus='$tahun_lulus',
pekerjaan='$pekerjaan',
lokasi='$lokasi',
status='$status'
WHERE id='$id'");

header("location:index.php");
?>