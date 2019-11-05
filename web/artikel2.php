<?php
include "koneksi.php";

$judul = $_POST['judul'];
$sumber = $_POST['sumber'];
$isi = $_POST['isi'];

$query = "insert into art_dbd (judul,sumber,isi) values ('$judul','$sumber','$isi');";
$query2 = mysqli_query($config,$query);

header('location:index.php');
?>