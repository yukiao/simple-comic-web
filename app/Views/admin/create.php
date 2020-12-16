<?= $this->extend('layout/admin-template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <h3>
        Create new Comic Data
    </h3>
    <form class="mt-5" action="/admin/save" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label"><strong>Title</strong></label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul'))?' is-invalid':''; ?>" id="title" name="judul" autofocus value='<?= old('judul'); ?>'>
                <div class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="author" class="col-sm-2 col-form-label"><strong>Author</strong></label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('penulis'))?' is-invalid':''; ?>" id="author" name="penulis" value='<?= old('penulis'); ?>'>
                <div class="invalid-feedback">
                    <?= $validation->getError('penulis'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="publisher" class="col-sm-2 col-form-label"><strong>Publisher</strong></label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('penerbit'))?' is-invalid':''; ?>" id="publisher" name="penerbit" value='<?= old('penerbit'); ?>'>
                <div class="invalid-feedback">
                    <?= $validation->getError('penerbit'); ?>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="synopsis" class="col-sm-2 col-form-label"><strong>Synopsis</strong></label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('synopsis'))?' is-invalid':''; ?>" id="synopsis" name="synopsis" value='<?= old('synopsis'); ?>'>
                <div class="invalid-feedback">
                    <?= $validation->getError('synopsis'); ?>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="Gambar" class="col-sm-2 col-form-label"><strong>Gambar</strong></label>
            <div class="col-sm-2">
                <img src="/images/default.jpg" alt="cover" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('cover'))?' is-invalid':''; ?>" name="cover" id="sampul" onchange="previewImage()">

                    <div class="invalid-feedback">
                        <?= $validation->getError('cover'); ?>
                    </div>
                    
                    <label class="custom-file-label" for="customFile" >Upload Gambar</label>
                </div>
            </div>
        </div>

        
        <div class="invalid-feedback">
                <?= $validation->getError('cover'); ?>
            </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary d-block mt-3" style="background-color: #8e51c7;">Create</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>