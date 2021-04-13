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
						<a href="<?php echo base_url('public')?>"><img src="<?php echo base_url('assets/img/image001.png') ?>" style="width: 150px; height: 50px; margin-left: -25px"></a>
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
				<div class="col-6" style="border: solid 1px">
					<h2 style="color: white;">PLAYLIST</h2>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Menu 1 -->
	<div style="background-color: #326e90; overflow: hidden">
		<div class="container">
			<div class="row scrolling-wrapper flex-row flex-nowrap">
				<div class="col-3" style="border: solid 1px">
					<div class="create-playlist">
						<button type="button" data-toggle="modal" href="#addPlaylist" class="btn">
							<i class="fas fa-plus fa-5x" style="color: white;" ></i>
							<p>Tambah Playlist</p>
						</button>
					</div>
				</div>
	<!-- End Header Menu 1 -->
	<!-- List Playlist -->
				<?php foreach($playlist_data as $playlist): ?>
				<div class="col-3 playlist-container">
					<a href="<?php echo base_url('assets/img/gb3.png') ?>">
						<div class="playlist-card">
							<h5><?= $playlist['playlist_title'] ?></h5>
							<img src="<?php echo base_url('assets/img/gb3.png') ?>" alt="">
						</div>
					</a>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- End List Playlist -->
	<!-- Body List-->
	<div class="container">
	<table class="table">
<thead>
<tr>
    <th></th>
    <th>Title</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($playlist_data as $playlist): ?>
<tr>
    <td>
        <img class="listImages" src="<?php echo base_url('assets/img/gb3.png') ?>" style="width: 50px; height: 50px; border-radius: 15px">
    </td>
    <td>
        <strong><?= $playlist['playlist_title'] ?></strong><br>
        <small class="text-muted"><?= $playlist['playlist_author'] ?></small>
    </td>
    <td>
        <a href="#" style="text-decoration: none; color: black; text-align: right; font-size: 18px;" >+ Tambah ke Playlist</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


	<!-- Modals -->
	<div class="modal fade" id="addPlaylist" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content create-playlist">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Playlist</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<div class="container">
										<div class="picture-container">
											<div class="picture">
												<img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
												<input type="file" id="wizard-picture" class="">
											</div>
											<h6 class="">Pilih Gambar</h6>

										</div>
									</div>
								</div>
								<div class="col">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="playlist-title" class="col-form-label">Judul</label>
												<input type="text" class="form-control" id="playlist-title">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="playlist-category" class="col-form-label">Kategori</label>
												<select class="form-control" id="playlist-category">
													<option>Sosiologi</option>
													<option>Kimia</option>
													<option>Fisika</option>
													<option>Matematika</option>
													<option>Biologi</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="playlist-description">Deskripsi</label>
												<textarea class="form-control" id="playlist-description" rows="3"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Tambah Playlist</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			// Prepare the preview for profile picture
			$("#wizard-picture").change(function() {
				readURL(this);
			});
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

</body>

</html>