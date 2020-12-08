<?php
	include_once ('koneksi.php');

	$id_nilai = $_POST['id_nilai'];
	$NIS = $_POST['NIS'];
	$id_mapel = M002;
	$uh1 = $_POST['uh1'];
	$uh2 = $_POST['uh2'];
	$uh3 = $_POST ['uh3'];
	$uh4 = $_POST ['uh4'];
	$uts = $_POST ['uts'];
	$uas = $_POST ['uas'];
	$jumlah_nilai = $uh1 + $uh2 + $uh3 + $uh4 + $uts +$uas;
	$rata_rata = $jumlah_nilai/6;

	$query = "INSERT INTO `nilai1` (`id_nilai`,`NIS`,`id_mapel`,`uh1`,`uh2`,`uh3`,`uh4`,`uts`,`uas`,`jumlah_nilai`,`rata_rata`) VALUES ('$id_nilai','$NIS','$id_mapel','$uh1','$uh2','$uh3','$uh4','$uts','$uas','$jumlah_nilai','$rata_rata')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: nilai_2_tampil.php");
?>