<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List Tugas Akhir</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Mengambil nilai database berdasarkan session -->
    <?php 
    session_start();

    $user=$_SESSION['username'];

    include('../koneksi.php');

    $data=mysqli_query($koneksi,"select * from dosen where nip='$user'");
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
                <a class="nav-link" href="indexdosen.php">
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
                    </div>
                </div>
            </li>

          <!-- Divider -->
          <hr class="sidebar-divider">


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Verifikasi</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="formvf_mi.php">Verifikasi D3 MI</a>
            <a class="collapse-item" href="formvf_tl.php">Verifikasi D3 TL</a>
            <a class="collapse-item" href="formvf_rpl.php">Verifikasi D4 TRPL</a>
            <a class="collapse-item" href="formvf_to.php">Verifikasi D4 TO</a>
            
        </div>
    </div>
</li>

            <!-- Divider -->
            <hr class="sidebar-divider">




            <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Sidang</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="formrevisi_mi.php">Sidang D3 MI</a>
            <a class="collapse-item" href="formrevisi_tl.php">Sidang D3 TL</a>
            <a class="collapse-item" href="formrevisi_rpl.php">Sidang D4 TRPL</a>
            <a class="collapse-item" href="formrevisi_to.php">Sidang D4 TO</a>
        
        </div>
    </div>
</li>

     



 

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5><?php  echo"".$cek['namadosen']?></h5></span>
                              
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
                    
                    <h1 class="h3 mb-4 text-gray-800">List Tugas Akhir</h1>

                      <!-- Tabel -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                                            <!-- untuk menampilkan data berdasarkan ketikan yang kita tulis -->
                    <form action="">
                        <input type="text" placeholder="masukkan keyword pencarian.." size="40" id="keyword_ta">
                        </form>
                        </div>
                        <div id="container_ta">
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
                                        $query2=mysqli_query($koneksi,"select * from tugasakhir");
                                        $jmlhdata=mysqli_num_rows($query2);
                                        $jmlhhalaman=ceil($jmlhdata/$batas);
                                        
                                        
                                        //langkah 3.sesuaikan query dengan batas dan posisi
                                        $query=" select * from tugasakhir join mahasiswa on tugasakhir.nim_mhs = mahasiswa.nim
                                        join prodi on mahasiswa.kode_prodi = prodi.kode_prodi
                                        join up_abstract on tugasakhir.id_ta = up_abstract.tgs_id
                                        join up_paper on tugasakhir.id_ta = up_paper.tgs_id_paper
                                        where tugasakhir.status_ta='lulus'
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
                                            <li class="page-item"><a class="page-link" href="listtugasakhir.php?halaman=<?php echo $halaman-1; ?>">Previous</a></li>
                                            <?php for($i=1; $i<=$jmlhhalaman; $i++){ 

                                             ?>
                                           
                                            <li class="page-item"><a class="page-link" href="listtugasakhir.php?halaman=<?php echo $i; ?>"><?php echo"".$i; ?></a></li>
                                           
                                      
                                        <?php   } ?>
                                                            
                                        <li class="page-item"><a class="page-link" href="listtugasakhir.php?halaman=<?php  echo $halaman+1; ?>">Next</a></li>
                                        </ul>
                                        </nav>        
                                      
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
    
     <!-- Page level plugins -->
     <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- untuk ajax -->
      <script>
          var keyword = document.getElementById('keyword_ta');
var container = document.getElementById('container_ta');

// untuk list mahasiswa
keyword.addEventListener('keyup',function(){
    // membuat object ajax
    var xxhr = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhr.onreadystatechange = function() {
        if(xxhr.readyState == 4 && xxhr.status == 200) {
            container.innerHTML = xxhr.responseText;
        }
    }

    //  eksekusi ajax
    xxhr.open('GET','ajax/listta.php?keyword='+ keyword.value,true);
    xxhr.send();
});

      </script>                                          

</body>

</html>