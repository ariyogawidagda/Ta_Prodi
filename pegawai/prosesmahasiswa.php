<?php
include '../koneksi.php';

$nama=$_POST['namamhs'];
$nim=$_POST['nim'];
$tmptlhr=$_POST['tempatlahir'];
 $tgllhr=$_POST['datelahir'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];
$notelp=$_POST['notelp'];
$email=$_POST['email'];
$kode=$_POST['kodeprodii'];
$status='On Going';



		include '../koneksi.php';
		$id = $_POST['nim'];
		$data = mysqli_query($koneksi, "select * from mahasiswa where  nim='$nim'");
		$d= mysqli_fetch_array($data);
		



?>

<!-- input database -->
<?php if($d > 0) {?>

<?php header("location:listmahasiswa.php?psn='gagal'"); } else {?>

<?php $hasil=mysqli_query($koneksi,"INSERT INTO `mahasiswa` (`nim`, `namamhs`, `tempatlahir`, `tanggallahir`, `kelas`, `alamat`, `notelp`, `email`, `status`, `kode_prodi`) VALUES ('$nim', '$nama', '$tmptlhr', '$tgllhr', '$kelas', '$alamat', '$notelp', '$email', '$status', '$kode')");

header("location:listmahasiswa.php?psnn='berhasil'"); }?>