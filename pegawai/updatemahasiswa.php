
<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['nim'];
	$nama = $_POST['namamhs'];
    $tempat = $_POST['tempatlahir'];
    $tanggal = $_POST['datelahir'];
    $namaprodi = $_POST['kodeprodii'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['notelp'];
    $email = $_POST['email'];
	$status=$_POST['options'];


	//update
	mysqli_query($koneksi, "update mahasiswa set namamhs ='$nama',tempatlahir ='$tempat',tanggallahir ='$tanggal',kelas ='$kelas',alamat ='$alamat',notelp ='$telp',email ='$email',status = '$status',kode_prodi ='$namaprodi' where nim= '$id'");

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listmahasiswa.php?pesan='berhasil'");
 ?>