<!doctype html>
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
        <script type='text/javascript'>
    function preview_image(event) 
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('output_image');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
    function preview_image1(event) 
    {
     var reader1 = new FileReader();
     reader1.onload = function()
     {
      var output1 = document.getElementById('output_image1');
      output1.src = reader1.result;
     }
     reader1.readAsDataURL(event.target.files[0]);
    }
    function preview_image2(event) 
    {
     var reader2 = new FileReader();
     reader2.onload = function()
     {
      var output2 = document.getElementById('output_image2');
      output2.src = reader2.result;
     }
     reader2.readAsDataURL(event.target.files[0]);
    }
    function preview_image3(event) 
    {
     var reader3 = new FileReader();
     reader3.onload = function()
     {
      var output3 = document.getElementById('output_image3');
      output3.src = reader3.result;
     }
     reader3.readAsDataURL(event.target.files[0]);
    }
    </script>
    <style>

    #wrapper
    {
     text-align:center;
     margin:0 auto;
     padding:0px;
     width:995px;
    }
    #output_image
    {
     max-width:150px;
    }
    #output_image1
    {
     max-width:150px;
    }
    #output_image2
    {
     max-width:150px;
    }
    #output_image3
    {
     max-width:150px;
    }
    </style>
</head>
</head>

<body>
    <?php 
    
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php");

    }
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
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
<!--                <div id="chartContainer" style="height: 400px; width: 50%;"></div>
                    <div id="chartContainer2" style="height: 400px; width: 50%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
                    <form method="post" action="upload_kend.php" enctype="multipart/form-data">
                    <table>
                    <tr><td>Judul</td>
                            <td>
                                <!-- <input type="hidden" name="id" value=""> -->
                                <input type="text" name="judul_k">
                            </td><tr>
                    <tr>
                        <td>

                    <table>
                        <tr>
                            <tr><td>Data 1</td></tr>
                            <td>
                                <input type="file" name="img1_k" onchange="preview_image(event)">
                                <br><img id="output_image"/>
                            </td>
                             </tr>
                        <tr>
                            <td>
                                <input type="file" name="img2_k" onchange="preview_image1(event)">
                                <br><img id="output_image1"/>
                            </td>
                        </tr>
                        <tr>
                            <tr><td>Data 2</td></tr>
                            <td>
                                <input type="file" name="img3_k" onchange="preview_image2(event)">
                                <br><img id="output_image2"/>
                            </td>
                             </tr>
                        <tr>
                            <td>
                                <input type="file" name="img4_k" onchange="preview_image3(event)">
                                <br><img id="output_image3"/>
                            </td>
                        </tr>
                    </table></td>
                    <td>
                        <table>
                        <tr>
                            <td>Data 1</td></tr><tr>
                            <td>Nama</td>
                            <td>
                                <!-- <input type="hidden" name="id" value=""> -->
                                <input type="text" name="judul1_k">
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="keterangan1_k" style="width: 150%"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Iklan</td>
                            <td><input type="date" name="tgl1_k"></td>
                        </tr>
                        <tr>
                            <td>Alamat Web</td>
                            <td><input type="text" name="link1_k"></td>
                        </tr>
                        <tr>
                            <td>Data 2</td></tr><tr>
                            <td>Nama</td>
                            <td>
                                <!-- <input type="hidden" name="id" value=""> -->
                                <input type="text" name="judul2_k">
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="keterangan2_k" style="width: 150%"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Iklan</td>
                            <td><input type="date" name="tgl2_k"></td>
                        </tr>
                        <tr>
                            <td>Link Web</td>
                            <td><input type="text" name="link2_k"></td>
                        </tr>
                    </table></td></tr></table>
                    <br><input type="submit" value="Submit" name="upload_k"> 
                    </form>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


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
</body>
</html>
