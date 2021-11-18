<div class="card-body">
<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>NO</th>
                                        <th>Nim</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Prodi</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <!-- Menampilkan data dan pagination -->
                                    <?php
                                        include '../../koneksi.php';
                                        
                                        // langkah 1.menentukan batas,cek halamanan dan posisi data
                                        $batas=5;
                                        $halaman=@$_GET['halaman'];
                                                $mulai    =($halaman>1) ? ($halaman * $batas) - $batas : 0;
                                        if(empty($halaman)){
                                            $posisi=0;
                                            $halaman=1;
                                        }
                                        else{
                                            $posisi=($halaman-1)*$batas;
                                        }
                                        // langkah 2.Hitung total data  dan halamanan serta link 1,2,3
                                        $query2=mysqli_query($koneksi,"select * from mahasiswa");
                                        $jmlhdata=mysqli_num_rows($query2);
                                        $jmlhhalaman=ceil($jmlhdata/$batas);
                                        
                                        
                                        //langkah 3.sesuaikan query dengan batas dan posisi
                                        $keyword=$_GET['keyword'];
                                        $query=" select * from mahasiswa join prodi on  mahasiswa.kode_prodi = prodi.kode_prodi where
                                        mahasiswa.nim like '%$keyword%' or
                                        mahasiswa.namamhs like '%$keyword%' or
                                        mahasiswa.tempatlahir like '%$keyword%' or
                                        mahasiswa.tanggallahir like '%$keyword%' or
                                        mahasiswa.kelas like '%$keyword%' or
                                        mahasiswa.alamat like '%$keyword%' or
                                        mahasiswa.notelp like '%$keyword%' or
                                        mahasiswa.status like '%$keyword%' or
                                        prodi.nama_prodi like '%$keyword%' 
                                        LIMIT $posisi,$batas";
                                        
                                        $no=$mulai+1;
                                        $data=mysqli_query($koneksi,$query);
                                        while($d = mysqli_fetch_array($data)){
                                            ?>
                                        <tr>
                                            <Td><?php echo $no++ ?></Td>
                                            <Td><?php echo $d['nim']; ?></Td>
                                            <Td><?php echo $d['namamhs']; ?></Td>
                                            <Td><?php echo $d['tempatlahir']; ?></Td>
                                            <Td><?php echo $d['tanggallahir']; ?></Td>
                                            <Td><?php echo $d['kelas']; ?></Td>
                                            <Td><?php echo $d['alamat']; ?></Td>
                                            <Td><?php echo $d['notelp']; ?></Td>
                                            <Td><?php echo $d['email']; ?></Td>
                                            <Td><?php echo $d['status']; ?></Td>
                                            <Td><?php echo $d['nama_prodi']; ?></Td>
                                            <td>
				<a class="btn btn-success" onclick="return confirm('Apakah Yakin Untuk Edit Data?')" href="editmahasiswa.php?id=<?php echo $d['nim']; ?>"  >EDIT</a>
				<a  class="btn btn-danger" onclick="return confirm('Apakah Yakin Untuk Hapus Data?')" href="hapusmahasiswa.php?id=<?php echo $d['nim']; ?>">HAPUS</a>	
			</td>
                                            
                                        </tr>
                                        <?php
                                        }
                                            ?>
                                    </tbody>
                                        </table>
                                      </div>
            
                                     <?php   echo"<p> Total Anggota : <b>$jmlhdata</b> orang</p>"; ?>
                                            <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="listmahasiswa.php?halaman=<?php echo $halaman-1; ?>">Previous</a></li>
                                            <?php for($i=1; $i<=$jmlhhalaman; $i++){ 

                                             ?>
                                           
                                            <li class="page-item"><a class="page-link" href="listmahasiswa.php?halaman=<?php echo $i; ?>"><?php echo"".$i; ?></a></li>
                                           
                                      
                                        <?php   } ?>
                                                            
                                        <li class="page-item"><a class="page-link" href="listmahasiswa.php?halaman=<?php  echo $halaman+1; ?>">Next</a></li>
                                        </ul>
                                        </nav>   
                            
                              
                                
                            </div>
                                    </div>

                                <!-- Page level plugins -->
     <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>