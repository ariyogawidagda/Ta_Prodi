


<Td>Nim Mahasiswa</Td>
        <td><select name="nim" id="nim_mhs" >

    <option value=""> -Pilih- </option>
    <?php
    include '../../koneksi.php';
    $sidang = $_GET['sidang'];

    // untuk menampilkan nim sesuai dengan status ta
   
                       
    $dtmhs= mysqli_query($koneksi,"select * from tugasakhir,mahasiswa where tugasakhir.status_ta ='$sidang' and mahasiswa.kode_prodi = '003' and tugasakhir.nim_mhs = mahasiswa.nim ");

                        
    

    while($row= mysqli_fetch_array($dtmhs)){
    echo "<option value='$row[nim_mhs]'> $row[nim_mhs] </option>";
 
}  
?></select></td>


