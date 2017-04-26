<?php

include "../koneksi.php";

$NIS_Nilai					= $_POST["NIS_Nilai"];
$Kode_Matapelajaran_Nilai	= $_POST["Kode_Matapelajaran_Nilai"];
$Nilai						= $_POST["Nilai"];

if($add = mysqli_query($konek, "INSERT INTO nilai (NIS_Nilai, Kode_Matapelajaran_Nilai, Nilai) VALUES ('$NIS_Nilai', '$Kode_Matapelajaran_Nilai', '$Nilai')")){
	header("Location: nilai.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>