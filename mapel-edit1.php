<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
						$kodemapel = $_POST['KodeMapel'];
					    $namamapel = $_POST['NamaMapel'];
			
		$db = mysql_connect('localhost', 'root', '') or
		die ('Unable to connect. Check your connection parameters.');
		mysql_select_db('db_akaschool', $db) or die(mysql_error($db)); 
		
	 			$query = 'UPDATE mapel set NAMA_MAPEL ="'.$namamapel.'"
					WHERE KD_MAPEL ="'.$kodemapel.'"';
					$result = mysql_query($query, $db) or die(mysql_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "mapel.php";
		</script>
 </body>
</html>