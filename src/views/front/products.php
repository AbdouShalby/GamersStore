<?php $page = 'Products'; require_once APPROOT . '/src/views/include/header.php'; ?>
  <!-- Start Products -->
  <div class="products text-center pt-5 pb-5">
    <div class="container">
      <div class="main-title mb-5 position-relative">
        <i class="fa-solid fa-computer fa-5x mb-4"></i>
        <h2>Products</h2>
        <p class="text-black-50 text-uppercase">Prepare To Be Amazed</p>
      </div>
        <?php
        if (isset($_SESSION['product_created'])) {
            echo "<div class='p-2 mt-2 pb-2 mb-2 alert alert-success w-25 m-auto'>". $_SESSION['product_created'] ."</div>";
            unset($_SESSION['product_created']);
        }
        ?>
      <div class="row">
          <?php if (empty($data)) {
              echo '<h2 class="mb-5">No Items</h2>';
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
    </div>
  </div>
  <!-- End Products -->
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>