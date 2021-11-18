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
     <?php if(isset($_GET['pesan'])=="berhasil") {?>
        <script>

            alert("Berhasil Verifikasi!");
        </script>
        <?php } elseif(isset($_GET['pesanmi'])=="gagal") {?>
            <script>

                alert("Bukan Kaprodi D3 MI!");
            </script>
            <?php } elseif(isset($_GET['pesantl'])=="gagal") {?>
                <script>

                alert("Bukan Kaprodi D3 TL!");
            </script>
            <?php }  elseif(isset($_GET['pesanrpl'])=="gagal") {?>
                <script>

                alert("Bukan Kaprodi D4 TRPL!");
            </script>
            <?php }  elseif(isset($_GET['pesanto'])=="gagal") {?>
                <script>

                alert("Bukan Kaprodi D4 TO!");
            </script>
            <?php } elseif(isset($_GET['pw'])=="berhasil") {?>
                <script>

                alert("Password Berhasil Di Update");
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


 <!-- untuk menampilkam jumlah data di setiap master data -->
 <?php
     $query=mysqli_query($koneksi,"select * from mahasiswa");
     $jmlhdata=mysqli_num_rows($query);

     $query1=mysqli_query($koneksi,"select * from prodi");
     $jmlhdata1=mysqli_num_rows($query1);

     $query2=mysqli_query($koneksi,"select * from dosen");
     $jmlhdata2=mysqli_num_rows($query2);

     $query3=mysqli_query($koneksi,"select * from pegawai");
     $jmlhdata3=mysqli_num_rows($query3);

     
     $query4=mysqli_query($koneksi,"select * from tugasakhir");
     $jmlhdata4=mysqli_num_rows($query4);
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
                    <h1 class="h3 mb-4 text-gray-800">Edit Password</h1>
                    
                <form action="updatepassword.php" method="POST">
                    <div class="form-group row">    
                        <label for="password" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Edit">
                        </div>
                    </div>
                    </form>

                 

                    
                               
                                   
                  

                   
                   
                    








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

</body>

</html>