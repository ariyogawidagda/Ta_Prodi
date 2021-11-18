<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		
	//mengaktifkan session
	session_start();
	
	//koneksi database
	include "koneksi.php";
	
	//mengambil nilai dari form
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//memilih data admin di database
	$data=mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
	$cek=mysqli_fetch_array($data);
	if($cek['level']==1){
		$_SESSION['username']=$username;
		$_SESSION['status']="mahasiswa";
		header("location:login.php?pesan=mahasiswa");
		
	}
    else if($cek['level']==2){
		$_SESSION['username']=$username;
		$_SESSION['status']="dosen";
		header("location:login.php?pesan=dosen");
		
	}
	else if($cek['level']==3){
		$_SESSION['username']=$username;
		$_SESSION['status']="pegawai";
		header("location:login.php?pesan=pegawai");
		
	}
	else{
		header("location:login.php?pesan=gagal");
	}
	?>
</body>
</html>