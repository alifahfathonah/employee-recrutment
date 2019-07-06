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
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/registrasi') ?>">Registrasi</a>
      </li>
      <li class="nav-itme">
        <a class="nav-link" href="<?= base_url('page/login') ?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/career') ?>">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('page/test') ?>">Test Online</a>
      </li>
    </ul>
  <!--   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
 </div>
</nav>

<div class="container">

<?= $content_view ?>
	
</div>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/pover.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>

<script type="text/javascript" src="<?= base_url() ?>/assets/js/scripts.js"></script>
</body>
</html>