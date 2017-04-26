<?php
	
$konek = mysqli_connect("localhost", "root", "", "akademik");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>