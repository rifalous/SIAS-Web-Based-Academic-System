<?php

include "../koneksi.php";

$Kode_Matapelajaran	= $_POST["Kode_Matapelajaran"];
$Nama_Matapelajaran	= $_POST["Nama_Matapelajaran"];
$SKS				= $_POST["SKS"];

if($add = mysqli_query($konek,"INSERT INTO matapelajaran (Kode_Matapelajaran, Nama_Matapelajaran) VALUES ('$Kode_Matapelajaran', '$Nama_Matapelajaran')")){
	header("Location: matapelajaran.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>