<?php

include 'database.php';

mysqli_query($conn,"INSERT INTO alumni VALUES(
'',
'$_POST[nama]',
'$_POST[prodi]',
'$_POST[tahun_lulus]',
'$_POST[pekerjaan]',
'$_POST[lokasi]',
'Belum Diverifikasi'
)");

header("location:index.php");

?>