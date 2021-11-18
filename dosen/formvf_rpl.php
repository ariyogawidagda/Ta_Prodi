<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Verifikasi</title>

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

    // mengecek kaprodi
    if($cek['kode_prodi']=="003"){

    }
    else{
        header("location:indexdosen.php?pesanrpl='gagal'");
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
                    <h1 class="h3 mb-4 text-gray-800">Form Verifikasi</h1>

                    <h1 class="h4 mb-4 text-gray-800"><?php $date=date('Y-m-d'); echo"".format_hari_tanggal($date); ?></h1>
                    
                    <form action="prosesverifikasi.php" method="post">
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nim_rpl">Nim Mahasiswa</label>
                    <div class="col-sm-10">
                    <select class="form-control"  name="nim" id="nim_rpl" onchange="changedata(this.value)" required>
                    <option>-Pilih-</option>
                    <?php
    
                    $dtmhs= mysqli_query($koneksi,"select * from tugasakhir join mahasiswa on tugasakhir.nim_mhs = mahasiswa.nim where tugasakhir.status_ta ='belum verifikasi' and mahasiswa.kode_prodi = '003' ");
                    $jsArray1 = "var dtmhs = new Array();\n"; 
                    while($row= mysqli_fetch_array($dtmhs)){
                    echo "<option value='$row[nim_mhs]'> $row[nim_mhs] </option>";
                    
                    $jsArray1 .= "dtmhs['" . $row['nim_mhs'] . "'] = {nama:'" . addslashes($row['namamhs']) . "', judul:'" . addslashes($row['judul']) . "'
                        , nipdsn1:'" . addslashes($row['nip_pb1']) . "', nmdsn1:'" . addslashes($row['nama_pb1']) . "', nipdsn2:'" . addslashes($row['nip_pb2']) . "'
                        , nmdsn2:'" . addslashes($row['nama_pb2']) . "',kelasmhs:'" . addslashes($row['kelas']) . "',tgldaftar:'" . addslashes($row['tanggal_daftar']) . "'};\n";
                    
}  

?>
                    </select>
                            </div>
                </div>

                <div class="form-group row">
                        <label for="namamhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="namamhs" readonly id="namamhs" required>
                        </div>
                    </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="kelas_rpl">Kelas</label>
                    <div class="col-sm-10">
                    <select class="form-control"  name="kelas" id="kelas_rpl" required>
                    <option value="Pilih"> -Pilih- </option>
                    <option value="6A/RPL"> 6A/RPL </option>
                        <option value="6B/RPL"> 6B/RPL </option>
                        <option value="6C/RPL"> 6C/RPL </option>
                        <option value="6D/RPL"> 6D/RPL </option>
                    </select>
                            </div>
                </div>

                <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" name="tugasakhir"  readonly id="judul" rows="4" cols="69" placeholder="Silahkan Tulis Judul Tugas Akhir Anda!" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nippb1" class="col-sm-2 col-form-label">Nip Pembimbing 1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" readonly name="nippb1" id="nippb1" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dsn1" class="col-sm-2 col-form-label">Dosen Pembimbing 1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  readonly name="nmdsn1" id="dsn1" required>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nippb2">Nip Pembimbing 2</label>
                    <div class="col-sm-10">
                    <select class="form-control"  name="nippb2" id="nippb2" onchange="changeValue(this.value)">
                    <option>-Pilih-</option>
                    <?php $dosen= mysqli_query($koneksi,"select * from dosen");
                    $jsArray = "var dtDosen = new Array();\n"; 
                    while($row= mysqli_fetch_array($dosen)){
                        echo "<option value='$row[nip]'> $row[nip] </option>";
                        $jsArray .= "dtDosen['" . $row['nip'] . "'] = {nama:'" . addslashes($row['namadosen']) . "'};\n";
                    }  

                    ?>
                    </select>
                            </div>
                </div>

                    <div class="form-group row">
                        <label for="dsn2" class="col-sm-2 col-form-label">Dosen Pembimbing 2</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"  name="nmdsn2" id="dsn2" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Daftar</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" readonly name="tanggal" id="tanggal" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ulasan" class="col-sm-2 col-form-label">Ulasan</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" name="ulasan" id="ulasan" rows="4" cols="69" placeholder="Silahkan Tulis  Ulasan Anda!" ></textarea>
                        </div>
                    </div>

                <div class="form-group row">
                <label for="ulasan" class="col-sm-2 col-form-label"></label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons"> 
                    <div class="col-sm-10">
                    <label class="btn btn-secondary"> 
                        <input type="radio" name="options" id="option1" value="verifikasi" required> Verifikasi
                         
                    </label>
               
                    </div>
                    
                    <div class="col-sm-10">
                    <label  class="btn btn-secondary">
                   
                        <input type="radio" name="options" id="option2" value="ditolak" required> Tolak
                       
                    </label>
                    </div>
            
                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Verifikasi">
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

     <!-- untuk menampilkan nip dosen ketika nama di tulis -->
     <script src="nmdsn.js"></script>

     <!-- untuk menampilkan nama dosen ketika nip di pilih -->
     <script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(nippb2){ 
    document.getElementById('dsn2').value = dtDosen[nippb2].nama; 
    
    }; 
</script>


<!-- Untuk Menghapus Data Di Textboxt -->
<script type="text/javascript">
    function eraseText() {
		document.getElementById('nippb2').value = "-Pilih-"; 

	document.getElementById('dsn2').value = "";
	document.getElementById('ulasan').value = "";  

	};
</script>

    <!-- untuk menampilkan nim ketika kelas dipilih -->
    <script src="vf_rpl.js"></script>

    <!-- untuk menampilkan data ketika nim dipilih -->
	<script type="text/javascript">
 <?php echo $jsArray1; ?>
function changedata(y){ 
	
    document.getElementById('namamhs').value = dtmhs[y].nama; 
    document.getElementById('judul').value = dtmhs[y].judul; 
	document.getElementById('nippb1').value = dtmhs[y].nipdsn1; 
	document.getElementById('dsn1').value = dtmhs[y].nmdsn1; 
	
	document.getElementById('kelas_rpl').value = dtmhs[y].kelasmhs; 
    document.getElementById('tanggal').value = dtmhs[y].tgldaftar; 
    
    }; 
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