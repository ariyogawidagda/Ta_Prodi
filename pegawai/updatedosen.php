
<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['nip'];
	$nama = $_POST['namadsn'];
	$alamat = $_POST['alamat'];
    $tempat = $_POST['tempatlahir'];
    $tanggal = $_POST['datelahir'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['notelp'];
    $email = $_POST['email'];
	$kdprodi=$_POST['kodeprodii'];

	//update
if($kdprodi==""){
	mysqli_query($koneksi, "update dosen set namadosen = '$nama', tempat_lahir='$tempat', tanggal_lahir='$tanggal',alamat='$alamat',email='$email',notelp='$telp' where nip= '$id'");
} else{
	mysqli_query($koneksi, "update dosen set namadosen = '$nama', tempat_lahir='$tempat', tanggal_lahir='$tanggal',alamat='$alamat',email='$email',notelp='$telp',kode_prodi='$kdprodi' where nip= '$id'");
}
	
	

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listdosen.php?pesan='berhasil'");
 ?>
