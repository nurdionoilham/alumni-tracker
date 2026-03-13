<?php include 'database.php'; ?>
<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<h2>Tambah Data Alumni</h2>

<form method="POST" action="simpan.php">

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
<label>Prodi</label>
<input type="text" name="prodi" class="form-control">
</div>

<div class="mb-3">
<label>Tahun Lulus</label>
<input type="number" name="tahun_lulus" class="form-control">
</div>

<div class="mb-3">
<label>Pekerjaan</label>
<input type="text" name="pekerjaan" class="form-control">
</div>

<div class="mb-3">
<label>Lokasi</label>
<input type="text" name="lokasi" class="form-control">
</div>

<button class="btn btn-primary">Simpan</button>

</form>

</div>

</body>
</html>