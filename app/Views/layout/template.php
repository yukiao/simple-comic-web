<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title><?= $title ;?></title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    *{
      font-family: 'Montserrat'
    }
      nav{
        height: 10vh;
        font-size: 1.3rem;
      }
      .carousel-title{
        font-size: 3rem
      }
      .carousel-text{
        font-size: 2rem
      }
      li a{
        color: #8e51c7 !important;
      }
      li a:hover{
        color: #8e51c7 !important;
        font-weight: 700 !important;
      }
      li.active a.page-link{
        color: white !important;
        background-color: #8e51c7 !important;
      }
      td img{
        width: 100px;
      }
      .table > tbody > tr > *{
        vertical-align: middle;
      }
      p{
        margin-bottom: 0;
      }
      button.search-button {
        height: 50px;
        width: 50px;
        border-radius: 50px;
        background-color: #8e51c7;
        color: white  ;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        border: none;
      }
      button.search-button:hover{
        cursor: pointer;
      }
      .search-form{
        height: 50px;
        margin: auto;
        border-radius: 50px;
        display: flex;
        border: 2px solid #525c68;
        border-right: none;
        padding-left: 20px;
        align-items: center;
        width: 80%;
        margin: auto;
        justify-content: space-between;
      }
      .search-input{
        border: none;
        outline: none;
      }
    </style>
  </head>
  <body>
    <nav data-aos="fade-down" 
      data-aos-delay="100"
      data-aos-duration="1000"
      class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
    
      <a class="navbar-brand" href="#">ComicID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/comic">Comic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/about">About</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    
    <?= $this->renderSection('content'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <?= $this->renderSection('script'); ?>
  </body>
</html>