<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index Pegawai</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    
     <!-- menampilkan notif -->
     <?php if(isset($_GET['psnn'])=="berhasil") {?>
        <script>

            alert(" Data Berhasil Di Tambah!");
        </script>
        <?php } elseif(isset($_GET['psn'])=="gagal") {?>
            <script>

                alert("Data Gagal Di Tambah!");
            </script>
            <?php } elseif(isset($_GET['pesan'])=="berhasil") {?>
                <script>

                alert("Data Berhasil Di Update!");
            </script>
            <?php }  elseif(isset($_GET['pesanrpl'])=="gagal") {?>
                <script>

                alert("Bukan Kaprodi D4 TRPL!");
            </script>
            <?php }  elseif(isset($_GET['pesan1'])=="berhasil") {?>
                <script>

                alert("Data Berhasil Di Hapus!");
            </script>
            <?php } ?>
    <!-- Mengambil nilai database berdasarkan session -->
    <?php 
    session_start();

    $user=$_SESSION['username'];

    include('../koneksi.php');

    $data=mysqli_query($koneksi,"select * from pegawai where nip_pegawai='$user'");
    $cek=mysqli_fetch_array($data);
    
    ?>

    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Jurusan Teknik Elektro <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="indexpegawai.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="listmahasiswa.php">Mahasiswa</a>
                        <a class="collapse-item" href="listdosen.php">Dosen</a>
                        <a class="collapse-item" href="listpegawai.php">Pegawai</a>
                        <a class="collapse-item" href="listprodi.php">Prodi</a>
                        <a class="collapse-item" href="listtugasakhir.php">Tugas Akhir</a>
                        <a class="collapse-item" href="daftar.php">Daftar</a>
                    </div>
                </div>
            </li>

                   <!-- Divider -->
                   <hr class="sidebar-divider">


           
     



 

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5><?php  echo"".$cek['nama_pegawai']?></h5></span>
                              
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="editpassword.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  

                     <!-- Page Heading -->
                     <h1 class="h3 mb-4 text-gray-800">List Mahasiswa</h1>

                            <!-- Tabel -->
                            <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                               
                            <a  class="btn btn-primary" onclick="return confirm('Apakah Yakin Untuk Tambah Data?')" href="tambahmahasiswa.php">Tambah</a>
                            
                            </div>
                            <div class="card-header py-3">
                                                <!-- untuk menampilkan data berdasarkan ketikan yang kita tulis -->
                            <form action="">
                            <input type="text" placeholder="masukkan keyword pencarian.." size="40" id="keyword_mhs">
                            </form>
                        </div>
                            <div id="container_mhs">
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
                                            <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <!-- Menampilkan data dan pagination -->
                                        <?php
                                            include '../koneksi.php';
                                            
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
                                            $query=" select * from mahasiswa,prodi where mahasiswa.kode_prodi = prodi.kode_prodi
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
				<a class="btn btn-danger" onclick="return confirm('Apakah Yakin Untuk Hapus Data?')" href="hapusmahasiswa.php?id=<?php echo $d['nim']; ?>">HAPUS</a>	
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
                            


                                        </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Jurusan Teknik Electro 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

     <!-- untuk ajax -->
     <script src="listmahasiswa.js"></script>

</body>

</html>