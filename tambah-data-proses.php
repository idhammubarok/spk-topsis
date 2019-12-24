<?php
include "koneksi.php";

$nama = $_POST["nama"];
$harga = $_POST["harga"];
$ram = $_POST["ram"];
$memori = $_POST["memori"];
$processor = $_POST["processor"];
$kamera = $_POST["kamera"];


// bobot anga harga
if($harga < 1000000){
	$harga_angka = 5;
} elseif($harga >= 1000000 && $harga <= 3000000){
	$harga_angka = 4;
}elseif($harga > 3000000 && $harga <= 4000000){
	$harga_angka = 3;
}elseif($harga > 4000000 && $harga <= 5000000){
	$harga_angka = 2;
}elseif($harga > 5000000){
	$harga_angka = 1;
}

//bobot angka ram
if($ram < 6){
	$ram_angka = $ram;
}
elseif($ram == 6){
	$ram_angka = 5;
}


//bobot angka memori
if($memori == 4){
	$memori_angka = 1;
}
elseif($memori == 8){
	$memori_angka = 2;
}
elseif($memori == 16){
	$memori_angka = 3;
}
elseif($memori == 32){
	$memori_angka = 4;
}
elseif($memori == 64){
	$memori_angka = 5;
}

//bobot angka processor
if($processor == "Dualcore"){
	$processor_angka = 1;
}
elseif($processor == "Quadcore"){
	$processor_angka = 3;
}
elseif($processor == "Octacore"){
	$processor_angka = 5;
}

if($kamera == 8){
	$kamera_angka = 1;
}
elseif($kamera == 13){
	$kamera_angka = 3;
}
elseif($kamera == 16){
	$kamera_angka = 5;
}

$sql = "INSERT INTO data_hp(nama_hp, harga_hp, ram_hp, memori_hp, processor_hp, kamera_hp, harga_angka, ram_angka, memori_angka, processor_angka, kamera_angka)  VALUES('$nama', '$harga', '$ram', '$memori', '$processor', '$kamera', '$harga_angka', '$ram_angka', '$memori_angka', '$processor_angka', '$kamera_angka')";
$insert = mysqli_query($conn,$sql) or die(mysqli_error());
if ($insert == TRUE) {
	header("location:daftar-handphone.php?pesan=ok");
}else {
	header("location:tambah-data.php?pesan=no");
}
?>