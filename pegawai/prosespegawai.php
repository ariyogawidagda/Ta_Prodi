<?php
include("../koneksi.php");

$nama=$_POST['namapgw'];
$nip=$_POST['nip'];
$tmptlhr=$_POST['tempatlahir'];
 $tgllhr=$_POST['datelahir'];
$alamat=$_POST['alamat'];
$notelp=$_POST['notelp'];
$email=$_POST['email'];

$query=" select * from pegawai where nip_pegawai ='$nip'";

$data=mysqli_query($koneksi,$query); 

$d = mysqli_fetch_array($data);



?>

<?php if($d > 0) {?>

<?php header("location:listpegawai.php?psnpgw='gagal'"); } else { ?>

<?php //input data ke database
$hasil=mysqli_query($koneksi,"insert into pegawai (`nip_pegawai`, `nama_pegawai`, `tempatlahir_pegawai`, `tanggallahir_pegawai`, `alamat_pegawai`, `telepon_pegawai`, `email_pegawai`) values ('$nip', '$nama', '$tmptlhr', '$tgllhr', '$alamat', '$notelp', '$email')");



header("location:listpegawai.php?psnpgww='berhasil'"); } ?>