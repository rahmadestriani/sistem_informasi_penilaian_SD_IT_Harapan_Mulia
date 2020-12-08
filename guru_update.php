<?php
	include ('koneksi.php');

	$NIP = $_POST['NIP'];
	$nama_guru = $_POST['nama_guru'];
	$alamat = $_POST['alamat'];

	$query = "UPDATE `guru` SET `nama_guru`='$nama_guru', `alamat`='$alamat' where `NIP`='$NIP'";
	$hasil = mysqli_query ($koneksi,$query);

	if(!$hasil)
		die("Pengubahan gagal!!!");

	include('guru_tampil.php');
?>