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
          <a class="nav-link active" aria-current="page" href="<?= base_url('Home') ?>">Home</a>
         
          <a class="nav-link" href="<?= base_url('user/sesi_vote')?>">Votting</a>
      
          <a class="nav-link btn btn text-white" href="<?= base_url('auth/log_out')?>"style="background: #003B06;">Log-Out</a>
        </div>
      </div>
    </div>
  </nav>

  <img src="<?= base_url('assets/') ?>img/paper.png" class="paper-nav w-100" alt="">
</div>