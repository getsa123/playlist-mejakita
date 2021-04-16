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
	
	<?= $this->include('navbar') ?>
	<?= $this->include('header') ?>

	<!-- Header Menu 1 -->
	<div style="background-color: #326e90; overflow: hidden">
		<div class="container">
			
			<div class="row">

				<div class="col-3" style="padding:30px" align="center">
				​	<div >
					<img src="<?php echo base_url('assets/img/gb3.png') ?>" class="img-fluid" width="200px" height="200px" alt="...">
					</div>
				</div>

				<div class="col-6" >
					<h3 style="color: white;"><?= $playlist_data['playlist_title'] ?></h3>
					<p style="color: white;"><?= $playlist_data['playlist_description'] ?></p>
					
					<div style="bottom:0px; position:absolute; color: white;" class="row container-fluid">

						<div class="col-4" style="vertical-align: bottom; ">
							<p><?= $playlist_data['playlist_author'] ?></p>
						</div>

						<div class="col-4">
							<p>7 Materi</p>
						</div>

						<div class="col-4">
							<p><?= $playlist_data['playlist_created_time']?></p>
						</div>
					</div>

				</div>
			</div>	
		</div>
	</div>

	<!-- Body List-->
<div class="container">
<div class="row">
	<div class="col-3">
	<button type="button" class="btn btn-success" style="margin-left: 60px; margin-top:20px">
		<a href="<?= base_url('public/dashboard/create_content') ?>" style="text-decoration: none; color: white;">Tambah Materi</a>
	</button>
	</div>
		<div class="col-6">
<table class="table">
<thead>
<tr>
    <th></th>
    <th>Title</th>
	<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($content_data as $content): ?>
<tr>
    <td>
        <img class="listImages" src="<?php echo base_url('assets/img/gb3.png') ?>" style="width: 50px; height: 50px; border-radius: 15px">
    </td>
    <td>
        <strong><?= $content['content_title'] ?></strong><br>
        <small class="text-muted"><?= $content['content_author'] ?></small>
    </td>
	<td>
	<a href="<?= base_url('public/dashboard/content_list/'.$content['content_id'].'/content_delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
        
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
</div>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>

</html>