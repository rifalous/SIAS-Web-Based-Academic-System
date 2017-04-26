<?php

include "../koneksi.php";

$Kode_Jurusan	= $_POST["Kode_Jurusan"];
$Nama_Jurusan	= $_POST["Nama_Jurusan"];

if($add = mysqli_query($konek, "INSERT INTO jurusan(Kode_Jurusan, Nama_Jurusan) VALUES ('$Kode_Jurusan', '$Nama_Jurusan')")){
	header("Location: jurusan.php");
	exit();
}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>
