<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
						$a = $_POST['IDJadwal'];
					    $b = $_POST['Jurusan'];
						$c = $_POST['Waktu'];
						$d = $_POST['Hari'];
						$e = $_POST['NIP'];
						$f = $_POST['KodeMapel'];
			
		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('db_akaschool', $db) or die(mysql_error($db)); 
		
	 			$query = 'UPDATE jadwal_pelajaran set JURUSAN ="'.$b.'",
					WAKTU ="'.$c.'", 
					NAMA_HARI="'.$d.'",
					NIP="'.$e.'",
					KD_MAPEL="'.$f.'"
					WHERE ID_JADWAL ="'.$a.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "jadwal.php";
		</script>
 </body>
</html>