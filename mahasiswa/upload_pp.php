<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index Mahasiswa</title>

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

    // mengecek apakah mahasiswa sudah mendaftar tugas ta
    $data2=mysqli_query($koneksi,"select * from tugasakhir  where nim_mhs='$user'");
    $cek2=mysqli_fetch_array($data2);

    if(isset($cek2['nim_mhs'])){

    } else{
        header("location:indexmhs.php?abb='gagal'");
    }

        // untuk megambil id_Ta dan status ta
        $data=mysqli_query($koneksi,"select * from tugasakhir join mahasiswa on tugasakhir.nim_mhs = mahasiswa.nim where tugasakhir.nim_mhs='$user'");
        $cek=mysqli_fetch_array($data);
        $id=$cek['id_ta'];
   
        $status_ta=$cek['status_ta'];
        // untuk mengecek status ta
        if($status_ta=="verifikasi") {
   
       }
       else if($cek2['status_ta']=="") {
        header("location:indexmhs.php?abb='gagal'");
    }else if($cek2['status_ta']=="lulus") {
        header("location:indexmhs.php?abls='gagal'");
    }else if($cek2['status_ta']=="revisi") {
        header("location:indexmhs.php?abrs='gagal'");
    }

   
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
                <a class="nav-link" href="indexmhs.php">
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
                    <span>Tugas Akhir</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="formta.php">Pendaftaraan Tugas Akhir</a>
                        <a class="collapse-item" href="statusta.php">Status Tugas Akhir</a>
                        <a class="collapse-item" href="upload_ab.php">Upload Abstract</a>
                        <a class="collapse-item" href="upload_pp.php">Upload Paper</a>
                        
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5><?php  echo"".$cek['namamhs']?></h5></span>
                               
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
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
                    <h1 class="h3 mb-4 text-gray-800">Form Upload Paper</h1>

                    

                
                 <!-- ketika button di update di klik, maka akan mengambil nilai dan melakukan insert -->

                    <?php 
    
    if(isset($_POST['btnn'])){
        // untuk mengambil nilai dari file yang diupload
        $name= $_FILES['myfile']['name'];   
       $type= $_FILES['myfile']['type']; 
        $file_size= $_FILES['myfile']['size'];
        $file=  addslashes(file_get_contents($_FILES['myfile']['tmp_name'])); 

   

        // untuk cek data apakah sudah ada
        $data1=mysqli_query($koneksi,"select * from up_paper where tgs_id_paper='$id'");
        $cek1=mysqli_fetch_array($data1);


      
        
    ?>

    

    <?php if($cek1 > 0) {?>
        <script>
            alert("Data Sudah Ada!");
        </script>

    <?php  } elseif($file_size < 2048000 and ($type =='application/vnd.openxmlformats-officedocument.wordprocessingml.document' or $type == 'application/pdf')){?>
        <script>
        alert("File Berhasil Di Upload!");
    </script>
    <?php  
   mysqli_query($koneksi,"insert into  up_paper (nama_file_paper,tipe_paper,file_paper,tgs_id_paper) VALUES ('$name','$type','$file','$id')");
    } else{ ?>
  <script>
            alert("File Gagal Di Upload!, Ukuran Atau Tipe File Tidak Sesuai!");
        </script>

    <?php  }  }  ?>

            
       
    
       
        

     

    <form method="post" enctype="multipart/form-data">

    <div class="form-group row">

  
    <div class="col-sm-10">

    <input type="file"      id="filee" name="myfile" required> 

    <button name="btnn">Upload</button>
    
    </div>

    </div>

    
            
    
      

     </form
     
     >
    <!-- untuk melihat file -->
    <?php 
        if(isset($_POST['btnn'])){
            // untuk megambil id_Ta
        $data=mysqli_query($koneksi,"select * from tugasakhir where nim_mhs='$user'");
        $cek=mysqli_fetch_array($data);
        $id=$cek['id_ta'];

        // untuk cek data apakah sudah ada
        $data1=mysqli_query($koneksi,"select * from up_paper where tgs_id_paper='$id'");
        $cek1=mysqli_fetch_array($data1);
        ?>

        <?php if($cek1 > 0)  {?>
        
            <a   href="view_paper.php?id=<?php echo $cek['id_ta']; ?>" target="_blank"><?php echo $cek1['nama_file_paper']; ?></a>

        <?php } }?>
                      

      




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

    
</style>

</body>

</html>