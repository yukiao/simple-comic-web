<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
    <div class="container">
        <div class="row" style="height: 85vh; margin-top:2vh">
            <div class="col-md-12 col-lg-6 px-5 d-flex flex-column justify-content-center" 
                 data-aos="zoom-in"
                 data-aos-delay="800"
                 data-aos-duration="1000"
                >
                <h1 class="carousel-title text-center"><strong style="color: #463853">EXPLORE YOUR FAVORITE COMIC</strong></h1>
                <p class="carousel-text mt-3 mb-5" style="color: #9d99ba">We provide you with huge amount of comic. We have large database and you can search for your favorite comic with us</p>
                <a style="background-color:#8e51c7" class="btn btn-primary w-50 py-3 mx-auto" href='/comic'>Explore</a>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center px-5" 
                 data-aos="fade-left"
                 data-aos-delay="600"
                 data-aos-duration="1000"
            >
                <img src="/home_carouserl.png"  class="w-100 d-none d-lg-block"/>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>