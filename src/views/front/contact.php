<?php $page = 'Contact'; require_once APPROOT . '/src/views/include/header.php'; ?>
  <div class="contact pt-5 pb-5 text-md-start">
    <div class="container">
      <form class="row p-4">
        <div class="col-lg-4 pt-4 pb-4 mt-4 mb-4">
          <h2 class="ps-lg-5">Drop us a line</h2>
          <input class="p-2 mt-4 mb-4" type="text" placeholder="What's your full name?" required="required">
          <input class="p-2 mb-4" type="email" placeholder="E-Mail" required="required">
          <input class="p-2 mb-4" type="text" placeholder="Subject" required="required">
          <textarea class="p-2 mb-4" placeholder="Write your message for the team here" rows="4"></textarea>
          <input class="btn btn-primary rounded-pill ps-5 pe-5" type="submit" value="Log In">
        </div>
        <div class="col-lg-8 pt-4 pb-4 mt-4 mb-4">
          <img class="img-fluid" src="<?= URLROOT;?>/public/imgs/contact.jpg">
        </div>
      </form>
    </div>
  </div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>