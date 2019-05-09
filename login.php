<?php
session_start();
if($_SESSION){
	header("Location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lapakak.co.ltd</title>
				<link href="css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
				<link rel="stylesheet" href="css/style.css">
				<link rel="stylesheet" type="text/css" href="style.css">
		<!-- <style>
		body {
			padding-top: 70px;
		}
        </style> -->
        <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>


		body {
			background-color:#eee;
            padding-top: 70px;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.html">Lapak Kak!</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                        <li data-toggle="modal" data-target="#mydaftar"><a href="login.php" class="page-scroll">
                            <span class="glyphicon glyphicon-user"></span> Akun saya</a>
                        </li>
                        <li data-toggle="modal" data-target="#mylogin"><a href="pasangiklan.php" class="page-scroll">
                            <span class="glyphicon glyphicon-plus"></span> Pasang Iklan</a>
                        </li>
                        
					</ul>
				</div>
            </div>
		</nav>
		
        <!-- start form login -->

        <div class="container">
		<div class="row">
			<h2>Login Lapakak!</h2>
			<div class="login">
				
				<?php
				if(isset($_POST['login'])){
					include("config.php");
					
					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$level		= $_POST['level'];
					
					$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
					}else{
						$row = mysqli_fetch_assoc($query);
						
						if($row['level'] == 1 && $level == 1){
							$_SESSION['username']=$username;
							$_SESSION['level']='admin';
							header("Location: user.php");
						}else if($row['level'] == 2 && $level == 2){
							$_SESSION['username']=$username;
							$_SESSION['level']='dosen';
							header("Location: user.php");
						}else if($row['level'] == 3 && $level == 3){
							$_SESSION['username']=$username;
							$_SESSION['level']='mahasiswa';
							header("Location: user.php");
						}else{
							echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
						}
					}
				}
				?>
				
				<form role="form" action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="1">Administrator</option>
							<option value="2">Pelanggan</option>
							<option value="3">Mamber</option>
						</select>
					</div>
					<div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-block" value="Login me" />
                    </div>
                    <a href="daftar.php">daftar</a>
                </form>
			</div>
		</div>
	</div>

        <!-- endlogin -->
		

	<!-- footer -->
    <footer>
			<div class="countainer text-center">
			  <div class="row">
				<div class="col-sm-12">
				  <p>&copy; 2018 | builth with love <i class="glyphicon glyphicon-globe"></i> by.
					<a href="https://www.instagram.com/fajarnr_/?hl=en">Fajar Nugraha</a></p>
				</div>
			  </div>
				<div class="row">
					<div class="col-sm-12">
					  <a href="https://www.youtube.com/channel/UCjPeFxJIGHzzZNMZX2HweZQ" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i>
						Subsribe to youtube</a>
				<div>
			  </div>
		  </footer>
		  <!-- akhirfooter> -->

		<script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
	</body>
</html>



<!--  -->