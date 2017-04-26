<?php

include "../koneksi.php";

$Kode_Kelas		= $_POST["Kode_Kelas"];
$Nama_Kelas		= $_POST["Nama_Kelas"];
$Kode_Jurusan_Kls	= $_POST["Kode_Jurusan_Kls"];

if($add = mysqli_query($konek, "INSERT INTO kelas (Kode_Kelas, Nama_Kelas, Kode_Jurusan_Kls) VALUES ('$Kode_Kelas', '$Nama_Kelas', '$Kode_Jurusan_Kls')")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>