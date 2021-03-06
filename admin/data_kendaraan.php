<!doctype html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kementrian Keuangan</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
</head>

<body>
    <?php 
    
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php");

    }
    include "..\koneksi.php";
    ?>

        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo3.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="images/logo3.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title"><a href="index.php">Kementrian Keuangan</a></h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Tanah</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-download"></i><a href="input_tanah.php">Input</a></li>
                            <li><i class="fa fa-list"></i><a href="view_tanah.php">List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-road"></i>Kendaraan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-download"></i><a href="input_kend.php">Input</a></li>
                            <li><i class="fa fa-list"></i><a href="view_kend.php">List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Barang Gratifikasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-download"></i><a href="input_aset.php">Input</a></li>
                            <li><i class="fa fa-list"></i><a href="view_aset.php">List</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/logo3.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

         <div class="breadcrumbs">
            <div class="col-sm-8">
                <div class="page-header float-center">
                    <div class="page-title">
                        <ol class="breadcrumb text-center">
                            <li class="active">Welcome, <?php echo $_SESSION['username']; ?> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><?php 
        $id = $_GET['id'];
        $no = 1;
        $sql = mysqli_query($koneksi,"select * from kendaraan where id = $id");
        while($data = mysqli_fetch_array($sql)){
        ?>
                <h3><center><?php echo $data['judul']; ?></center></h3>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<!--                     <div id="chartContainer" style="height: 400px; width: 50%;"></div> 
                    <div id="chartContainer2" style="height: 400px; width: 50%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->

        
        <table>
            <tr><td rowspan="12">
                <img style="height: 200px; width: 200px;" src="<?php echo "images/kend/".$data['img1'] ?>">
                <img style="height: 200px; width: 200px;" src="<?php echo "images/kend/".$data['img2'] ?>"> 
            </td></tr>
            <tr><td>Nama</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['judul1']; ?></td></tr>
            <tr><td>Tanggal Iklan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['tgl_iklan1']; ?></td></tr>
            <tr><td>Keterangan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['keterangan1']; ?></td></tr>
            <tr><td>Alamat web</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['link_web1']; ?></td>
            </tr>
            <tr><td>Nama</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['judul2']; ?></td></tr>
            <tr><td>Tanggal Iklan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['tgl_iklan2']; ?></td></tr>
            <tr><td>Keterangan</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['keterangan2']; ?></td></tr>
            <tr><td>Alamat web</td><td>&nbsp;:&nbsp;</td>
            <td><?php echo $data['link_web2']; ?></td>
            </tr></table></div></div></div><br>
            
                <img style="height: 200px; width: 200px;" src="<?php echo "images/kend/".$data['img3'] ?>">
                <img style="height: 200px; width: 200px;" src="<?php echo "images/kend/".$data['img4'] ?>"> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="print_kend.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Print</a>
            <!-- <tr><td>
            </td></tr>
                <img style="height: 200px; width: 200px;" src="<?php echo "images/kend/".$data['img3'] ?>"> 
                <img style="height: 200px; width: 200px;" src="<?php echo "images/kend/".$data['img4'] ?>">
            </td></tr> -->
                
        
        <?php 
        }
        ?>
    </table>

                </div>

            </div><!-- .animated -->
        </div>
        <!-- .content -->


    </div><!-- /#right-panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>