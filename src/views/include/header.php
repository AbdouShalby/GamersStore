<?php
    session_start();
    if(isset($_SESSION['user'])){
        if($page == 'Profile'){
            $button = '<a class="text-decoration-none text-white" href="' . URLROOT . '/profile">
                <i class="avatar p-2 p-lg-3 fa fa-user-circle fa-2x active"></i>
            </a>';
        } else {
            $button = '<a class="text-decoration-none text-white" href="' . URLROOT . '/profile">
                <i class="avatar p-2 p-lg-3 fa fa-user-circle fa-2x"></i>
            </a>';
        }

    } else {
        $button = '<a class="btn rounded-pill main-btn" href="' . URLROOT . '/login">Login <i class="fa-solid fa-right-to-bracket"></i></a>';
    }
?>

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
        <a class="navbar-brand  me-0" href="<?= URLROOT; ?>" data-scroll="home">
          <img class="img-fluid" src="<?= URLROOT;?>/public/imgs/logo2.png" alt="Brand Logo">
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
          <?php echo $button;
          if (isset($_SESSION['user'])) {
              echo '
              <div class="cart fs-5">
                <a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="countItem">0</span>
                </a>
            </div>';
          } ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->