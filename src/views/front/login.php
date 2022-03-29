<?php require_once APPROOT . '/src/views/include/header.php'; ?>
  <div class="login pt-5 pb-5 text-center text-md-start m-auto">
    <div class="container">
      <form class="row align-items-center text-center p-4 w-100">
        <div class="col-12 mb-4">
          <h2>Log In</h2>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="email" placeholder="E-Mail" required="required">
        </div>
        <div class="col-12 mb-2">
          <input class="p-2" type="password" placeholder="Password" required="required">
        </div>
        <div class="col-12 mb-4">
          <a href="<?= URLROOT; ?>/forgot">Forgot Password?</a>
        </div>
        <div class="col-12 mb-2">
          <input class="btn btn-primary rounded-pill ps-5 pe-5" type="submit" value="Log In">
        </div>
        <div class="col-12 mb-2">
          <a href="<?= URLROOT; ?>/signup" class="btn btn-outline-dark rounded-pill ps-5 pe-5">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>