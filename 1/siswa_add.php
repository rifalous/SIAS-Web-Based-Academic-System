<?php
include "../koneksi.php";

$NIS 				= $_POST["NIS"];
$Nama_Siswa			= $_POST["Nama_Siswa"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$Alamat 			= $_POST["Alamat"];
$No_Telp 			= $_POST["No_Telp"];
$Kode_Kelas_Siswa 	= $_POST["Kode_Kelas_Siswa"];

if ($add = mysqli_query($konek, "INSERT INTO siswa (NIS, Nama_Siswa, Tanggal_Lahir, JK, Alamat, No_Telp, Kode_Kelas_Siswa) VALUES 
	('$NIS', '$Nama_Siswa', '$Tanggal_Lahir', '$JK', '$Alamat', '$No_Telp', '$Kode_Kelas_Siswa')")){
		header("Location: siswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>