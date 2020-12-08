<?php
	include_once ('koneksi.php');

	$id_rapor= $_POST['id_rapor'];
	$NIS = $_POST['NIS'];
	$id_kelas = 'K001';
	$id_semester = $_POST['id_semester'];
	$tahun_pelajaran = $_POST['tahun_pelajaran'];


	$query = "INSERT INTO `rapor1` (`id_rapor`, `NIS`,`id_kelas`,`id_semester`, `tahun_pelajaran`) VALUES ('$id_rapor','$NIS','$id_kelas','$id_semester', '$tahun_pelajaran')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: cetak_tampil.php?NIS=$NIS");
?>