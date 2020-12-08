<?php
	include_once ('koneksi.php');

	$id_kelas = $_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$jumlah_siswa = $_POST['jumlah_siswa'];
	$NIP = $_POST['NIP'];

	$query = "INSERT INTO `kelas` (`id_kelas`,`nama_kelas`,`jumlah_siswa`,`NIP`) VALUES ('$id_kelas','$nama_kelas','$jumlah_siswa','$NIP')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: kelas_tampil.php");
?>