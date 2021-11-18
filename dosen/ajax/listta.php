<div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>NO</th>
                                        <th>Nim</th>
                                        <th>Nama Mahassiwa</th>
                                        <th>Nama Prodi</th>
                                        <th>Abstract</th>
                                        <th>Paper</th>
                                        <th>Tahun Ajaran</th>
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
                                        $query2=mysqli_query($koneksi,"select * from tugasakhir");
                                        $jmlhdata=mysqli_num_rows($query2);
                                        $jmlhhalaman=ceil($jmlhdata/$batas);
                                        
                                        
                                        //langkah 3.sesuaikan query dengan batas dan posisi
                                        // mengambil nilai dari keyword
                                        $keyword = $_GET["keyword"];
                                        $query=" select * from tugasakhir join mahasiswa on tugasakhir.nim_mhs = mahasiswa.nim
                                        join prodi on mahasiswa.kode_prodi = prodi.kode_prodi
                                        join up_abstract on tugasakhir.id_ta = up_abstract.tgs_id
                                        join up_paper on tugasakhir.id_ta = up_paper.tgs_id_paper
                                        where tugasakhir.status_ta='lulus' and
                                        tugasakhir.nim_mhs like '%$keyword%'or
                                        mahasiswa.namamhs like '%$keyword%' or
                                        tugasakhir.tanggal_daftar like '%$keyword%'  or
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
                                        <Td><?php echo $d['nama_prodi']; ?></Td>
                                        <Td><a href="../mahasiswa/view_abstract.php?id=<?php echo $d['id_ta']; ?>" target="_blank"><?php echo $d['nama_file']; ?></a></Td> 
                                         <Td><a href="../mahasiswa/view_paper.php?id=<?php echo $d['id_ta']; ?>" target="_blank"><?php echo $d['nama_file_paper']; ?></a></Td>
                                         <Td><?php echo $date=date($d['tanggal_daftar']); ?></Td>
                                            
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
                                            <li class="page-item"><a class="page-link" href="listta.php?halaman=<?php echo $halaman-1; ?>">Previous</a></li>
                                            <?php for($i=1; $i<=$jmlhhalaman; $i++){ 

                                             ?>
                                           
                                            <li class="page-item"><a class="page-link" href="listta.php?halaman=<?php echo $i; ?>"><?php echo"".$i; ?></a></li>
                                           
                                      
                                        <?php   } ?>
                                                            
                                        <li class="page-item"><a class="page-link" href="listta.php?halaman=<?php  echo $halaman+1; ?>">Next</a></li>
                                        </ul>
                                        </nav>        
                                      
                        </div>
                    </div>