<?php
	include ('koneksi.php');

	$id_mapel = $_POST['id_mapel'];
	$nama_mapel = $_POST['nama_mapel'];

	$query = "UPDATE `mata_pelajaran` SET `nama_mapel`='$nama_mapel' where `id_mapel`='$id_mapel'";
	$hasil = mysqli_query ($koneksi,$query);

	if(!$hasil)
		die("Pengubahan gagal!!!");

	include('mapel_tampil.php');
?>