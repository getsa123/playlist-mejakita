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
    
    <?= $this->include('navbar') ?>

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
        <?php $validation = \Config\Services::validation(); ?>
            <form action="save_content" method="post" enctype="multipart/form-data">
                <h3>TAMBAH MATERI</h5>
                <div class="form-group">
					<label for="topic-title" class="col-form-label">Judul Materi</label>
					<input type="text" class="form-control <?= ($validation->hasError('content_title')) ?
                    'is-invalid' : ''; ?>" id="topic-title" name="content_title" required value="<?= old('content_title');?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('content_title')?>
                    </div>
				</div>
                <div class="form-group">
                    <label for="topic-category">Kategori</label>
                    <select class="form-control" id="topic-category" name="content_category">
                        <option value="youtube">Youtube</option>
                        <option value="pdf">File PDF</option>
                        <option value="web">Link Web</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="topic">Tambah ke Playlist</label>
                    <select class="form-control" id="topic-category" name="content_add_playlist">
                    <?php foreach($playlist_data as $playlist): ?>
                        <option value="<?= $playlist['playlist_id'] ?>"><?= $playlist['playlist_title'] ?></option>
                    <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group" id="link-field">
                    <label for="topic-link">Masukkan Link</label>
                    <input type="text" class="form-control" name="content_link" id="topic-link" value="<?= old('content_link');?>">
                </div>
                <div class="form-group files" id="file-field">
                    <label for="topic-file">Masukkan File</label>
                    <input type="file" class="form-control <?= ($validation->hasError('content_file'))? 'is-invalid' : ''; ?>" name="content_file" multiple="" id="topic-file">
                    <div class="invalid-feedback">
                        <?= $validation->getError('content_file')?>
                    </div>
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