<?php
include("../koneksi.php");

$nama=$_POST['namadsn'];
$nip=$_POST['nip'];
$tmptlhr=$_POST['tempatlahir'];
 $tgllhr=$_POST['datelahir'];
$alamat=$_POST['alamat'];
$notelp=$_POST['notelp'];
$email=$_POST['email'];
$kdprodi=$_POST['kodeprodii'];



$query=" select * from dosen where nip ='$nip'";

$data=mysqli_query($koneksi,$query); 

$d = mysqli_fetch_array($data);



?>

<?php if($d > 0) {?>

<?php header("location:listdosen.php?psndsn='gagal'"); } elseif($kdprodi!=="") { ?>

<?php //input data ke database
$query1="INSERT INTO `dosen` (`nip`, `namadosen`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `notelp`, `kode_prodi`) VALUES ('$nip', '$nama', '$tmptlhr', '$tgllhr', '$alamat', '$email', '$notelp', '$kdprodi')";
$hasil=mysqli_query($koneksi,$query1);

header("location:listdosen.php?psndsnn='berhasil'"); } elseif($kdprodi=="") {
    
    $query2="INSERT INTO `dosen` (`nip`, `namadosen`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `notelp`) VALUES ('$nip', '$nama', '$tmptlhr', '$tgllhr', '$alamat', '$email', '$notelp')";
$hasil2=mysqli_query($koneksi,$query2);

    ?>

<?php header("location:listdosen.php?psndsnn='berhasil'"); } ?>