<div class="main-panel">
    <div class="content">
       
        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Kandidat</div>
                            <div class="card-tools">

                                <button data-toggle="modal" data-target="#exampleModal" href="#" class="btn btn-success btn-round">Tambah Kandidat</button>


                                <a href="#" class="btn btn-info btn-border btn-round">
                                    <span class="btn-label">
                                        <i class="fa fa-print"></i>
                                    </span>
                                    Import
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
                                        <th scope="col">Nama Kandidat</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($kandidat as $kd) { ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td><?= $kd['kandidat_nama'] ?></td>
                                            <td><img src="<?= base_url('assets/kandidat/' . $kd['kandidat_foto']) ?>" style="width:100px;height:100px;object-fit:cover;" alt=""></td>
                                            <td><button data-toggle="modal" data-target="#detailsModal<?= $kd['kandidat_id'] ?>" href="" class="btn btn-primary btn-sm">Details</button><button data-toggle="modal" data-target="#editModal<?= $kd['kandidat_id'] ?>" href="" class="btn btn-warning btn-sm mx-2">Edit</button><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                                        </tr>


                                        <!-- details modal -->

                                        <div class="modal fade" id="detailsModal<?= $kd['kandidat_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Kandidat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="nama_kandidat">Nama Kandidat</label>
                                                                <input type="text" id="nama_kandidat" class="form form-control shadow-sm mt-2" name="nama_kandidat" value="<?= $kd['kandidat_nama'] ?>">

                                                                <label class="mt-3" for="visi">Visi Kandidat</label>
                                                                <textarea name="visi" id="visi" cols="30" rows="3" class="form form-control mt-2"><?= $kd['kandidat_visi'] ?></textarea>
                                                                <label class="mt-3" for="misi">Misi Kandidat</label>
                                                                <textarea name="misi" id="misi" cols="30" rows="3" class="form form-control mt-2"><?= $kd['kandidat_misi'] ?></textarea>
                                                            </div>
                                                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                                                <img src="<?= base_url('assets/kandidat/' . $kd['kandidat_foto']) ?>" style="width: 150px;height:150px;object-fit:cover;" alt="">

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- end details modal -->

                                        <!-- edit modal -->
                                        <div class="modal fade" id="editModal<?= $kd['kandidat_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kandidat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= base_url('admin/edit_kandidat/' . $kd['kandidat_id']) ?>" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="nama_kandidat">Nama Kandidat</label>
                                                                    <input type="text" id="nama_kandidat" class="form form-control shadow-sm mt-2" name="nama_kandidat" value="<?= $kd['kandidat_nama'] ?>">
                                                                    <label class="mt-3" for="visi">Visi Kandidat</label>
                                                                    <textarea name="visi_kandidat" id="visi" cols="30" rows="3" class="form form-control mt-2"><?= $kd['kandidat_visi'] ?></textarea>
                                                                    <label class="mt-3" for="misi">Misi Kandidat</label>
                                                                    <textarea name="misi_kandidat" id="misi" cols="30" rows="3" class="form form-control mt-2"><?= $kd['kandidat_misi'] ?></textarea>
                                                                </div>
                                                                <div class="col-md-6 d-flex justify-content-center align-items-center">

                                                                    <center><span>
                                                                            <img src="<?= base_url('assets/kandidat/' . $kd['kandidat_foto']) ?>" style="width: 150px;height:150px;object-fit:cover;" alt="">
                                                                            <input type="file" name="foto_kandidat" class="form form-control mt-3">
                                                                        </span>
                                                                    </center>
                                                                </div>
                                                            </div>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of edit modal -->
                                    <?php
                                        $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>

    <!-- Modal -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/tambah_kandidat') ?>" method="post" enctype="multipart/form-data">
                        <input type="text" name="nama_kandidat" class="form form-control" placeholder="Nama Kandidat">
                        <textarea name="visi_kandidat" id="" cols="30" rows="3" placeholder="Visi" class="form mt-2 form-control"></textarea>
                        <textarea name="misi_kandidat" id="" cols="30" rows="3" placeholder="Misi" class="form mt-2 form-control"></textarea>
                        <label for="foto" class="form-label mt-3">Foto Kandidat</label>
                        <input type="file" name="foto_kandidat" class="form form-control" id="foto">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>