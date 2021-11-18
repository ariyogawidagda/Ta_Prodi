<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['nim'];
	$judul = $_POST['ta'];
	$verifikasi="belum verifikasi";


		$sql= "update tugasakhir set judul = '$judul',status_ta='$verifikasi'  where nim_mhs= '$id'";


    
	
	

	//update
	$d=mysqli_query($koneksi, $sql);
    
    	// mengalihkan halaman kembali ke listmahasiswa.php
        header("location:statusta.php?pesanup='berhasil'");

	
 ?>

