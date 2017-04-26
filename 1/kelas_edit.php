<?php

include "../koneksi.php";

$Kode_Kelas		= $_POST["Kode_Kelas"];
$Nama_Kelas		= $_POST["Nama_Kelas"];
$Kode_Jurusan_Kls	= $_POST["Kode_Jurusan_Kls"];

if($edit = mysqli_query($konek, "UPDATE kelas SET Nama_Kelas='$Nama_Kelas', Kode_Jurusan_Kls='$Kode_Jurusan_Kls' WHERE Kode_Kelas='$Kode_Kelas'")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>