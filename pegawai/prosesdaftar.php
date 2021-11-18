<?php 
include '../koneksi.php';

$user=$_POST['user'];
$pass=$_POST['password'];
$status=$_POST['status'];

// untuk insert database login
$query2="INSERT INTO `login` (`username`, `password`, `level`) VALUES ('$user', '$pass', '$status')";
// untuk update data id_level

if($status=="1"){
$query="update mahasiswa set id_level ='$status' where nim='$user'";
} else if($status=="2"){
    $query="update dosen set id_level ='$status' where nip='$user'";
    } else if($status=="3"){
        $query="update pegawai set id_level ='$status' where nip_pegawai='$user'";
        }
$hasil2=mysqli_query($koneksi,$query2);
mysqli_query($koneksi,$query);

 header("location:daftar.php?pesan='berhasil'");


?>