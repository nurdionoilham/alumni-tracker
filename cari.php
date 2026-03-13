<?php include 'database.php'; ?>
<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<h2>Cari Alumni</h2>

<form method="GET">

<input type="text" name="keyword" class="form-control" placeholder="Cari nama">

<br>

<button class="btn btn-primary">Cari</button>

</form>

<br>

<table class="table table-bordered">

<tr>
<th>Nama</th>
<th>Prodi</th>
<th>Pekerjaan</th>
</tr>

<?php

if(isset($_GET['keyword'])){

$data=mysqli_query($conn,"SELECT * FROM alumni WHERE nama LIKE '%$_GET[keyword]%'");

while($a=mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $a['nama']; ?></td>
<td><?php echo $a['prodi']; ?></td>
<td><?php echo $a['pekerjaan']; ?></td>

</tr>

<?php } } ?>

</table>

</div>

</body>
</html>