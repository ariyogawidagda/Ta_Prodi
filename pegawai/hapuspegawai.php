<?php 
	//koneksi ke database
	include '../koneksi.php';

	//menangkap data id yg dikirim di url
	$id = $_GET ['id'];

	//menghapus data dari database
	mysqli_query($koneksi, "delete from pegawai where nip_pegawai='$id'");

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listpegawai.php?pesan1='berhasil'");
 ?>