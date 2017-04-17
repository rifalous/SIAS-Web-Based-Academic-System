<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Akademik Sekolah
</title>

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
                <a class="navbar-brand" href="index.php">Sistem Informasi Akademik Sekolah
</a>
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


             <div class="col-lg-12">
                  <h2>Add new Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="NIS" name="NIS">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Siswa" name="NamaSiswa">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Tempat Lahir" name="TempatLahir">
                            </div> 
                            <div class="form-group">
                              <input type="date" class="form-control" placeholder="Tanggal Lahir" name="TanggalLahir">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="JK" name="JK">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Agama" name="Agama">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Anak Ke" name="AnakKe">
                            </div> 
                            <div class="form-group">
                             <label>Alamat Siswa</label>
                              <textarea class="form-control" rows="3"  name="AlamatSiswa"></textarea>
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="No Telp" name="NoTelp">
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Sekolah Asal" name="SekolahAsal">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Ayah" name="NamaAyah">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Ibu" name="NamaIbu">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Pekerjaan Ayah" name="PekerjaanAyah">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Pekerjaan Ibu" name="PekerjaanIbu">
                            </div>
                            <div class="form-group">
                             <label>Alamat Ortu</label>
                              <textarea class="form-control" rows="3"  name="AlamatOrtu"></textarea>
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Nama Wali" name="NamaWali">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Pekerjaan Wali" name="PekerjaanWali">
                            </div>
                            <div class="form-group">
                             <label>Alamat Wali</label>
                              <textarea class="form-control" rows="3"  name="AlamatWali"></textarea>
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Jurusan" name="Jurusan">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Kelas" name="Kelas">
                            </div>
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


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

