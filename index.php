<?php include 'database.php'; ?>
<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<h2>Dashboard Alumni</h2>
<div class="row mb-4">

<div class="col-md-4">

<div class="card shadow border-0">

<div class="card-body">

<h6>Total Alumni</h6>

<?php
$q=mysqli_query($conn,"SELECT COUNT(*) as total FROM alumni");
$d=mysqli_fetch_assoc($q);
?>

<h3><?php echo $d['total']; ?></h3>

</div>
</div>
</div>

<div class="col-md-4">

<div class="card shadow border-0">

<div class="card-body">

<h6>Terverifikasi</h6>

<?php
$q=mysqli_query($conn,"SELECT COUNT(*) as total FROM alumni WHERE status='Terverifikasi'");
$d=mysqli_fetch_assoc($q);
?>

<h3><?php echo $d['total']; ?></h3>

</div>
</div>
</div>

</div>

<hr>

<h4>Data Alumni</h4>

<table class="table table-bordered">

<tr>
<th>Nama</th>
<th>Prodi</th>
<th>Pekerjaan</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php

$data=mysqli_query($conn,"SELECT * FROM alumni");

while($a=mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $a['nama']; ?></td>
<td><?php echo $a['prodi']; ?></td>
<td><?php echo $a['pekerjaan']; ?></td>
<td><?php echo $a['status']; ?></td>

<td>
<a href="verifikasi.php?id=<?php echo $a['id']; ?>" class="btn btn-success btn-sm">
Verifikasi
</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>