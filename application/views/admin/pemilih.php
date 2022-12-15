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

                <button href="#" data-toggle="modal" data-target="#tambahModal" class="btn btn-success btn-round">Tambah</button>


                <a href="#" data-toggle="modal" data-target="#excelModal" class="btn btn-info btn-border btn-round">
                  <span class="btn-label">
                    <i class="fa fa-print"></i>
                  </span>
                  Import Excel
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">

            <form action="<?= base_url('admin/pemilih/') ?>" method="get">
              <div class="input-group shadow-sm">

                <input type="text" placeholder="Search ..." name="keyword" class="form-control">
                <div class="input-group-prepend">
                 
                  <button type="submit" class="btn btn-search bg-primary text-white">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>

              </div>
            </form>

            <div class="row">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kandidat</th>
                    <th scope="col">username</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($pemilih as $p) :
                  ?>
                    <tr>
                      <th scope="row"><?= $i ?></th>
                      <td><?= $p['nama'] ?></td>
                      <td><?= $p['username'] ?></td>
                      <td><button data-toggle="modal" data-target="" href="" class="btn btn-primary btn-sm">Details</button><button data-toggle="modal" data-target="#editModal<?= $p['id'] ?>" href="" class="btn btn-warning btn-sm mx-2">Edit</button><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>

                    <div class="modal fade" id="editModal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('admin/tambah_pemilih') ?>" method="post">
                              <label for="nama" class="">nama</label>
                              <input type="text" id="nama" class="form form-control " value="<?= $p['nama'] ?>" name="user_nama" required placeholder="Nama Pemilih">
                              <label for="id" class="mt-3">id</label>
                              <input type="text" id="username" class="form form-control " name="user_username" value="<?= $p['username'] ?>" required placeholder="Username">



                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Pemilih</button>
                            </form>
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

  <!-- modal -->
  <div class="modal fade" id="excelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <a href="<?= base_url('assets/import_template.xlsx')?>" class="btn btn-primary btn-sm mb-3" download>
                      Download Template
                  </a>
          <form action="<?= base_url('admin/import_excel') ?>" method="post" enctype="multipart/form-data">
            <input type="file" class="form form-file" name="upload_file">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('admin/tambah_pemilih') ?>" method="post">
            <input type="text" class="form form-control mt-3" name="user_nama" required placeholder="Nama Pemilih">
            <input type="text" class="form form-control mt-3" name="user_username" required placeholder="Username">
            <input type="password" class="form form-control mt-3" name="password" required placeholder="Password">


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Pemilih</button>
          </form>
        </div>
      </div>
    </div>
  </div>