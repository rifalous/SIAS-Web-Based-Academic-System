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
                    <li>
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
                    <li class="active">
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
                        <h2>List of Records</h2> <a href="jadwal-add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Jadwal</th>
                                        <th>Jurusan</th>
                                        <th>Waktu</th>
                                        <th>Hari</th>
                                        <th>NIP</th>
                                        <th>Kode Mapel</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM jadwal_pelajaran';
                    $result = mysql_query($query, $db) or die (mysql_error($db));
                  
                        while ($row = mysql_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['ID_JADWAL'].'</td>';
                            echo '<td>'. $row['JURUSAN'].'</td>';
                            echo '<td>'. $row['WAKTU'].'</td>';
                            echo '<td>'. $row['NAMA_HARI'].'</td>';
                            echo '<td>'. $row['NIP'].'</td>';
                            echo '<td>'. $row['KD_MAPEL'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="jadwal-searchfrm.php?action=edit & id='.$row['ID_JADWAL'] . '" > VIEW </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="jadwal-edit.php?action=edit & id='.$row['ID_JADWAL'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="jadwal-del.php?type=jadwal&delete & id=' . $row['ID_JADWAL'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
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
