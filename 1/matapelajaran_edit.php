<?php

include "../koneksi.php";

$Kode_Matapelajaran	= $_POST["Kode_Matapelajaran"];
$Nama_Matapelajaran	= $_POST["Nama_Matapelajaran"];

if($edit = mysqli_query($konek,"UPDATE matapelajaran SET Nama_Matapelajaran='$Nama_Matapelajaran' WHERE Kode_Matapelajaran='$Kode_Matapelajaran'")){
	header("Location: matapelajaran.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>