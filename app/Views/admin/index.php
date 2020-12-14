<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/admin.css">
        <title>Login</title>
    </head>
    <body>
        <div class="landing">
            <div class="row">
                <div class="col-8">
                    <img src="/admin_login.jpg" alt="image" class="landing-image">
                </div>
                <div class="col-4 d-flex flex-column justify-content-center">
                    <div class="container ">
                        <div class="text-center">
                            <h1>Sign In</h1>
                            <p>Login to your account and start everything</p>
                            <?php if(session()->getFlashdata('msg')):?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                            <?php endif;?>
                        </div>
                        <form class="d-flex flex-column mt-5" action="/login/auth">
                            <label for="username">
                                Email
                            </label>
                            <input type="text" required placeholder="email" id="email" name="email" />
                            <label for="password" class="mt-3">
                                Password
                            </label>
                            <input type="password" required placeholder="password" id='password' name="password">
                            <button type="submit" class="btn btn-primary mt-5 w-50 mx-auto py-2 d-inline-block mx-auto" style="background-color: #8e51c7; border-radius: 50px">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>