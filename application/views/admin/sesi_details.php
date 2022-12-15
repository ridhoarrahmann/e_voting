<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Sesi Details</h2>
                        <!-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> -->
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <?php if ($sesi_details['sesi_status'] == 0) { ?>
                            <a href="#" data-toggle="modal" data-target="#startSesiModal" class="btn btn-success btn-round mr-2">Mulai Sesi</a>
                            <!-- modal mulai sesi -->
                            <div class="modal fade" id="startSesiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mulai Sesi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Konfirmasi untuk memulai sesi
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('admin/mulai_sesi/' . $sesi_details['sesi_kode']) ?>" class="btn btn-primary">Mulai Sesi </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>

                            <a href="#" data-toggle="modal" data-target="#stopSesiModal" class="btn btn-danger btn-round mr-2">Stop Sesi</a>
                            <div class="modal fade" id="stopSesiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hentikan Sesi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Konfirmasi untuk menghentikan sesi
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('admin/stop_sesi/' . $sesi_details['sesi_kode']) ?>" class="btn btn-primary">Hentikan Sesi </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-secondary btn-round">Add Customer</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Overall statistics</div>
                            <div class="card-category">Daily information about statistics in system</div>
                            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                    <h1 class="text-primary"><?= $ov_stats['count_pemilih'] ?></h1>
                                    <h6 class="fw-bold mt-3 mb-0">Jumlah Pemilih</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                    <h1 class="text-success"><?= $ov_stats['count_kandidat'] ?></h1>
                                    <h6 class="fw-bold mt-3 mb-0">Jumlah Kandidat</h6>
                                </div>
                                <div class="px-2 pb-2 pb-md-0 text-center">
                                    <h1 class="text-danger"><?= $ov_stats['count_suara'] ?></h1>
                                    <h6 class="fw-bold mt-3 mb-0">Suara terkumpul</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Tentang Sesi</div>
                            <div class="row py-3">
                                <div class="sesi-info px-3">
                                    <h6>Nama Sesi : <?= $sesi_details['sesi_nama'] ?></h6>
                                    <h6> Status : <?= sesi_status($sesi_details['sesi_status']) ?></h6>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Manajemen Kandidat</div>
                                <div class="card-tools">
                                    <a href="#" data-toggle="modal" data-target="#tambahKandidatModal" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        Tambah Kandidat
                                    </a>

                                    <!-- modal tambah kandidat -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="tambahKandidatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/tambah_kandidat_sesi/' . $sesi_details['sesi_kode']) ?>" method="post" enctype="multipart/form-data">
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
                                    <!-- end modal tambah kandidat -->
                                    <!-- <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Print
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="min-height: 375px">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jumlah Suara</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kandidat as $k) : ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?= $k['kandidat_nama'] ?></td>
                                            <td><?= zero_helper($k['kandidat_vote']) ?></td>
                                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailKandidatModal<?= $k['kandidat_id'] ?>">details</button></td>
                                        </tr>

                                        <!-- detail kandidat modal -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="detailKandidatModal<?= $k['kandidat_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Kandidat detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <center><img src="<?= base_url('assets/kandidat/' . $k['kandidat_foto']) ?>" alt="" class="ms-auto me-auto" style="width:100px;height:100px;"></center>
                                                        <div class="row px-4 mt-3">

                                                            <div class="col-md-6">

                                                                <label for="nama">Nama Kandidat</label>
                                                                <input type="text" readonly class="form form-control mb-3" id="nama" value="<?= $k['kandidat_nama'] ?>"></input>
                                                                <label for="visi">Visi Kandidat</label>
                                                                <input type="text" readonly class=" form form-control mb-3" id="visi" value="<?= $k['kandidat_visi'] ?>"></input>
                                                                <label for="misi">Misi Kandidat</label>
                                                                <input readonly type="text" class="form form-control mb-3" id="misi" value="Misi : <?= $k['kandidat_misi'] ?>"></input>


                                                            </div>
                                                            <div class="col-md-6  d-flex align-items-center">
                                                                <div class="container">
                                                                    <h5 class="text-center">Perolehan Suara</h5>
                                                                    <h1 class="text-center text-success"><?= zero_helper($k['kandidat_vote']) ?></h1>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">Perolehan Suara</div>
                            <!-- <div class="card-category">March 25 - April 02</div> -->
                        </div>
                        <div class="card-body pb-0">
                            <!-- <div class="mb-4 mt-2">
                                <h1>$4,578.58</h1>
                            </div>
                            <div class="pull-in">
                                <canvas id="dailySalesChart"></canvas>
                            </div> -->
                            <?php foreach ($kandidat as $k) : ?>
                                <div class="card p-3 text-dark" style="width:100%">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center ">
                                            <h6 style="font-size: 20px ;"><?= $k['kandidat_nama'] ?></h6>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 style="font-size: 20px ;" class="text text-danger text-center"><?= zero_helper( $k['kandidat_vote']) ?></h6>
                                            <p class="text text-center" style="margin-bottom: -10px;margin-top:-10px;">Suara</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <h4 class="card-title">Pemilih</h4>
                                <div class="card-tools">
                                    <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
                                    <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
                                    <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
                                </div>
                            </div>


                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive table-hover table-sales">
                                    <form action="<?=base_url('admin/sesi_details/'.$sesi_details['sesi_kode'])?>" method="get">
                                        <div class="input-group shadow-sm">
                                           
                                            <input type="text" placeholder="Search ..." name="keyword"class="form-control">
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-search bg-primary text-white">
                                                    <i class="fa fa-search search-icon"></i>
                                                </button>
                                            </div>
                                          
                                        </div>  </form>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Pemilih</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($pemilih as $p) : ?>
                                                    <tr>
                                                        <td>
                                                            1
                                                            <!-- <div class="flag">
                                                            <img src="../assets/img/flags/id.png" alt="indonesia">
                                                        </div> -->
                                                        </td>
                                                        <td><?= $p['nama'] ?></td>
                                                        <td>
                                                            <?= check_user_vote($p['vote_id']) ?>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm">Detail</button>
                                                        </td>
                                                    </tr>


                                                <?php endforeach; ?>




                                            </tbody>
                                        </table>
                                        <?= $pagination ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
</div>