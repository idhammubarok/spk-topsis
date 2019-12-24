<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM data_hp WHERE id_hp='$id' ";
$hapus = mysqli_query($conn,$sql) or die(mysqli_error());

if ($hapus== TRUE) {
	header("location:daftar-handphone.php?pesan=del");
}else {
	header("location:daftar-handphone.php?pesan=del_err");
}
?>