<?php

include "../koneksi.php";

$Id_Nilai					= $_POST["Id_Nilai"];
$NIS_Nilai					= $_POST["NIS_Nilai"];
$Kode_Matapelajaran_Nilai	= $_POST["Kode_Matapelajaran_Nilai"];
$Nilai						= $_POST["Nilai"];

if($edit = mysqli_query($konek, "UPDATE nilai SET NIS_Nilai='$NIS_Nilai', Kode_Matapelajaran_Nilai='$Kode_Matapelajaran_Nilai', Nilai='$Nilai' WHERE Id_Nilai='$Id_Nilai'")){
	header("Location: nilai.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>