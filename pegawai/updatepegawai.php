
<?php 
	//koneksi ke db
	include '../koneksi.php';

	//menangkap data yang dikirim dari form
	$id = $_POST['nip'];
	$nama = $_POST['namapgw'];
	$alamat = $_POST['alamat'];
    $tempat = $_POST['tempatlahir'];
    $tanggal = $_POST['datelahir'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['notelp'];
    $email = $_POST['email'];

	//update
	mysqli_query($koneksi, "update pegawai set nama_pegawai = '$nama', tempatlahir_pegawai='$tempat', tanggallahir_pegawai='$tanggal',alamat_pegawai='$alamat',telepon_pegawai='$telp',email_pegawai='$email' where nip_pegawai= '$id'");

	//mengalihkan halaman kembali ke listmahasiswa.php
	header("location:listpegawai.php?pesan='berhasil'");
 ?>