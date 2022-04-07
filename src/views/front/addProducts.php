<?php
$page = '';
require_once APPROOT . '/src/views/include/header.php';
if (isset($_SESSION['user']) && $_SESSION['user_admin'] == 1) {
?>
    <div class="addProduct pt-5 pb-5 text-center text-md-start m-auto">
        <div class="container">
            <form class="row align-items-center text-center p-4 w-100" action="<?= URLROOT; ?>/storeproduct" method="POST" enctype="multipart/form-data">
                <div class="col-12 mb-4">
                    <h2>Add New Product</h2>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2" type="text" placeholder="Product Name" required="required" name="name">
                    <?php
                    if (isset($_SESSION['product_err_name'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_name'] ."</div>";
                        unset($_SESSION['product_err_name']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <textarea class="p-2" placeholder="Product Description" rows="4" required="required" name="description"></textarea>
                    <?php
                    if (isset($_SESSION['product_err_desc'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_desc'] ."</div>";
                        unset($_SESSION['product_err_desc']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2" type="number" min="1" placeholder="Product Price" required="required" name="price">
                    <?php
                    if (isset($_SESSION['product_err_price'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_price'] ."</div>";
                        unset($_SESSION['product_err_price']);
                    } elseif (isset($_SESSION['product_low_price'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_low_price'] ."</div>";
                        unset($_SESSION['product_low_price']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2" type="number" min="1" placeholder="Product Stock" required="required" name="stock">
                    <?php
                    if (isset($_SESSION['product_err_stock'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_stock'] ."</div>";
                        unset($_SESSION['product_err_stock']);
                    } elseif (isset($_SESSION['product_low_stock'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_low_stock'] ."</div>";
                        unset($_SESSION['product_low_stock']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2" type="text" placeholder="Country of Manufacture" required="required" name="country">
                    <?php
                    if (isset($_SESSION['product_err_country'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_country'] ."</div>";
                        unset($_SESSION['product_err_country']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2" type="text" placeholder="Manufacturing Year" required="required" name="year">
                    <?php
                    if (isset($_SESSION['product_err_year'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_year'] ."</div>";
                        unset($_SESSION['product_err_year']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2 text-start text-black-50" type="file" id="img" required="required" name="image"/>
                    <?php
                    if (isset($_SESSION['product_err_img_ex'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_img_ex'] ."</div>";
                        unset($_SESSION['product_err_img_ex']);
                    } elseif (isset($_SESSION['product_err_img'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_img'] ."</div>";
                        unset($_SESSION['product_err_img']);
                    } elseif (isset($_SESSION['product_err_img_si'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['product_err_img_si'] ."</div>";
                        unset($_SESSION['product_err_img_si']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-2">
                    <input class="btn btn-primary rounded-pill ps-5 pe-5" type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
<?php require_once APPROOT . '/src/views/include/footer.php';
} else {
    header('location: ' . URLROOT);
}?>