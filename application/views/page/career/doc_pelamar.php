<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">UPLOAD DOCUMENT PENDUKUNG PELAMAR</div>
			<div class="card-body">
				<form>
					<div class="form-group">
						<label>Curiculum Vitae</label>
					  	<div class="custom-file">
						  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
						  <label class="custom-file-label" for="customFileLang">Curiculum Vitae</label>
						</div>
						<small>*) Format File "PDF" dan Ukuran 400 kb</small>
					</div>
					<div class="form-group">
						<label>Overing Letter</label>
						<div class="custom-file">
						  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
						  <label class="custom-file-label" for="customFileLang">Overing Letter</label>
						</div>
						<small>*) Format File "PDF" dan Ukuran 400 kb</small>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<button class="btn btn-dark">Apply</button>
				<button class="btn btn-secondary">Upload Dokumen Pendukung </button>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><a href="<?= base_url('page/cara_apply') ?>">Tata Cara Apply</a></li>
				<li class="list-group-item"><a href="<?= base_url('page/klasifikasi') ?>">Klasifikasi </a></li>
				<li class="list-group-item"><a href="<?= base_url('page/career') ?>">Daftar Lowongan Kerja</a></li>
				<li class="list-group-item"><a href="<?= base_url('page/doc_pelamar') ?>">Upload Document</a></li>
			</ul>
		</div>
	</div>
</div>