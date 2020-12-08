<?php
	include_once ('koneksi.php');

	$NIS = $_POST['NIS'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];

	$query = "INSERT INTO `siswa` (`NIS`,`nama_siswa`,`jenis_kelamin`,`tgl_lahir`) VALUES ('$NIS','$nama_siswa','$jenis_kelamin','$tgl_lahir')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: siswa_tampil.php");
?>