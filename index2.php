<?php
session_start();
if(empty($_SESSION)){
	header("Location: index2.php");
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
		<style>
		body {
			padding-top: 70px;
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
					<a class="navbar-brand page-scroll" href="index2.html">Lapak Kak!</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                        <li data-toggle="modal" data-target="#mydaftar"><a href="user.php" class="page-scroll">
                            <span class="glyphicon glyphicon-user"></span>     <?php  echo  $_SESSION['username']; ?></a>
                        </li>
                        <li data-toggle="modal" data-target="#mylogin"><a href="pasangiklan.php" class="page-scroll">
                            <span class="glyphicon glyphicon-plus"></span> Pasang Iklan</a>
                        </li>
                        
					</ul>
				</div>
            </div>
		</nav>
		

		<div class="container">
			<div class="row">
					<div class="jumbotron">
							<h1 class="display-4">Selamat Datang Kaks!</h1>
							<p>Segalanya Bisa Dijual Dan Mendapatkan Duit</p>
						  <p>
							  <a class="btn btn-primary btn-lg" href="pasangiklan.php"> + Pasang Iklan</a>
						  </p>
					</div>

					<div class="jumbotron">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" name="cari" placeholder="Isikan Pencarian...">
							</div>
							<button type="submit" class="btn btn-info">Cari</button>
						</form>
					</div>

				<div class="col-lg-12 text-center">
					<!-- <h1>Coba Bootstrap</h1>
					<p class="lead">Aplikasi menggunakan Bootstrap</p> -->

					<div class="coutainer">
                    <div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/vans.png">
								</a>
						  </div>
						  <div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/dickies.jpg">
								</a>
						  </div>
						  <div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/emerica.jpg">
								</a>
						  </div>
							<div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/converse.jpg">
								</a>
						  </div>
						  <div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/bape.jpg">
								</a>
						  </div>
						  <div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/puma.png">
								</a>
						  </div>
						  <div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/gucci.jpg">
								</a>
						  </div>
							<div class="col-sm-3">
								<a href="" class="thumbnail">
								  <img src="gambar/dw.jpg">
								</a>
							</div>					
						</div>
						</div>	 
					</div>

				</div>
		</div>
	</div>


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