<div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>NO</th>
                                        <th>Nip</th>
                                        <th>Nama Dosen</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
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
                                        $query2=mysqli_query($koneksi,"select * from pegawai");
                                        $jmlhdata=mysqli_num_rows($query2);
                                        $jmlhhalaman=ceil($jmlhdata/$batas);
                                        
                                        
                                        //langkah 3.sesuaikan query dengan batas dan posisi
                                        $keyword=$_GET['keyword'];
                                        $query=" select * from pegawai where nip_pegawai like '%$keyword%'or
                                        nama_pegawai like '%$keyword%'or 
                                        tempatlahir_pegawai like '%$keyword%'or
                                        tanggallahir_pegawai like '%$keyword%'or
                                        alamat_pegawai like '%$keyword%'or
                                        telepon_pegawai like '%$keyword%'or
                                        email_pegawai like '%$keyword%'
                                        LIMIT $posisi,$batas";

                                        $no=$mulai+1;
                                        $data=mysqli_query($koneksi,$query);
                                        while($d = mysqli_fetch_array($data)){
                                            ?>
                                        <tr>
                                        <Td><?php echo $no++ ?></Td>
                                        <Td><?php echo $d['nip_pegawai']; ?></Td>
                                        <Td><?php echo $d['nama_pegawai']; ?></Td>
                                        <Td><?php echo $d['tempatlahir_pegawai']; ?></Td>
                                        <Td><?php echo $d['tanggallahir_pegawai']; ?></Td>
                                        <Td><?php echo $d['alamat_pegawai']; ?></Td>
                                        <Td><?php echo $d['telepon_pegawai']; ?></Td>
                                        <Td><?php echo $d['email_pegawai']; ?></Td>
                                                                        
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
                                            <li class="page-item"><a class="page-link" href="listpegawai.php?halaman=<?php echo $halaman-1; ?>">Previous</a></li>
                                            <?php for($i=1; $i<=$jmlhhalaman; $i++){ 

                                             ?>
                                           
                                            <li class="page-item"><a class="page-link" href="listpegawai.php?halaman=<?php echo $i; ?>"><?php echo"".$i; ?></a></li>
                                           
                                      
                                        <?php   } ?>
                                                            
                                        <li class="page-item"><a class="page-link" href="listpegawai.php?halaman=<?php  echo $halaman+1; ?>">Next</a></li>
                                        </ul>
                                        </nav>        
                                      
                                                                            
                                 
                            
                              
                                
                            </div>
                        </div>