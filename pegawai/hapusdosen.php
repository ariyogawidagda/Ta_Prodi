<?php 
	//koneksi ke database
	include '../koneksi.php';

	//menangkap data id yg dikirim di url
	$id = $_GET ['id'];

	//menghapus data dari database
	mysqli_query($koneksi, "delete from dosen where nip='$id'");

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listdosen.php?pesan1='berhasil'");
 ?>