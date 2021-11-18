
<!-- Menampilkan nim berdasarkan kelas -->
<?php
$kelass=$_GET['kelas'];
if($kelass!=="Pilih"){


?>
<Td>Nim Mahasiswa</Td>
        <td><select name="nim" id="nim_mhs" >

    <option value=""> -Pilih- </option>
    <?php
    include '../../koneksi.php';
    $kelas = $_GET['kelas'];
    $dtmhs= mysqli_query($koneksi,"select * from tugasakhir,mahasiswa where tugasakhir.status_ta ='belum verifikasi' and mahasiswa.kode_prodi = '004' and tugasakhir.nim_mhs = mahasiswa.nim and mahasiswa.kelas = '$kelas'");

    while($row= mysqli_fetch_array($dtmhs)){
    echo "<option value='$row[nim_mhs]'> $row[nim_mhs] </option>";
 
}  
?></select></td>
<?php } ?>

<!-- untuk menampilkan nim ketika combobox kelas dipilih "pilih" -->
<?php if($kelass=="Pilih"){ ?>
<Td>Nim Mahasiswa</Td>
        <td><select name="nim" id="nim_mhs_tl" >

    <option value=""> -Pilih- </option>
    <?php
    include '../../koneksi.php';
    $kelas = $_GET['kelas'];
    $dtmhs= mysqli_query($koneksi,"select * from tugasakhir,mahasiswa where tugasakhir.status_ta ='belum verifikasi' and mahasiswa.kode_prodi = '004' and tugasakhir.nim_mhs = mahasiswa.nim");

    while($row= mysqli_fetch_array($dtmhs)){
    echo "<option value='$row[nim_mhs]'> $row[nim_mhs] </option>";
 
}  
?></select></td>

<?php } ?>