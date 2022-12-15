<div class="main-panel">
	<div class="content">
		<div class="panel-header ">
			<div class="page-inner py-3 bg-primary-gradient">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div class="mt-6">
						<h2 class="text-white fw-bold">Kandidat</h2>

					</div>
					<div class="ml-md-auto py-2 py-md-0">
						<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
						<button data-toggle="modal" data-target="#exampleModal" href="#" class="btn btn-secondary btn-round">Tambah Kandidat</button>
					</div>
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">

		</div>


		<div class="row mt-4">
			<?php foreach ($kandidat as $kd) { ?>
				<div class="col-12 col-md-6 col-lg-4 d-flex justify-content-end" style="width:200px;">
					<div class="card shadow" style="width: 18rem;">
						<center><img class="card-img-top" src="<?= base_url('assets/kandidat/' . $kd['kandidat_foto']) ?>" style="width:50%;height:150px;object-fit:cover;" alt="Card image cap"></center>
						<div class="card-body">
							<h5 class="card-title text-center"><?= $kd['kandidat_nama'] ?></h5>

							<center class="mt-2"> <a href="#" class="btn btn-primary btn-sm">Details</a> <a href="#" class="btn btn-warning btn-sm">edit</a> <a href="#" class="btn btn-danger btn-sm">delete</a></center>
						</div>
					</div>
				</div>
			<?php } ?>
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