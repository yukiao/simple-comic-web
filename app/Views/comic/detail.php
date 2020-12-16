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
            <div class="col-12 col-md-4 mb-3 d-flex justify-content-center ">
                <img src="/images/<?= $komik['cover']; ?>"
                    data-aos="fade-right"
                    data-aos-delay="1000"
                    data-aos-duration="1000"
                    alt="cover" class="w-50 mx-auto">
            </div>
            <div class="col-12 col-md-8">
                <div class="row"
                    data-aos="fade-left"
                    data-aos-delay="1100"
                    data-aos-duration="1000"
                >
                    <div class="col">
                        <p class='background-header text-center py-3 text-white'>Basic Information</p>
                        <div class="row p-2 detail-item">
                            <div class="col-4">
                                Title
                            </div>
                            <div class="col-8">
                                <?= $komik['judul']; ?>
                            </div>
                        </div>
                        <div class="row p-2 detail-item">
                            <div class="col-4">
                                Author
                            </div>
                            <div class="col-8">
                                <?= $komik['penulis']; ?>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-4">
                                Publisher
                            </div>
                            <div class="col-8">
                                <?= $komik['penerbit']; ?>
                            </div>
                        </div>
                        <div class="row p-2 detail-item">
                            <div class="col-4">
                                Created At
                            </div>
                            <div class="col-8">
                                <?= $komik['create_at']; ?>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-4">
                                Last Update
                            </div>
                            <div class="col-8">
                                <?= $komik['updated_at']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
    <div class="row mb-5">
        <div class="col"
            data-aos="fade-left"
            data-aos-delay="1100"
            data-aos-duration="1000"
        >

                <p class='background-header text-center py-3 text-white mb-3'>Synopsis</p>
                <?= $komik['synopsis']; ?>

        </div>
    </div>

<?= $this->endSection(); ?>