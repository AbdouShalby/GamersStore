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
                  <div class="col-sm-6 col-md-4 col-lg-3 text-start">
                      <div class="box mb-3 bg-white" data-work="<?= $item->name;?>">
                          <span class="price badge fs-6 ms-2 me-5"><?= '$' .$item->price; ?></span>
                          <img class="img-fluid" src="<?= URLROOT;?>/public/imgs/products/<?= $item->image ?>" alt="<?= $item->name;?>">
                          <span class="time text-center fs-6 d-block text-black-50"><?= $item->created_at; ?></span>
                      </div>
                      <div class="text-center">
                          <button class="add-cart btn rounded-pill btn-outline-dark text-uppercase mb-5">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></button>
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