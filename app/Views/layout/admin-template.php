<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="/css/admin.css">
        <title><?= $title; ?></title>
    </head>
    <body>
    <nav data-aos="fade-down" 
      data-aos-delay="100"
      data-aos-duration="1000"
      class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
        
        <a class="navbar-brand" href="/">ComicID</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown d-flex align-items-center">
                    <span class="avatar"><i class='fas fa-user text-white'></i></span>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $_SESSION['user_name']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/">Home</a>
                    <a class="dropdown-item" href="/comic">Comic List</a>
                    <a class="dropdown-item" href="/login/logout">Logout</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
        <!-- <div class='sidebar'>
            <ul class="mt-5 pt-5">
                <li class="mb-3"><i class="fas fa-plus mr-2"></i> Create</li>
                <li class="my-3"><i class="fas fa-trash-alt mr-2"></i> Delete</li>
                <li class="my-3"><i class="fas fa-pen mr-2"></i> Update </li>
                <li class="my-3"><i class="fas fa-sign-out-alt mr-2"></i> Logout</li>
            </ul>
        </div> -->

        <?= $this->renderSection('content'); ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        
        <?= $this->renderSection('script'); ?>
        <script>
        function previewImage(){
            const sampul = document.querySelector('#sampul');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            sampulLabel.textContent = sampul.files[0].name;

            const fileSampul =  new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e){
                imgPreview.src = e.target.result;
            }
        }
        </script>
    
    </body>
</html>