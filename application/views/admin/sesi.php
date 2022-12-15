<!-- Modal -->



<div class="main-panel">
  <div class="content">



    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-head-row">
              <div class="card-title">Kandidat</div>
              <div class="card-tools">




                <a href="#" data-toggle="modal" data-target="#tambahSesiModal" class="btn btn-success btn-round">
                  <span class="btn-label">
                    <i class="fa fa-plus"></i>
                  </span>
                  Tambah Sesi
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">


            <div class="row">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Sesi</th>
                    <th scope="col">Kode Sesi</th>
                    <th scope="col">Status Sesi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($sesi as $s) :
                  ?>
                    <tr>
                      <th scope="row"><?= $i ?></th>
                      <td><?= $s['sesi_nama'] ?></td>
                      <td><?= $s['sesi_kode'] ?></td>
                      <td><?= sesi_status($s['sesi_status']) ?></td>

                      <td><a href="<?= base_url('admin/sesi_details/' . $s['sesi_kode']) ?>" class="btn btn-primary btn-sm">Details</a>
                        <?php if ($s['sesi_status'] == 1) { ?>
                          <a href="<?= base_url("admin/stop_sesi_list/" . $s['sesi_kode']) ?>" class="ml-2 btn btn-danger btn-sm">Stop</a>
                        <?php } else { ?>
                          <a href="<?= base_url("admin/mulai_sesi_list/" . $s['sesi_kode']) ?>" class="ml-2 btn btn-success btn-sm">Start</a>
                        <?php } ?>
                      </td>

                    </tr>
                    <!-- data-toggle="modal" data-target="#detailsSesiModal" -->




                    <!-- modal detail  -->


                    <div class="modal fade" id="detailsSesiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Detail Sesi <?= $s['sesi_nama'] ?></h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6">
                                <h5>Nama sesi : <?= $s['sesi_nama'] ?></h5>
                                <h5>Status sesi : <?= $s['sesi_status'] ?></h5>

                              </div>
                              <div class="col-md-6">

                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>

                          </div>
                        </div>
                      </div>
                    </div>





                  <?php

                    $i++;
                  endforeach; ?>






                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>

  <!-- Modal -->
  <div class="modal fade" id="tambahSesiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Sesi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('admin/tambah_sesi') ?>" method="post">
            <input type="text" name="nama_sesi" placeholder="Nama Sesi" class="form form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="detailsSesiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Detail Sesi <= ?>
          </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <h5>Nama Sesi </h5>
            </div>
            <div class="col-md-6">

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>

        </div>
      </div>
    </div>
  </div>