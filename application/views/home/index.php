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

<body style="background: #003B06;">
  <!-- navbar -->
  <div class="navbar-container sticky-top" style="z-index: 99;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: white !important;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">E-Votting</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class=" ms-auto navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="<?= base_url('User') ?>">Kandidat</a>
            <a class="nav-link" href="#">Votting</a>
            <a class="nav-link ">Kontak</a>
            <a class="nav-link btn btn text-white" style="background: #003B06;" href="<?= base_url('Auth') ?>">Login</a>
          </div>
        </div>
      </div>
    </nav>

    <img src="<?= base_url('assets/') ?>img/paper.png" class="paper-nav w-100" alt="">
  </div>



  <!-- home header -->

  <div class="home-header " style="margin-left: 0px;">
    <div class="row">
      <div class="col-md-7 left-col-home-header d-flex align-items-center">
        <span>
          <h2>Sistem informasi E-Voting Pemilihan ketua PWM kota Yogyakarta online berbasis web</h2>
          <p>Selamat datang di sistem informasi e-voting PWM Yogyakarta yang dibuat berbasis web sehingga bisa diakses dari mana saja dan kapan saja</p>
          


          <a href="<?= base_url('Auth') ?>" class="btn btn-outline-light mt-4">Pilih Kandidat</a>
        </span>
      </div>
      <div class="col-md-5 right-col-home-header d-flex justify-content-center ">
        <img src="<?= base_url('assets/') ?>img/logo.png" alt="">
      </div>
    </div>
  </div>

  <div class="home-header" style=" background-color: white;">
    <div class="row">
      <div class="col-md-5 right-col-home-header d-flex justify-content-center ">
        <img src="<?= base_url('assets/') ?>img/abc.png" alt="">
      </div>
      <div class="col-md-7 px-5 left-col-home-header d-flex align-items-center text-dark">
        <span>
          <h2>Apa Itu E-voting? Dan Bagaimana Cara Menggunakannya?</h2>
          <p>Sistem Electronic Voting (e-Voting) adalah sebuah sistem yang memanfaatkan perangkat elektronik dan mengolah informasi digital untuk membuat surat suara, memberikan suara, menghitung perolehan suara, mengirim hasil perolehan suara, menayang kan perolehan suara, memelihara dan menghasilkan perhitungan suara.
            selain itu, cara menggunakan e-voting bisa melalui media internet secara online dan bisa dimanapun dan kapanpun</p>

        </span>
      </div>

    </div>
  </div>

  <!-- footer -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5">
      <div class="container">

          <div class="row">
              <div class="col-md-5 mt-5 px-5">
                      <h3 class="text-white mb-4">Cari tahu kami di </h3>
                      <p> Jl. Nitikan Baru No.48, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162, Indonesia</p>
                      <p> +62274370850</p>
                      <p> http://smkmuh1-yog.sch.id/</p>
                      <div class="d-flex justify-content-start mt-4">
                          <a class="text-white mr-4" href="https://twitter.com"><i class="fab fa-2x fa-twitter"></i></a>
                          <a class="text-white mr-4" href="https://facebook.com"><i class="fab fa-2x fa-facebook-f"></i></a>
                          <a class="text-white" href="https://instagram.com"><i class="fab fa-2x fa-instagram"></i></a>
                      </div>
              </div>
            
              <div class="col-md-3 mt-5">
                  <h3 class="text-white mb-4">Quick links </h3> 
                  <div class="d-flex flex-column justify-content-start">
                      <a class="text-white-50 mb-3" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                      <a class="text-white-50 mb-3" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                      <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                  </div>
                </div>
                
                <div class="col-md-1">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7162993087995!2d110.38023101500599!3d-7.819823979825858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a570bcf1fa267%3A0x832cbd3fcbba29ae!2sSMK%20Muhammadiyah%201%20Yogyakarta!5e0!3m2!1sid!2ssg!4v1670943755340!5m2!1sid!2ssg" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              <!-- Maps -->
              
      </div>

      </div>
  </div>

  <div class="container-fluid text-white-50 bg-dark border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                  <p class="m-0">Copyright &copy; E-voting<a class="text-white"></a>. All Rights Reserved.
                  </p>
              </div>
              <div class="col-md-6 text-center text-md-right">
                  <p class="m-0">Designed by <a class="text-white" href="">anakitmuhi</a>
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>