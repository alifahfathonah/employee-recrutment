<!DOCTYPE html>
<html>
<head>
	<title>Raharja</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="<?= base_url() ?>/assets/img/logo.png" width="150px">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page') ?>">Home</a>
      </li>
      <?php if(! $this->session->has_userdata('username')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/registrasi') ?>">Registrasi</a>
      </li>
      <li class="nav-itme">
        <a class="nav-link" href="<?= base_url('page/login') ?>">Login</a>
      </li>
      <?php else: ?>
      <li class="nav-itme">
        <a class="nav-link" href="<?= base_url('pelamar/logout') ?>">Logout</a>
      </li>
      <?php endif; ?>
      <?php if($this->session->has_userdata('username')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/career') ?>">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/test') ?>">Test Online</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
 </div>
</nav>

<div class="container">

<?= $content_view ?>
	
</div>

<div class="footer text-center text-secondary mt-5 navbar-expand-lg navbar-bottom">
CopyRight &copy; 2019 
</div>

<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/pover.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>

<script type="text/javascript" src="<?= base_url() ?>/assets/js/scripts.js"></script>
</body>
</html>