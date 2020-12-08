<?php
  include_once ('koneksi.php');
  $NIS=$_GET['NIS'];

  $query = "SELECT siswa.NIS, siswa.nama_siswa, kelas.nama_kelas, semester.nama_semester, rapor1.tahun_pelajaran FROM rapor1 JOIN siswa ON rapor1.NIS = siswa.NIS JOIN kelas ON rapor1.id_kelas = kelas.id_kelas JOIN semester ON rapor1.id_semester = semester.id_semester where siswa.NIS = '$NIS'";

  $query2 = "SELECT mata_pelajaran.nama_mapel, nilai1.rata_rata FROM nilai1 INNER JOIN siswa ON nilai1.NIS = siswa.NIS INNER JOIN mata_pelajaran ON nilai1.id_mapel = mata_pelajaran.id_mapel where siswa.NIS = '$NIS'";

  $hasil = mysqli_query ($koneksi,$query);
  $hasil2 = mysqli_query ($koneksi,$query2);
?>

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
      <nav class="navbar px-4 py-2 bg-tua shadow"><a href="menu_guru.html" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="o-exit-1 fa-align-center"></i></a><b class="navbar-brand font-weight-bold text-uppercase text-center ">Data Rapor</b>
        <img src="img/lambang.png" width="40">
      </nav>
    </header>
    
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container">
          <div class="card-body">
            
            <?php
              while ($adm=mysqli_fetch_array($hasil)) {
            ?>

            <div>
            NIS : <?php echo $adm['NIS']; ?>
            </div>

            <div>
            Nama : <?php echo $adm['nama_siswa']; ?>
            </div>

            <div>
            Kelas : <?php echo $adm['nama_kelas']; ?>
            </div>

            <div>
            Semester : <?php echo $adm['nama_semester']; ?>
            </div>

            <div>
            Tahun Pelajaran : <?php echo $adm['tahun_pelajaran']; ?>
            </div>

            <?php } ?>

                    <br><br>
                    <table class="table card-text">
                      <thead>
                        <tr>
                          <th>Mata Pelajaran</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                          while ($nilai=mysqli_fetch_assoc($hasil2)) {
                        ?>

                        <tr>
                          <td>
                            <?php echo $nilai['nama_mapel']; ?>
                          </td>
                          <td>
                            <?php echo $nilai['rata_rata']; ?>
                          </td>

                        <?php } ?>

                        </tr>
                      </tbody>
                    </table>
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