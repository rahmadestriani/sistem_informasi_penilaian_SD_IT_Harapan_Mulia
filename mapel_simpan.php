<?php
	include_once ('koneksi.php');

	$id_mapel = $_POST['id_mapel'];
	$nama_mapel = $_POST['nama_mapel'];

	$query = "INSERT INTO `mata_pelajaran` (`id_mapel`,`nama_mapel`) VALUES ('$id_mapel','$nama_mapel')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: mapel_tampil.php");
?>