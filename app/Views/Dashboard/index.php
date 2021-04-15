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
	
	<?= $this->include('navbar') ?>
	<?= $this->include('header') ?>

	

	<!-- Header Menu 1 -->
	<div style="background-color: #326e90; overflow: hidden">
		<div class="container">
			<div class="row scrolling-wrapper flex-row flex-nowrap">
				<div class="col-3">
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
				<div class="col-3">
					<a href="<?= base_url('public/dashboard/playlist/'.$playlist['playlist_id'].'/playlist_edit') ?>">
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
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dropdown button
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<?php foreach($playlist_data as $playlist): ?>
					<a href="#" class="dropdown-item" action=""><?= $playlist['playlist_title'] ?></a>
				<?php endforeach ?>
			</div>
		</div>
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
			<div class="modal-content modal-form">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Playlist</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<div class="container">
										<div class="picture-container">
											<div class="picture">
												<img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
												<input type="file" id="wizard-picture" class="" name="pic">
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
												<input type="text" class="form-control" name="playlist_title">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="playlist-category" class="col-form-label">Kategori</label>
												<select class="form-control" name="playlist_category">
													<option value="sosiologi">Sosiologi</option>
													<option value="kimia">Kimia</option>
													<option value="fisika">Fisika</option>
													<option value="matematika">Matematika</option>
													<option value="biologi">Biologi</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label for="playlist-description">Deskripsi</label>
												<textarea class="form-control" rows="3" name="playlist_description"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Tambah Playlist</button>
						</div>
					</form>
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