<h2 class="text-center text-white mb-5">Pilih Kandidat</h2>



<!-- leftside  -->
<div class="container-vote  d-flex w-100 justify-content-center">



<div class="d-flex w-100 justify-content-center">
    <span>
        <form action="<?= base_url('user/vote_submit')?>" method="post">
    <?php foreach ($vote_kandidat as $vk) : ?>
        <label class="labelexpanded">
            <input type="radio" name="vote_kandidat" value="<?= $vk['kandidat_id'] ?>" required>
            <div class="radio-btns">
                <img src="<?= base_url('assets/kandidat/' . $vk['kandidat_foto']) ?>" />
                <p> <?= $vk['kandidat_nama'] ?> </p>
            </div>
            </input>
        </label>
    <?php endforeach; ?>
    <br>
    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmSubmitModal" class="btn btn-light w-100 mt-3">Vote</button>
    <!-- modal confirm -->
    <div class="modal fade" id="confirmSubmitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <h6 class="text-center">Apakah anda yakin untuk submit?</h6>
       <button class="btn btn-primary w-100 mt-3" type="submit">Konfirmasi Submit</button>
      </div>
      
    </div>
  </div>
</div>
    </form>
    </span>
</div>
</div>
<!-- <label class="labelexpanded">
        <input type="radio" name="targetgroup">
        <div class="radio-btns"> <img src="user-astronaut.png">
            <p> Software Engineer </p>
        </div>
    </label>

    <label class="labelexpanded">
        <input type="radio" name="targetgroup">
        <div class="radio-btns"> <img src="user-tag.png">
            <p> Project Manager </p>
        </div>
    </label>

    <label class="labelexpanded">
        <input type="radio" name="targetgroup" checked>
        <div class="radio-btns"> <img src="user-tie.png">
            <p> Business Stakeholder </p>
        </div>
    </label> -->