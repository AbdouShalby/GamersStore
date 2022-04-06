<?php
    require_once APPROOT . '/src/views/include/header.php';
    if(isset($_SESSION['user'])){
	    header('location: ' . URLROOT); // Redirect To Dashboard Page
        exit();
    }
    ?>
  <div class="login pt-5 pb-5 text-center text-md-start m-auto">
    <div class="container">
      <form class="row align-items-center text-center p-4 w-100" method="POST" action="<?= URLROOT; ?>/userlogin">
        <div class="col-12 mb-4">
          <h2>Log In</h2>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="email" placeholder="E-Mail" name="email">
	      <?php
	      if (isset($_SESSION['empty_email'])) {
            echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_email'] ."</div>";
            unset($_SESSION['empty_email']);
	      }
	      ?>
        </div>
        <div class="col-12 mb-2">
          <input class="p-2" type="password" placeholder="Password" name="password">
          <?php
	      if (isset($_SESSION['empty_pass'])) {
            echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_pass'] ."</div>";
            unset($_SESSION['empty_pass']);
	      }
	      ?>
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
	      <?php
	      if (isset($_SESSION['account_login'])) {
		      echo "<div class='p-2 mt-2 alert alert-info w-25 m-auto'>". $_SESSION['account_login'] ."</div>";
		      unset($_SESSION['account_login']);
	      }
	      ?>
      </form>
    </div>
  </div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>