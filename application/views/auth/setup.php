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
    <div class="paper-top-bottom-container w-100 fixed-top " >
       <img src="<?= base_url('assets/') ?> img/paper.png" class="paper-top-bottom w-100 fixed-top" alt="">
    </div>
    <div class="paper-top-bottom-container w-100 fixed-bottom " >
        <img src="<?= base_url('assets/') ?>img/paper.png" class="paper-top-bottom w-100 fixed-bottom paper-bottom" alt="">
     </div>
    <div class="row">
        <div class="d-none d-md-block d-lg-block d-xl-block col-md-6 vh-100 d-flex justify-content-center login-left-col auth-col" style="background-color:#3560F9;">
        
       
            <div class="login-header">
                <center>
            <img src="<?= base_url('assets/') ?>img/logo.png" alt="" class="login-logo">
        </center>

            <h2 class="text-white text-center">Pemilihan ketua PWM daerah kota Yogyakarta istimewa</h2>
            <h5 class="text-white text-center">Pimpinan Adil Rakyat Makmur</h5>
        </div>
        
           
        </div>
        <div class="col-md-6 auth-righ-col d-flex justify-content-center auth-col align-items-center">
            <div class="auth-form-container " style="width:80%;">
                <h2 class="text-left">SETUP ADMINISTRATOR</h2>
                <form action="<?= base_url('auth/setup_administrator') ?>" method="post" class="mt-4">
                    <input type="text" class="form form-control" name="username" required placeholder="Username">
                    <input type="text" class="form form-control mt-3" required name="password1"placeholder="Password">
                    <input type="text" class="form form-control mt-3"  required name="password2"placeholder="Confirm password">
                    <button type="submit" class="btn btn-primary mt-4 btn-auth" >SETUP</button>

                </form>
               
                
            </div>
            
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>