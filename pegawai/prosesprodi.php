<?php
include("../koneksi.php");

$nama=$_POST['namaprodi'];
$kode=$_POST['kodeprodi'];


$query=" select * from prodi where kode_prodi ='$kode'";

$data=mysqli_query($koneksi,$query); 

$d = mysqli_fetch_array($data);



?>

<?php if($d > 0) {?>

<?php header("location:listprodi.php?psnprodi='gagal'"); } else { ?>

<?php //input data ke database
$hasil=mysqli_query($koneksi,"insert into  prodi (kode_prodi,nama_prodi) VALUES ('$kode', '$nama')");

header("location:listprodi.php?psnprodii='berhasil'"); } ?>