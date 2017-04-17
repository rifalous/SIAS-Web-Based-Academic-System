<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
						$a = $_POST['NIP'];
					    $b = $_POST['NamaGuru'];
						$c = $_POST['TempatLahir'];
						$d = $_POST['TanggalLahir'];
						$e = $_POST['JK'];
						$f = $_POST['Agama'];
						$g = $_POST['Alamat'];
						$h = $_POST['NoTelp'];
						$i = $_POST['Jabatan'];
						$j = $_POST['KodeMapel'];
			
		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('db_akaschool', $db) or die(mysql_error($db)); 
		
	 			$query = 'UPDATE GURU set NAMA_GURU ="'.$b.'",
					TEMPAT_LAHIR_GURU ="'.$c.'", 
					TANGGAL_LAHIR_GURU="'.$d.'",
					JK_GURU="'.$e.'",
					AGAMA_GURU="'.$f.'", 
					ALAMAT_GURU="'.$g.'",
					TELP_GURU="'.$h.'",
					JABATAN="'.$i.'", 
					KD_MAPEL="'.$j.'"
					WHERE NIP ="'.$a.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "guru.php";
		</script>
 </body>
</html>