<?php
include "conn.php";


$nama=$_POST['nama'];
$hrg=$_POST['hrg'];
$ket=$_POST['ket'];
$stok=$_POST['stok'];
$foto=$_POST['foto'];


$insert="insert into ring(Nama, Harga, Keterangan, Stok, Foto) values ('$nama', '$hrg', '$ket', '$stok', '$foto')";

$conect->query($insert);

header('Location:ins.php');

?>