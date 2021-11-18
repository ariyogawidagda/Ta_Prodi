<?php 

include '../koneksi.php';
$id=$_GET['id'];
$data1=mysqli_query($koneksi,"select * from up_paper where tgs_id_paper ='$id'");
$cek1=mysqli_fetch_array($data1);
$file=$cek1['file_paper'];




 header('Content-Type: '.$cek1['tipe_paper'] );
echo $file; 



?>
