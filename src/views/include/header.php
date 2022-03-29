<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITENAME?></title>
    <link rel="stylesheet" href="<?= URLROOT;?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URLROOT;?>/public/css/all.min.css">
    <link rel="stylesheet" href="<?= URLROOT;?>/public/css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
  </head>
  <body id="home">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="<?= URLROOT; ?>" data-scroll="home">
          <img class="img-fluid w-75" src="<?= URLROOT;?>/public/imgs/logo2.png" alt="Brand Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="main">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 <?php if($page == 'Home'){echo 'active';} ?>" aria-current="page" href="<?= URLROOT; ?>" data-scroll="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 <?php if($page == 'Products'){echo 'active';} ?>" href="<?= URLROOT; ?>/products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 <?php if($page == 'About'){echo 'active';} ?>" href="<?= URLROOT; ?>/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 <?php if($page == 'Contact'){echo 'active';} ?>" href="<?= URLROOT; ?>/contact">Contact</a>
            </li>
          </ul>
          <a class="btn rounded-pill main-btn" href="<?= URLROOT; ?>/login">Login</a>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->