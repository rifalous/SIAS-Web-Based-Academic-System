<?php

include "../koneksi.php";

$Kode_Matapelajaran	= $_GET["Kode_Matapelajaran"];

if($delete = mysqli_query($konek, "DELETE FROM matapelajaran WHERE Kode_Matapelajaran='$Kode_Matapelajaran'")){
	header("Location: matapelajaran.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>