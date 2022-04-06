    <!-- Start Footer -->
    <div class="footer pt-5 pb-5 text-white-50 text-center text-md-start" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <div class="info mb-5">
              <img src="<?= URLROOT;?>/public/imgs/logo2.png" alt="" class="mb-4 img-fluid w-50">
              <p class="mb-5">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam vitae natus similique minima quam laudantium, 
                dolores adipisci quas provident.
              </p>
              <div class="copyright">
                Created By <span>AbdouShalby</span>
                <div>&copy; 2022 - <span>Gamers Store Inc</span></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="links">
              <h5 class="text-light">Links</h5>
              <ul class="list-unstyled lh-lg">
                <li><a class="p-2 m-0 btn btn-lg fs-6 <?php if($page == 'Home'){echo 'active';} ?>" href="<?= URLROOT; ?>" data-scroll="home">Home</a></li>
                <li><a class="p-2 m-0 btn btn-lg fs-6 <?php if($page == 'Products'){echo 'active';} ?>" href="<?= URLROOT; ?>/products">Products</a></li>
                <li><a class="p-2 m-0 btn btn-lg fs-6 <?php if($page == 'About'){echo 'active';} ?>" href="<?= URLROOT; ?>/about">About</a></li>
                <li><a class="p-2 m-0 btn btn-lg fs-6" href="https://www.facebook.com/samer.hasson.50" target="_blank">Support</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-4 col-lg-4">
            <div class="contact">
              <h5 class="text-light">Contact Us</h5>
              <p class="lh-lg mt-3 mb-5">
                Get in touch with us via mail phone. We are waiting for your call or message.
              </p>
              <a class="btn rounded-pill main-btn w-100" href="mailto:gamers.store@gmail.com">gamers.store@gmail.com</a>
              <ul class="d-flex mt-5 li-unstyled gap-3 mx-auto">
                <a class="d-block text-light" href="<?= FACEBOOK; ?>">
                  <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i>
                </a>
                <a class="d-block text-light" href="<?= TWITTER; ?>">
                  <i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-2"></i>
                </a>
                <a class="d-block text-light" href="<?= LINKEDIN; ?>">
                  <i class="fa-brands fa-linkedin fa-lg linkedin rounded-circle p-2"></i>
                </a>
                <a class="d-block text-light" href="<?= YOUTUBE; ?>">
                  <i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i>
                </a>
                <a class="d-block text-light" href="<?= GITHUB; ?>">
                  <i class="fa-brands fa-github fa-lg github rounded-circle p-2"></i>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer -->
    <div id="scroll-up">
      <i class="fa-solid fa-circle-arrow-up"></i>
    </div>
    <script src="<?= URLROOT; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= URLROOT; ?>/js/all.min.js"></script>
    <script src="<?= URLROOT; ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= URLROOT; ?>/js/custom.js"></script>
  </body>
</html>