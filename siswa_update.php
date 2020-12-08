 <?php
	include ('koneksi.php');

	$NIS = $_POST['NIS'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];

	$query = "UPDATE `siswa` SET `nama_siswa`='$nama_siswa', `jenis_kelamin`='$jenis_kelamin', `tgl_lahir`='$tgl_lahir' where `NIS`='$NIS'";
	$hasil = mysqli_query ($koneksi,$query);

	if(!$hasil)
		die("Pengubahan gagal!!!");

	include('siswa_tampil.php');
?>