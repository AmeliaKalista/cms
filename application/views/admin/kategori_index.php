<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class=" mt-3 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Kategori
		</button>

		<!-- Modal -->
		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-6">
									<label class="form-label">Nama Kategori</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required />
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary"
								data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<h5 class="card-header">Kategori Konten</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori Konten</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php $no=1; foreach($kategori as $aa) { ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $aa['nama_kategori']?></td>
					<td>
						<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
							class="btn btn-outline-primary btn-fw"
							onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
								class="tf-icons icon-trash"></span></a>
						<button type="button" class="btn btn-outline-info btn-fw" data-bs-toggle="modal"
							data-bs-target="#edit<?= $aa['id_kategori']?>">
							<span class="ti-file btn-icon-append"></span>
						</button>
						<div class="modal fade" id="edit<?= $aa['id_kategori']?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<form action="<?= base_url('admin/kategori/update') ?>" method="post">
								<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-6">
													<label class="form-label">Nama Kategori Konten</label>
													<input type="text" class="form-control" value="<?= $aa['nama_kategori'] ?>"
														name="nama_kategori" />
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-outline-secondary"
												data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
								</form>
							</div>
						</div>
					</td>
				</tr>
				<?php $no++;} ?>
			</tbody>
		</table>
	</div>
</div>
</div>
