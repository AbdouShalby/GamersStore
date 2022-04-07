<?php $page = 'Home'; require_once APPROOT . '/src/views/include/header.php'; ?>
  <!-- Start Landing -->
  <div class="landing d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row align-items-center text-center text-light">
        <div class="col-lg-12">
          <div class="image">
            <img class="img-fluid" src="<?= URLROOT;?>/public/imgs/laptop.png" alt="Laptop">
          </div>
        </div>
        <div class="col-lg-12 pt-5">
          <a class="btn rounded-pill main-btn" href="#" data-scroll="latest">Check Out <i class="fa-solid fa-arrow-down"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Landing -->

  <!-- Start Latest -->
  <div class="latest text-center pt-5 pb-5" id="latest">
    <div class="container">
      <div class="main-title mt-5 mb-5 position-relative">
        <i class="fa-solid fa-computer fa-5x mb-4"></i>
        <h2>Latest</h2>
        <p class="text-black-50 text-uppercase">Prepare To Be Amazed</p>
      </div>
      <div class="row">
          <?php if (empty($data)) {
              echo '<h2 class="mb-0">No Items</h2>';
          } else {
            foreach ($data as $item) { ?>
            <div class="card mt-0 mb-4 m-auto" style="width: 17rem;">
                <span class="price badge fs-6 position-absolute start-0 mt-1 ms-1"><?= '$' .$item->price; ?></span>
                <img class="img-fluid mt-2" alt="<?= $item->description;?>" src="<?= URLROOT;?>/public/imgs/products/<?= $item->image ?>">
                <div class="card-body">
                    <h5 class="card-title fs-4 mb-3 pb-3 pt-3"><?= $item->name;?></h5>
                    <p class="card-text"><?= $item->description; ?></p>
                    <span class="stock text-center fs-6 d-block mt-5 mb-4 pt-1 pb-1">Available Quantity: <?= $item->stock; ?></span>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <button class="add-cart btn rounded-pill btn-outline-dark text-uppercase addToCart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
                    <?php } else { ?>
                        <a href="<?= URLROOT ?>/login" class="btn rounded-pill btn-outline-dark text-uppercase">Login To Add <i class="fa-solid fa-right-to-bracket"></i></a>
                    <?php } ?>
                    <span class="time text-center fs-6 d-block mt-4 pb-0"><?= $item->created_at; ?></span>
                </div>
            </div>
          <?php
            }
          } ?>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <a class="btn rounded-pill main-btn text-uppercase" href="<?= URLROOT; ?>/products">See More</a>
      </div>
    </div>
  </div>
  <!-- End Latest -->

  <!-- Start Brands -->
  <div class="brands pt-5 pb-5 text-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-01.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-02.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-03.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-04.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-05.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-06.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-07.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-08.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-09.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-10.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-11.png" alt="Brand">
        </div>
        <div class="col-sm-4 col-md-2 col-lg-1 mt-3 mb-3">
          <img class="img-fluid w-50" src="<?= URLROOT;?>/public/imgs/brands/brand-12.png" alt="Brand">
        </div>
      </div>
    </div>
  </div>
  <!-- End Brands -->

  <!-- Start Subscribe -->
  <div class="subscribe pt-5 pb-5 text-center text-md-start">
    <div class="container">
      <form class="row align-items-center">
        <div class="col-md-6 col-lg-3">
          <div class="fw-bold fs-5 mb-3">Subscribe to our Newsletter:</div>
        </div>
        <div class="col-md-6 col-lg-7 mb-5 mb-lg-0">
          <input class="w-100 text-light p-2 bg-transparent" type="email" placeholder="Enter E-Mail Address">
        </div>
        <div class="col-md-6 col-lg-2">
          <input class="btn rounded-pill" type="submit" value="Subscribe">
        </div>
      </form>
    </div>
  </div>
  <!-- End Subscribe -->
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>