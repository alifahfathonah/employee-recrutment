<div class="row mt-4">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Username</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Username">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" placeholder="Password">
				    </div>
				  </div>
				</form>
			</div>
			<div class="card-footer">
				<button class="btn btn-dark">Login</button>
			</div>
		</div>
	</div>
</div>