<?php

include 'database.php';

$id=$_GET['id'];

mysqli_query($conn,"UPDATE alumni SET status='Terverifikasi' WHERE id='$id'");

header("location:index.php");

?>