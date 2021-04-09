<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Playlist Meja Kita</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<!-- font -->
	<link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?preview.text_type=custom">

	<style>
		/* height */
		::-webkit-scrollbar {
			height: 5px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #326E90;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #4694C2;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #4694C2;
		}

		.scrolling-wrapper {
			overflow-x: auto;
		}
	</style>
</head>

<body>
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- Navbar -->
	<div class="container">
		<div class="row">
			<div class="col-12" style="border: solid 1px">
				<nav class="navbar navbar-expand-lg navbar-light ">
					<div class="container-fluid">
						<img src="<?php echo base_url('assets/img/image001.png') ?>" style="width: 150px; height: 50px; margin-left: -25px">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Features</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Pricing</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>


	<!-- Header -->
	<div style="background-color: #40799a; overflow: hidden">
		<div class="container">
			<div class="row row-4" style="border: solid 1px">
				<div class="col-6">
					<h2 style="color: white;">PLAYLIST</h2>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Menu 1 -->
	<div style="background-color: #326e90; overflow: hidden">
		<div class="container">
			<div class="row" style="border: solid 1px">
				<div class="col-3" style="padding:30px" align="center">
				​	<img src="<?php echo base_url('assets/img/gb3.png.png') ?>" class="img-fluid" width="200px" height="200px" alt="...">
					
				</div>
				<div class="col-6" style="border: solid 1px">
					<p style="color: white;">Playlistku</p>
					<h3 style="color: white;">MATEMATIKA ALJABAR</h3>
					<p style="color: white;">Playlist Matematika andalanku, berisi materi aljabar lengkap dari youtube dan video pembelajaran MejaKita</p>
					<div class="row">
						<div class="col-4" style="border: solid 1px">
							<p style="color: white;">MDI009</p>
						</div>
						<div class="col-4" style="border: solid 1px">
							<p style="color: white;">7 Materi</p>
						</div>
						<div class="col-4" style="border: solid 1px">
							<p>DD.MM.YYYY hh:mm <?php echo date('j/m/Y H:i'); ?></p>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<!-- Body List-->
	<div class="container card">
		<div class="row" style="margin-top: 20px ;background-color: rgba(196, 196, 196, 0.26);">
			<div class="col-1">
				<img class="listImages" src="<?php echo base_url('assets/img/gb3.png.png') ?>" style="width: 50px; height: 50px; border-radius: 15px">
			</div>
			<div class="col-8" style="border: solid 1px">
				<a href="#" style="text-decoration: none; color: black; font-size: 24px">Vektor, analisis dan perhitungannya</a>
				<br>
				<div style="margin-top: -10px;">
					<a href="#" style="font-size: 9px; text-decoration: none; color: black">MDI009</a>
				</div>
			</div>
			<div class="col-3" style="border: solid 1px;">
				<div class="btn-group" role="group" aria-label="">
	  				<button type="button" class="btn btn-primary">
	  					<i class="fa fa-pencil" aria-hidden="true"></i>
	  				</button>
  					<button type="button" class="btn btn-danger">
  						<i class="fa fa-trash" aria-hidden="true"></i>
  					</button>
				</div>
			</div>
		</div>
	</div>






	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>

</html>