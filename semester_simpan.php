<?php
	include_once ('koneksi.php');

	$id_semester = $_POST['id_semester'];
	$nama_semester = $_POST['nama_semester'];
	$jenis_semester = $_POST['jenis_semester'];

	$query = "INSERT INTO `semester` (`id_semester`,`nama_semester`,`jenis_semester`) VALUES ('$id_semester','$nama_semester','$jenis_semester')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: semester_tampil.php");
?>