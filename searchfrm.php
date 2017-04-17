<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Akademik Sekolah</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
        $db = mysql_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysql_select_db('db_akaschool', $db) or die(mysql_error($db));
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistem Informasi Akademik Sekolah</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="siswa.php"><i class="fa fa-fw fa-child"></i> Siswa</a>
                    </li>
                    <li>
                        <a href="kelas.php"><i class="fa fa-fw fa-building"></i> Kelas</a>
                    </li>
                    <li>
                        <a href="nilai.php"><i class="fa fa-fw fa-newspaper-o"></i> Nilai</a>
                    </li>
                    <li>
                        <a href="mapel.php"><i class="fa fa-fw fa-book"></i> Mapel</a>
                    </li>
                    <li>
                        <a href="guru.php"><i class="fa fa-fw fa-male"></i> Guru</a>
                    </li>
                    <li>
                        <a href="jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           SIAS <small>Sistem Informasi Akademik Sekolah</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<?php 
$query = 'SELECT * FROM siswa
              WHERE
              NIS ='.$_GET['id'];
            $result = mysql_query($query, $db) or die(mysql_error($db));
              while($row = mysql_fetch_array($result))
              {   
				$a = $row['NIS'];
				$b = $row['NAMA_SISWA'];
				$c = $row['TEMPAT_LAHIR_SISWA'];
				$d = $row['TANGGAL_LAHIR_SISWA'];
				$e = $row['JK_SISWA'];
				$f = $row['AGAMA_SISWA'];
				$g = $row['ANAK_KE'];
				$h = $row['ALAMAT_SISWA'];
				$i = $row['TELP_SISWA'];
				$j = $row['SEKOLAH_ASAL'];
				$k = $row['NAMA_AYAH'];
				$l = $row['NAMA_IBU'];
				$m = $row['PEKERJAAN_AYAH'];
				$n = $row['PEKERJAAN_IBU'];
				$o = $row['ALAMAT_ORTU'];
				$p = $row['NAMA_WALI'];
				$q = $row['PEKERJAAN_WALI'];
				$r = $row['ALAMAT_WALI'];
				$s = $row['JURUSAN'];
				$t = $row['KD_KELAS'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Detailed Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="siswa.php">
						
                            <div class="form-group">
                              <input class="form-control" placeholder="NIS" name="NIS" value="<?php echo $a; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Siswa" name="NamaSiswa" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Tempat Lahir" name="TempatLahir" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Tanggal Lahir" name="TanggalLahir" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="JK" name="JK" value="<?php echo $e; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Agama" name="Agama" value="<?php echo $f; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Anak Ke" name="AnakKe" value="<?php echo $g; ?>">
                            </div> 
                            <div class="form-group">
							  <input class="form-control" placeholder="Alamat Siswa" name="AlamatSiswa" value="<?php echo $h; ?>">
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="No Telp" name="NoTelp" value="<?php echo $i; ?>">
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Sekolah Asal" name="SekolahAsal" value="<?php echo $j; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Ayah" name="NamaAyah" value="<?php echo $k; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Ibu" name="NamaIbu" value="<?php echo $l; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Pekerjaan Ayah" name="PekerjaanAyah" value="<?php echo $m; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Pekerjaan Ibu" name="PekerjaanIbu" value="<?php echo $n; ?>">
                            </div>
                            <div class="form-group">
							  <input class="form-control" placeholder="Alamat Ortu" name="AlamatOrtu" value="<?php echo $o; ?>">
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Wali" name="NamaWali" value="<?php echo $p; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Pekerjaan Wali" name="PekerjaanWali" value="<?php echo $q; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Alamat Wali" name="AlamatWali" value="<?php echo $r; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Jurusan" name="Jurusan" value="<?php echo $s; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Kelas" name="Kelas" value="<?php echo $t; ?>">
                            </div>
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

