<?php
$page = 'Profile';
require_once APPROOT . '/src/views/include/header.php';
    if(isset($_SESSION['user'])){
        $firstName  = $_SESSION['user_first'];
        $lastName   = $_SESSION['user_last'];
        $mobile     = $_SESSION['user_mobile'];
        ?>
        <div class="about-page pt-5 text-center text-md-start m-auto">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 mb-3 text-center">
                    <h2 class="fs-1 fw-bold"><?= $firstName . $lastName ?></h2>
                    <span class="d-block">Mobile Number: <?= $mobile ?></span>
                </div>
                <div class="col-12 mb-3 mt-3 text-center member">
                    <img class="img-fluid w-25" src="<?= URLROOT;?>/public/imgs/avatar.png" alt="Team">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-5">
                <a class="btn rounded-pill main-btn text-uppercase" href="<?= URLROOT; ?>/logout">Logout</a>
            </div>
        </div>
    <?php } else {
        header('location: ' . URLROOT); // Redirect To Dashboard Page
    }
    ?>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>