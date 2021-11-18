<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="stylelogin.css">
</head>


<body>
	<!-- cek kondisi login -->
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo" Login Gagal ! username dan password salah";
		}
		elseif($_GET['pesan']=="mahasiswa"){
			echo"Anda Telah Berhasil Login ";
			header("location: mahasiswa/indexmhs.php");
		}
		elseif($_GET['pesan']=="dosen"){
			echo"Anda Telah Berhasil Login ";
			header("location: dosen/indexdosen.php");
		}
		elseif($_GET['pesan']=="pegawai"){
			echo"Anda Telah Berhasil Login ";
			header("location: pegawai/indexpegawai.php");
		}
		
	}
	?>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="ceklogin.php" method="POST">
            <div class="field">
               <input type="text" name="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
	
	
</body>
</html>

