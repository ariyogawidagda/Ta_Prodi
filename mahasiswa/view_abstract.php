<?php 

include '../koneksi.php';
$id=$_GET['id'];
$data1=mysqli_query($koneksi,"select * from up_abstract where tgs_id ='$id'");
$cek1=mysqli_fetch_array($data1);
$file=$cek1['file'];




 header('Content-Type: '.$cek1['tipe_file'] );
echo $file; 



?>
