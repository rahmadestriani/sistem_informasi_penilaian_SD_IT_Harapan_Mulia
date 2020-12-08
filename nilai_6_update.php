<?php
	include ('koneksi.php');

	$id_nilai = $_POST['id_nilai'];
	$NIS = $_POST['NIS'];
	$uh1 = $_POST['uh1'];
	$uh2 = $_POST['uh2'];
	$uh3 = $_POST ['uh3'];
	$uh4 = $_POST ['uh4'];
	$uts = $_POST ['uts'];
	$uas = $_POST ['uas'];
	$jumlah_nilai = $uh1 + $uh2 + $uh3 + $uh4 + $uts +$uas;
	$rata_rata = $jumlah_nilai/6;

	$query = "UPDATE `nilai1` SET `NIS`='$NIS',`uh1`='$uh1',`uh2`='$uh2',`uh3`='$uh3',`uh4`='$uh4',`uts`='$uts',`uas`='$uas',`jumlah_nilai`='$jumlah_nilai',`rata_rata`='$rata_rata' where `id_nilai`='$id_nilai'";
	$hasil = mysqli_query ($koneksi,$query);

	if(!$hasil)
		die("Pengubahan gagal!!!");

	include('nilai_6_tampil.php');
?>