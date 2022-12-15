<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="">
    <div class="paper-top-bottom-container w-100 fixed-top ">
        <img src="<?= base_url('assets/') ?>img/paper.png" class="paper-top-bottom w-100 fixed-top" alt="">
    </div>
    <div class="paper-top-bottom-container w-100 fixed-bottom ">
        <img src="<?= base_url('assets/') ?>img/paper.png" class="paper-top-bottom w-100 fixed-bottom paper-bottom" alt="">
    </div>
    <div class="row">
        <div class="d-none d-md-block d-lg-block d-xl-block col-md-6 vh-100 d-flex justify-content-center login-left-col auth-col" style="background-color:#003B06;top:-19px !important;">


            <div class="login-header mt-5 pt-5 ">
                <center>
                    <img src="<?= base_url('assets/') ?>img/logo.png" alt="" class="login-logo">
                </center>

                <h2 class="text-white text-center mt-5">Pemilihan Ketua PWM Daerah Kota Istimewa Yogyakarta </h2>
                <h5 class="text-white text-center mt-3">Pimpinan Adil Rakyat Makmur</h5>
            </div>


        </div>
        <div class="col-md-6 auth-righ-col d-flex justify-content-center auth-col align-items-center">
            <div class="auth-form-container " style="width:80%;">
                <h2 class="text-left">Sign In</h2>

                <?= $this->session->flashdata('message'); ?>

                <form action="<?= base_url('auth') ?>" class="mt-4" method="post">
                    <input type="text" class="form form-control" name="username" placeholder="Username . . . . .">
                    <input type="password" class="form form-control mt-3" name="password" placeholder="Password . . . . .">

                    <button type="submit" class="btn btn mt-4 text-white" style="background: #003B06;">Login</button>
                    <a href="<?= base_url('Home') ?>" class="btn btn-outline-success mt-4 ">Home</a>
                </form>

            </div>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>