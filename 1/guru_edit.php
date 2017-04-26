<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$Nama_Guru 		= $_POST["Nama_Guru"];
$Tanggal_Lahir 	= $_POST["Tanggal_Lahir"];
$JK 			= $_POST["JK"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];

if ($edit = mysqli_query($konek, "UPDATE guru SET Nama_Guru='$Nama_Guru', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	Alamat='$Alamat', No_Telp='$No_Telp' WHERE NIP='$NIP'")){
		header("Location: guru.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>