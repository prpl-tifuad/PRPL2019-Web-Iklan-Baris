<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Coba Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
					<a class="navbar-brand page-scroll" href="index2.php">Lapak Kak!</a>
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
        

         <!-- jumbotron  -->
    <!-- <div class="jumbotron text-center">

    

    </div> -->
    <!-- akhir jumbotron -->
	
        <div class="container center">
            <div class="col-lg-4">  
                <div class="page-header">
                    <h3>Daftar</h3>
				</div>

				<form action="configinput.php" method="post" role="form" class="form-horizontal">	
				<div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="username_" class="form-control">
				</div>
				<div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password_" class="form-control">
				</div>
				<div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="namalengkap_" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email_" class="form-control">
                </div>
                <div class="form-group">
                    <label>level
                        <select class="form-control" name="id">
                            <option value="">-Pilih-</option>
                            <option value="1">admin</option>	
							<option value="2">pelanggan</option>
							<option value="3">mamber</option>
						</select>
					</label>
                </div>
                <div class="form-group">
					<button type="submit" class="btn btn-primary" name="btninsert">Insert Data</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                </form>
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