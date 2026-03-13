<?php
include 'database.php';

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM alumni WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data Alumni</h2>

<form method="post" action="update.php">

<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

Nama
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">

Prodi
<input type="text" name="prodi" value="<?php echo $d['prodi']; ?>">

Tahun Lulus
<input type="number" name="tahun_lulus" value="<?php echo $d['tahun_lulus']; ?>">

Pekerjaan
<input type="text" name="pekerjaan" value="<?php echo $d['pekerjaan']; ?>">

Lokasi
<input type="text" name="lokasi" value="<?php echo $d['lokasi']; ?>">

Status
<input type="text" name="status" value="<?php echo $d['status']; ?>">

<br><br>

<button type="submit">Update</button>

</form>