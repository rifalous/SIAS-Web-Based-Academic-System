<?php

include "../koneksi.php";

$NIS 				= $_POST["NIS"];
$Nama_Siswa			= $_POST["Nama_Siswa"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$Alamat 			= $_POST["Alamat"];
$No_Telp 			= $_POST["No_Telp"];
$Kode_Kelas_Siswa 	= $_POST["Nama_Siswa"];

if($edit = mysqli_query($konek, "UPDATE siswa SET Nama_Siswa='$Nama_Siswa', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	No_Telp='$No_Telp', Alamat='$Alamat', Nama_Siswa='$Nama_Siswa' WHERE NIS='$NIS'")){
		header("Location: siswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>