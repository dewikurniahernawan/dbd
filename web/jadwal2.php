<?php
include "koneksi.php";

$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$pemateri = $_POST['pemateri'];
$judul = $_POST['judul'];
$ket = $_POST['ket'];

$query = "insert into jadwal_dbd (tempat,tanggal,pemateri,judul,ket) values ('$tempat','$tanggal','$pemateri','$judul','$ket');";
$query2 = mysqli_query($config,$query);

header('location:index.php');
?>