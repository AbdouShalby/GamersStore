<?php $page = 'Contact'; require_once APPROOT . '/src/views/include/header.php'; ?>
  <div class="contact-page pt-5 pb-5 text-center text-md-start m-auto">
    <div class="container">
      <form class="row align-items-center text-center p-4 w-100">
        <div class="col-12 mb-4">
          <h2 class="fs-1 fw-bold">Drop us a line</h2>
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="text" placeholder="What's your full name?" required="required">
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="email" placeholder="E-Mail@example.com" required="required">
        </div>
        <div class="col-12 mb-4">
          <input class="p-2" type="text" placeholder="Queries, Feedback, Suggestions, etc.." required="required">
        </div>
        <div class="col-12 mb-4">
            <textarea class="p-2" placeholder="Write your message for the team here" rows="4"></textarea>
        </div>
        <div class="col-12 mb-4">
          <input class="btn btn-primary rounded-pill ps-5 pe-5" type="submit" value="Send">
        </div>
        </form>
    </div>
  </div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>