<?php
	include ('koneksi.php');

	$id_semester = $_POST['id_semester'];
	$nama_semester = $_POST['nama_semester'];
	$jenis_semester = $_POST['jenis_semester'];

	$query = "UPDATE `semester` SET `nama_semester`='$nama_semester', `jenis_semester`='$jenis_semester' where `id_semester`='$id_semester'";
	$hasil = mysqli_query ($koneksi,$query);

	if(!$hasil)
		die("Pengubahan gagal!!!");

	include('semester_tampil.php');
?>