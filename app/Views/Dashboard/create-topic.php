<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Materi</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<!-- font -->
	<link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?preview.text_type=custom">
    <!-- drag n drop snippet -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script> 
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <!-- Navbar -->
    <div class="container">
        <div class="row">
            <div class="col-12">   		
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

    <!-- sidebar -->
    <div class="sidebar">
        <label for="list-header">Playlistku</label>
        <h3 id="list-header">MATEMATIKA ALJABAR</h5>
        <?php foreach($content_data as $content): ?>
        <div><?= $content['content_title'] ?></div>
        <?php endforeach ?>
    </div>

    <!-- content -->
    <div class="content">
        <div class="container topic-form">
            <form action="#" method="post">
                <h3>TAMBAH MATERI</h5>
                <div class="form-group">
					<label for="topic-title" class="col-form-label">Judul Materi</label>
					<input type="text" class="form-control" id="topic-title" name="content_title" required>
				</div>
                <div class="form-group">
                    <label for="topic-category">Kategori</label>
                    <select class="form-control" id="topic-category" name="content_category">
                        <option value="youtube">Youtube</option>
                        <option value="pdf">File PDF</option>
                        <option value="web">Link Web</option>
                    </select>
                </div>
                <div class="form-group" id="link-field">
                    <label for="topic-link">Masukkan Link</label>
                    <input type="text" class="form-control" name="content_link" id="topic-link" >
                </div>
                <div class="form-group files" id="file-field">
                    <input type="file" class="form-control" name="content_link" multiple="" id="topic-file">
                </div>
                <button type="submit" class="btn btn-success">Tambah Materi</button>
            </form>
        </div>
    </div>

    <script>
        $("#topic-category").change(function() {
            if ($(this).val() == "youtube" || $(this).val() == "web") {
                $('#link-field').show();
                $('#topic-link').attr('required', '');
                $('#topic-link').attr('data-error', 'This field is required.');
                $('#file-field').hide();
                $('#topic-file').removeAttr('required');
                $('#topic-file').removeAttr('data-error');
            } else if ($(this).val() == "pdf") {
                $('#file-field').show();
                $('#topic-file').attr('required', '');
                $('#topic-file').attr('data-error', 'This field is required.');
                $('#link-field').hide();
                $('#topic-link').removeAttr('required');
                $('#topic-link').removeAttr('data-error');
            } 
        });
        $("#topic-category").trigger("change");
    </script>
</body>
</html>