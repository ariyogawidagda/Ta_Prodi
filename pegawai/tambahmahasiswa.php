<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Mahasiswa</title>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo"".$cek['nama_pegawai']?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
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
                     <h1 class="h3 mb-4 text-gray-800">Tambah Data Mahasiswa</h1>

                     <h1 class="h4 mb-4 text-gray-800"><?php $date=date('Y-m-d'); echo"".format_hari_tanggal($date); ?></h1>
                    
                    <form action="prosesmahasiswa.php" method="post">

                    
                <div class="form-group row">
                        <label for="nmmhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="namamhs" id="nmmhs" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nimmhs" class="col-sm-2 col-form-label">Nim</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nim" id="nimmhs" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tmptlhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="tempatlahir" id="tmptlhr"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" name="datelahir" id="tgllahir"  required value="<?php echo"".$date=date('Y-m-d')?>">
                        </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nmprodi">Nama Prodi</label>
                    <div class="col-sm-10">
                    <select class="form-control"   name="kodeprodii" id="nmprodi"  required>
                    <option value=""> -Pilih- </option>
                    <option  value="001"> D3 Manajemen Informatika </option>
                    <option  value="002"> D3 Teknik Listrik </option>
                    <option value="003"> D4 Rekayasa Perangkat Lunak </option>
                    <option value="004">D4 Teknik Otomasi</option>
                            
                    </select>
                            </div>
                </div>

               

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="klsprodi">Kelas</label>
                    <div class="col-sm-10">
                    <select class="form-control"  name="kelas" id="klsprodi" required>
                    <option value=""> -Pilih- </option>
        
                    </select>
                            </div>
                </div>

                <div class="form-group row">
                        <label for="almt" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" name="alamat" id="almt" rows="4" cols="69" placeholder="Silahkan Tulis Alamat Anda!" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nippb1" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="notelp" id="telp"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dsn1" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  name="email" id="email" required>
                        </div>
                    </div>

            

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Tambah">
                        <Input  class="btn btn-primary" type="button" value="Clear" onclick="javascript:eraseText();"></td>
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
<!-- Untuk Menghapus Data Di Textboxt -->
<script type="text/javascript">
    function eraseText() {
		document.getElementById('nmmhs').value = ""; 
        document.getElementById('nimmhs').value = ""; 
	document.getElementById('tmptlhr').value = ""; 
	document.getElementById('almt').value = "";
	document.getElementById('telp').value = "";  
	document.getElementById('email').value = "";  
    document.getElementById('klsprodi').value = "";  
    document.getElementById('nmprodi').value = "";  
	};
</script>
<!-- Saat combobox namaprodi dipilih akan otomatis menampilkan kelas dari prodi tersebut -->
<script>
var combobox1 =  document.getElementById('nmprodi');
var combobox2 =  document.getElementById('klsprodi');



// menambah event atau aksi ketika keyword di tulis

combobox1.addEventListener('change',function(){
    // membuat object ajax

	console.log(this.value);
    
    var xtp = new XMLHttpRequest() 

    // cek kesiapan ajax
    xtp.onreadystatechange = function() {
        if(xtp.readyState == 4 && xtp.status == 200) {
            combobox2.innerHTML = xtp.responseText;
        }
    }

    //  eksekusi ajax
    xtp.open('GET','ajax/tmbhmhs.php?prodi='+ combobox1.value,true);
    xtp.send();
});
</script>
     
 <!-- Untuk Menampilkan tanggal bahasa indonesia -->
 <?php
function format_hari_tanggal($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date( 'H:i:s', strtotime($waktu));
    
    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$hari, $tanggal $bulan $tahun";
}
?>
</body>

</html>