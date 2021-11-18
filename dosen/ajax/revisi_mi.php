


<Td>Nim Mahasiswa</Td>
        <td><select name="nim" id="nim_mhs" >

    <option value=""> -Pilih- </option>
    <?php
    include '../../koneksi.php';
    $pilih = $_GET['pilih'];
   

    // untuk menampilkan nim sesuai dengan status ta
                       
                        
 $dtmhs= mysqli_query($koneksi,"select * from tugasakhir,mahasiswa where tugasakhir.status_ta ='$pilih' and mahasiswa.kode_prodi = '001' and tugasakhir.nim_mhs = mahasiswa.nim ");

                        
    

    while($row= mysqli_fetch_array($dtmhs)){
    echo "<option value='$row[nim_mhs]'> $row[nim_mhs] </option>";
 
}  
?></select></td> 




