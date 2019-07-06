<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">Registrasi </div>
			<div class="card-body">
				<form>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Nama">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" placeholder="Alamat"></textarea>
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal lahir</label>
				    <div class="col-sm-10">
				      <input type="date" class="form-control">
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				  	<div class="col-sm-10">
				  		<select class="form-control">
				  			<option>Laki laki</option>
				  			<option>Perempuan</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">No KTP</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Nama">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Nama">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Nama">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Nama">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Nama">
				    </div>
				  </div>
				</form>
			</div>
			<div class="card-footer">
				<button class="btn btn-dark">Registrasi</button>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header text-center">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
			    <li class="list-group-item"><a href="<?= base_url('page') ?>">Login Pelamar</a></li>
			</ul>
		</div>

		<div class="card mt-4">
			<div class="card-header">Share</div>
			<div class="card-body">
				<?php
					$month= date ("m");
					$year=date("Y");
					$day=date("d");
					$endDate=date("t",mktime(0,0,0,$month,$day,$year));
					echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
				?>
			</div>
			<div class="card-footer">
				<div class="jam-digital">
					<p id="jam" class="badge badge-dark p-1"></p>
					<p id="menit" class="badge badge-dark p-1"></p>
					<p id="detik" class="badge badge-dark p-1"></p>
				</div>
			</div>
		</div>
	</div>
</div>