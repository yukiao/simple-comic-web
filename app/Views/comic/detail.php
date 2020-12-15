<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div class="container">
    <br>
    <div aria-label="breadcrumb ">
        <ol class="breadcrumb mt-3">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/comic">Comic</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $komik['judul']; ?></li>
        </ol>
    </div>

        <h2 class="mt-5" 
            data-aos="fade-down" 
            data-aos-delay="500"
            data-aos-duration="1000">
            <?= $komik['judul']; ?>
        </h2>
        <div class="border-top mt-3 mb-5 "></div>
        <div class="row mb-5">
            <div class="col-12 col-md-4 ">
                <img src="/images/<?= $komik['cover']; ?>"
                    data-aos="fade-right"
                    data-aos-delay="1000"
                    data-aos-duration="1000"
                    alt="cover" class="w-75 mx-auto">
            </div>
            <div class="col-12 col-md-8">
                <div class="row"
                    data-aos="fade-left"
                    data-aos-delay="1100"
                    data-aos-duration="1000"
                >
                    <div class="col-4">
                        <h5>Penulis</h5>
                    </div>
                    <div class="col-8">
                        <p><?= $komik['penulis']; ?></p>
                    </div>
                </div>
                <div class="row"
                    data-aos="fade-left"
                    data-aos-delay="1200"
                    data-aos-duration="1000"
                >
                    <div class="col-4">
                        <h5>Penerbit</h5>
                    </div>
                    <div class="col-8">
                        <p><?= $komik['penerbit']; ?></p>
                    </div>
                </div>
                <div class="row"
                    data-aos="fade-left"
                    data-aos-delay="1300"
                    data-aos-duration="1000"
                >
                    <div class="col-4">
                        <h5>Sinopsis</h5>
                    </div>
                    <div class="col-8">
                        <p><?= $komik['synopsis']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>