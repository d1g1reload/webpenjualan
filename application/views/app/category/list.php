<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Kategori</h1>
</div>

<div class="row">
	<div class="col-md-12">
		<?php if ($this->session->flashdata('success')) : ?>
			<div class="alert alert-success" role="alert">
				<strong><?php echo $this->session->flashdata('success'); ?></strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>
		<?php endif; ?>

	</div>
</div>

<div class="row mt-5">
	<div class="cold-md-12">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			<i class="fas fa-plus"></i> Kategori
		</button>


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Form Kategori</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url('categories/add') ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label for="">Nama Kategori</label>
								<input type="text" class="form-control" name="name" required>
							</div>
							<div class="form-group">
								<label for="">Deskripsi Kategori</label>
								<textarea name="description" class="form-control" rows="10" cols="10"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="row mt-5">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table" id="table_product">
				<thead>
					<tr>
						<th>Nama Kategori</th>
						<th>Deskripsi Kategori</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($categories as $item) : ?>
						<tr>
							<td><?php echo $item->name ?></td>
							<td><?php echo $item->description ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
