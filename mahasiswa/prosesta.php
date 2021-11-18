
<?php
    include("../koneksi.php");

    $nim=$_POST['nimmhs'];
    $namadsn1=$_POST['nmdsn1'];
    $namadsn2=$_POST['nmdsn2'];
    $tugasakhir=$_POST['tugasakhir'];
    $nipdsn1=$_POST['nippb1'];
    $nipdsn2=$_POST['nippb2'];
    $status="belum verifikasi";
    $date=date('Y-m-d');

    $query=" select * from tugasakhir where nim_mhs ='$nim'";

$data=mysqli_query($koneksi,$query); 

$d = mysqli_fetch_array($data);



?>

<!-- jika data ada akan muncul sebuah notif -->
<?php if($nim==$d['nim_mhs']){
    
?>
<?php header("location:formta.php?pesan1='gagal'"); } 
//  jika nim tidak ada maka data diinputkan
else {  
    mysqli_query($koneksi,"insert into tugasakhir(nim_mhs,nip_pb1,nama_pb1,judul,status_ta,tanggal_daftar) values('$nim','$nipdsn1','$namadsn1','$tugasakhir','$status','$date')");
    header("location:formta.php?pesan='berhasil'");?>


<?php 

    
   
}
    ?>


