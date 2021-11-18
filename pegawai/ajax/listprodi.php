<div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>NO</th>
                                        <th>Kode Prodi</th>
                                        <th>Nama Prodi</th>
                                        <th>Nip Kaprodi</th>
                                        <th>Nama Kaprodi</th>
                                        <th>Opsi</th>
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
                                        $query2=mysqli_query($koneksi,"select * from prodi");
                                        $jmlhdata=mysqli_num_rows($query2);
                                        $jmlhhalaman=ceil($jmlhdata/$batas);
                                        
                                        
                                        //langkah 3.sesuaikan query dengan batas dan posisi
                                        $keyword=$_GET['keyword'];
                                        $query=" select * from prodi join dosen on prodi.kode_prodi = dosen.kode_prodi  where 
                                        prodi.kode_prodi like '%$keyword%' or
                                        prodi.nama_prodi like '%$keyword%' or
                                        dosen.nip like '%$keyword%' or
                                        dosen.namadosen like '%$keyword%' 
                                        order by prodi.kode_prodi asc LIMIT $posisi,$batas";

                                        $no=$mulai+1;
                                        $data=mysqli_query($koneksi,$query);
                                        while($d = mysqli_fetch_array($data)){
                                            ?>
                                        <tr>
                                        <Td><?php echo $no++ ?></Td>
                                        <Td><?php echo  $d['kode_prodi']; ?></Td>
                                        <Td><?php echo  $d['nama_prodi']; ?></Td>
                                        <Td><?php echo  $d['nip']; ?></Td>
                                        <Td><?php echo  $d['namadosen']; ?></Td>
                                        <td>
				<a class="btn btn-success" onclick="return confirm('Apakah Yakin Untuk Edit Data?')" href="editprodi.php?id=<?php echo $d['kode_prodi']; ?>"  >EDIT</a>
				<a class="btn btn-danger" onclick="return confirm('Apakah Yakin Untuk Hapus Data?')" href="hapusprodi.php?id=<?php echo $d['kode_prodi']; ?>">HAPUS</a>	
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
                                            <li class="page-item"><a class="page-link" href="listprodi.php?halaman=<?php echo $halaman-1; ?>">Previous</a></li>
                                            <?php for($i=1; $i<=$jmlhhalaman; $i++){ 

                                             ?>
                                           
                                            <li class="page-item"><a class="page-link" href="listprodi.php?halaman=<?php echo $i; ?>"><?php echo"".$i; ?></a></li>
                                           
                                      
                                        <?php   } ?>
                                                            
                                        <li class="page-item"><a class="page-link" href="listprodi.php?halaman=<?php  echo $halaman+1; ?>">Next</a></li>
                                        </ul>
                                        </nav>        
                                    
                                    
                                
                                    
                                    
                                    </div>
                            </div>
                            