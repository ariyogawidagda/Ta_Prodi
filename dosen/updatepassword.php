<?php 
session_start();

$user=$_SESSION['username'];
$pass=$_POST['password'];

include '../koneksi.php';
$query="update login set password ='$pass' where username='$user'";
mysqli_query($koneksi,$query);
header("location:indexdosen.php?pw='berhasil'");
?>