<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css">


    <title>Medical-Services</title>

</head>
<body>
    <!-- Navbar 2021 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-sm-6 offset-sm-3 border p-3 mt-3">
        <h1 class="alert alert-info text-center" role="alert">Medical-Services  </h1>
</div>
</div>
</div>

<!-- optimal javascript  -->
<!-- JQuery first, then Popper , then Bootstrap  -->
<script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
<script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
<script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>

</body>
</html>