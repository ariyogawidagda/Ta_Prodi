<div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="user">Username</label>
                    <div class="col-sm-10">
                    <select class="form-control"  name="user" id="user"  required>
                    <option>-Pilih-</option>

                    <?php 
                    include '../../koneksi.php';
                    $status=$_GET['keyword'];

                    // menampilkan username berdasar status
                    if($status=="1") {
                    $mhs= mysqli_query($koneksi,"select * from mahasiswa where id_level !='1' ");
                    
                    while($row= mysqli_fetch_array($mhs)){
                        echo "<option value='$row[nim]'> $row[nim] </option>";
        
                    } }  if($status=="2") {
                    $mhs= mysqli_query($koneksi,"select * from dosen where id_level !='2'");
                    
                    while($row= mysqli_fetch_array($mhs)){
                        echo "<option value='$row[nip]'> $row[nip] </option>";
        
                    }  } if($status=="3") {
                    $mhs= mysqli_query($koneksi,"select * from pegawai where id_level !='3'");
                    
                    while($row= mysqli_fetch_array($mhs)){
                        echo "<option value='$row[nip_pegawai]'> $row[nip_pegawai] </option>";
        
                    }  }


                    ?>
                    </select>
                            </div>
                </div>