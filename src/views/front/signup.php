<?php require_once APPROOT . '/src/views/include/header.php'; ?>
  <div class="signup pt-5 pb-5 text-center text-md-start m-auto">
	<div class="container">
	  <form class="row align-items-center text-center p-4 w-100" method="post" action="<?= URLROOT; ?>/store">
        <div class="col-12 mb-4">
          <h2>Sign Up</h2>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="text" placeholder="First Name" required="required" name="first_name">
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="text" placeholder="Last Name" required="required" name="last_name">
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="email" placeholder="E-Mail" required="required" name="email">
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="password" placeholder="Password" required="required" name="password">
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="tel" placeholder="Mobile Number" required="required" name="mobile">
        </div>
        <div class="col-12 mb-2">
          <input class="btn btn-primary rounded-pill ps-5 pe-5" type="submit" value="Sign Up">
        </div>
        <div class="col-12 mb-2">
          <a href="<?= URLROOT; ?>/login" class="btn btn-outline-dark rounded-pill ps-5 pe-5">Log In</a>
        </div>
      </form>
    </div>
  </div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>