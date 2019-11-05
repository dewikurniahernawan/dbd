<?php
include "koneksi.php";

$id = $_POST['id'];
$time = $_POST['time'];
$coor = $_POST['coor'];
$ns = $_POST['ns'];
$day = $_POST['day'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$vd = $_POST['vd'];

$query = "insert into data_dbd (id,time,coor,ns,day,age,sex,vd) values ('$id','$time','$coor','$ns','$day','$age','$sex','$vd');";
$query2 = mysqli_query($config,$query);

header('location:index.php');
?>