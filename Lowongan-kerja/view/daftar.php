<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../awesome/css/font-awesome.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Pendaftaran Member</title>
</head>
<body style="background-color:#e6e6e6;">
	<div class="page-about">
		<div class="header-about">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="home.php">
							<img src="../image/SZ.png" alt="" class="icon-task">
						</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="login.php" class="font-rob">Login</a></li>
						<li class="active"><a href="#" class="font-rob">Daftar</a></li> 
						<li><a href="#" class="font-rob">Cari kerja</a></li>
						<li><a href="#" class="font-rob">Perusahaan</a></li> 
						<li><a href="#" class="font-rob">About</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Cari</button>
					</form>
				</div>
			</nav>
		</div>
		<div class="content">
			<div class="container">
				<form class="col-sm-6 daftar-member">
					<h1 class="judul-form">
						DAFTAR
					</h1>
					<hr class="cross-area">
					<div class="form-group">
						<label for="nama">Username Anda:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama">Nama Anda:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="nama">Password Anda:</label>
						<input type="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat anda:</label>
						<textarea type="text" class="form-control" id="alamat" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="email">Email anda:</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="jk">Jenis Kelamin:</label>
						<select class="form-control" id="jk">
							<option>Pria</option>
							<option>Wanita</option>
						</select>
					</div>
					<div class="form-group">
						<label for="Tanggal">Tanggal Lahir: </label>
						<input type="date" class="datepicker form-control">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="submit" class="btn btn-warning">Cancel</button>
				</form>
			</div>
			<div class="image-work">
				<img src="../image/icon-daftar.jpg" class="image-daftar">
			</div>
		</div>
		<footer class="footer-distributed">

			<div class="footer-left">

				<h6>Lowongan<span> Pekerjaan</span></h6>

				<p class="footer-links">
					<a href="#">Login</a>
					·
					<a href="#">Daftar</a>
					·
					<a href="#">Cari Pekerjaan</a>
					·
					<a href="#">Perusahaan</a>
					·
					<a href="#">About</a>
				</p>

				<p class="footer-company-name">Loker &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Letjen Suprapto IV</span> Jember, Jawa Timur</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>089682205995</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">madridzammil@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>	
	</div>
</body>
</html>