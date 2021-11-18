<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['nim'];
	$verifikasi = $_POST['options'];
	
	$ulasan=$_POST['ulasan'];



		$sql="update tugasakhir set status_ta = '$verifikasi',ulasan='$ulasan' where nim_mhs= '$id'";
	

    
	
	

	//update
	$d=mysqli_query($koneksi, $sql);
    	// mengalihkan halaman kembali ke listmahasiswa.php
		header("location:indexdosen.php?pesan='berhasil'");
 ?>

