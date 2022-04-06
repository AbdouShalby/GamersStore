<?php require_once APPROOT . '/src/views/include/header.php';?>
  <div class="signup pt-5 pb-5 text-center text-md-start m-auto">
	<div class="container">
	  <form class="row align-items-center text-center p-4 w-100" method="POST" action="<?= URLROOT; ?>/store">
        <div class="col-12 mb-4">
          <h2>Sign Up</h2>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="text" placeholder="First Name" required="required" name="first">
          <?php
            if (isset($_SESSION['empty_first'])) {
              echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_first'] ."</div>";
	          unset($_SESSION['empty_first']);
            } elseif (isset($_SESSION['first_3'])) {
	          echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>" . $_SESSION['first_3'] . "</div>";
	          unset($_SESSION['first_3']);
            } elseif (isset($_SESSION['first_20'])) {
	          echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>" . $_SESSION['first_20'] . "</div>";
	          unset($_SESSION['first_20']);
            }
          ?>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="text" placeholder="Last Name" required="required" name="last">
	      <?php
	        if (isset($_SESSION['empty_last'])) {
              echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_last'] ."</div>";
              unset($_SESSION['empty_last']);
	        } elseif (isset($_SESSION['last_3'])) {
              echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>" . $_SESSION['last_3'] . "</div>";
              unset($_SESSION['last_3']);
	        } elseif (isset($_SESSION['last_20'])) {
              echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>" . $_SESSION['last_20'] . "</div>";
              unset($_SESSION['last_20']);
	        }
	      ?>
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
        <div class="col-12 mb-4">
          <input class="p-2" type="password" placeholder="Password" required="required" name="password">
	      <?php
	        if (isset($_SESSION['empty_pass'])) {
            echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_pass'] ."</div>";
            unset($_SESSION['empty_pass']);
	        }
	      ?>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="tel" placeholder="Mobile Number" required="required" name="mobile">
	      <?php
	        if (isset($_SESSION['empty_mob'])) {
              echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_mob'] ."</div>";
	          unset($_SESSION['empty_mob']);
            }
          ?>
        </div>
        <div class="col-12 mb-2">
          <input class="btn btn-primary rounded-pill ps-5 pe-5" type="submit" value="Sign Up">
        </div>
        <div class="col-12 mb-2">
          <a href="<?= URLROOT; ?>/login" class="btn btn-outline-dark rounded-pill ps-5 pe-5">Log In</a>
        </div>
          <?php
          if (isset($_SESSION['account_created'])) {
            echo "<div class='p-2 mt-2 alert alert-success w-25 m-auto'>". $_SESSION['account_created'] ."</div>";
            unset($_SESSION['account_created']);
          }
          ?>
      </form>
    </div>
  </div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>