<div class="vote-tersedia w-100 p-5" style="height:90vh;">
  <h3 class="text-white text-center">Sesi tersedia untuk anda</h3>
  <div class="card-container w-100 mt-5 ">
    <?php foreach ($sesi_vote as $sv) : ?>
      <?php if ($sv['vote_user_id'] != $user['id']) { ?>

        <div class="card bg-white mx-auto mt-3 p-3" style="width:50%;">
          <h5 class="text-center"><?= $sv['sesi_nama'] ?></h5>

          <center><button type="button" class="btn btn-success" style="width: 30%;" data-bs-toggle="modal" data-bs-target="#confirmVoteModal">Vote</button></center>
        </div>


        <!-- confirm vote modal -->
        <div class="modal fade" id="confirmVoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vote <?= $sv['sesi_nama'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h6>Apakah anda yakin ingin memulai vote <?= $sv['sesi_nama'] ?> ?</h6>
                <a href="<?= base_url('user/vote/' . $sv['sesi_kode']) ?>" class="btn btn-success w-100 p-1 mt-3">Mulai Vote</a>
              </div>
              <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
            </div>
          </div>
        </div>


      <?php } ?>
    <?php endforeach; ?>

  </div>
</div>