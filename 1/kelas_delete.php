<?php

include "../koneksi.php";

$Kode_Kelas	= $_GET["Kode_Kelas"];

if($delete = mysqli_query($konek, "DELETE FROM kelas WHERE Kode_Kelas='$Kode_Kelas'")){
	header("Location: kelas.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>