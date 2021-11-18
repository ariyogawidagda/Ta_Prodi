
<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['kodeprodi'];
	$nama = $_POST['namaprodi'];


	//update
	mysqli_query($koneksi, "update prodi set nama_prodi ='$nama' where kode_prodi= '$id'");

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listprodi.php?pesan='berhasil'");
 ?>