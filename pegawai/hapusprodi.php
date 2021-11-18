<?php 
	//koneksi ke database
	include '../koneksi.php';

	//menangkap data id yg dikirim di url
	$id = $_GET ['id'];

	//menghapus data dari database
	mysqli_query($koneksi, "delete from prodi where kode_prodi='$id'");

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listprodi.php?pesan1='berhasil'");
 ?>