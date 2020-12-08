<?php
	include_once ('koneksi.php');

	$NIP = $_POST['NIP'];
	$nama_guru = $_POST['nama_guru'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO `guru` (`NIP`,`nama_guru`,`alamat`) VALUES ('$NIP','$nama_guru','$alamat')";
	$hasil = mysqli_query ($koneksi,$query);

	if (!$hasil)
		die("Penyimpanan gagal!!!");

	header("Location: guru_tampil.php");
?>