<div class="row d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card row mt-3" style="width:80%;height:70vh;">

        <div class="col-md-6 d-flex justify-content-center align-items-center h-100">
            <span>
                <img src="<?= base_url('assets/img/checklist.png') ?>" alt="" style="width:250px;height:260px;object-fit:cover;">
                <h3 class="text-center ">Vote Berhasil</h3>
            </span>
        </div>
        <div class="col-md-6 p-4">
            <h3 class="text-center">Vote anda telah direkam </h3>
            <h6 class="mt-3  text-center">Perolehan suara saat ini</h6>
            <?php foreach ($vote_kandidat as $vk) : ?>
                <div class="card shadow-sm px-3 py-2 mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/kandidat/'.$vk['kandidat_foto'])?>" style="width:60px;height:60px;border-radius:100px;object-fit:cover;" alt="">
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <h6 class="text-left"><?= $vk['kandidat_nama'] ?></h5>
                        </div>
                        <div class="col-md-4 d-flex align-items-center" >
                            <div class="container">
                            <h5 class="text-center text-danger"><?= zero_helper($vk['kandidat_vote']) ?></h5>
                            <p class="text-center" style="margin-top: -5px;">suara</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>