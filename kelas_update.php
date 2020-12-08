<?php
	include ('koneksi.php');

	$id_kelas = $_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$jumlah_siswa = $_POST['jumlah_siswa'];
	$NIP = $_POST['NIP'];

	$query = "UPDATE `kelas` SET `nama_kelas`='$nama_kelas', `jumlah_siswa`='$jumlah_siswa', `NIP`='$NIP' where `id_kelas`='$id_kelas'";
	$hasil = mysqli_query ($koneksi,$query);

	if(!$hasil)
		die("Pengubahan gagal!!!");

	include('kelas_tampil.php');
?>