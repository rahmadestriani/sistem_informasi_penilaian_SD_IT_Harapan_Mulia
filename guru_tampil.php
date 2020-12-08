<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Penilaian</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar px-4 py-2 bg-tua shadow"><a href="tu.html" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="o-exit-1 fa-align-center"></i></a><b class="navbar-brand font-weight-bold text-uppercase text-center ">Data Guru</b>
        <img src="img/lambang.png" width="40">
      </nav>
    </header>
    
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container">
          <div class="card-body">
                    <table class="table card-text">
                      <thead>
                        <tr>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include_once ("koneksi.php");

                        $query = "SELECT * FROM guru";
                        $hasil = mysqli_query ($koneksi,$query);

                        if (!$hasil)
                          die ("Permintaan gagal!!!");

                        while ($guru=mysqli_fetch_array($hasil))
                        {
                        ?>
                        <tr>
                          <td>
                            <a href="guru_ubah.php?NIP=<?php echo $guru['NIP'];?>">
                              <?php echo $guru['NIP']; ?>
                            </a>
                          </td>
                          <td>
                            <?php echo $guru['nama_guru']; ?>
                          </td>
                          <td>
                            <?php echo $guru['alamat']; ?>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <div>
                    <center>
                    <a href="guru_form.php" class="btn btn-lg btn-success">TAMBAH</a>
                    </center>
                  </div>
            </div>
          </div>
        </body>
        <footer class="footer bg-tua shadow align-self-end py-5 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 text-center text-md-left text-white">
                <p class="mb-2 mb-md-0">Jalan Dr. Wahidin No.03 Kec. Bukit Kecil</p>
                <p class="mb-2 mb-md-0">0711 358239</p>
              </div>
              <div class="col-md-4 text-center text-md-center text-white">
                <img align="center" src="img/logo.png" width="300">
              </div>
              <div class="col-md-4 text-center text-md-right text-gray-400">
                <img src="img/logo_ig.png" width="25">
                <img src="img/logo_twitter.png" width="25">
                <img src="img/logo_fb.png" width="25">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
        <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>