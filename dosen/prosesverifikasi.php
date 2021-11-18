<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['nim'];
	$verifikasi = $_POST['options'];
	$nip=$_POST['nippb2'];
	$dsn=$_POST['nmdsn2'];
	$ulasan=$_POST['ulasan'];


	// jika menolak verifikasi, nilai dari nip null
	if($nip=="-Pilih-"){
		$sql="update tugasakhir set status_ta = '$verifikasi',nama_pb2='$dsn',ulasan='$ulasan' where nim_mhs= '$id'";
	} else{
		$sql="update tugasakhir set status_ta = '$verifikasi',nip_pb2='$nip',nama_pb2='$dsn',ulasan='$ulasan' where nim_mhs= '$id'";
	}

    
	
	

	//update
	$d=mysqli_query($koneksi, $sql);
    	// mengalihkan halaman kembali ke listmahasiswa.php
		header("location:indexdosen.php?pesan='berhasil'");
 ?>

