<?php

namespace controllers;

use \Models\Product;

class ProductController
{
    public function __construct()
    {
        $this->productModel = new Product;
    }

	public function products()
	{
		view('front/products', $this->getProducts());
	}

    public function addProduct()
    {
        view('front/addProducts');
    }

    public function createProduct()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {

            // Upload Variables
            $itemIMGName = $_FILES['image']['name'];
            $itemIMGSize = $_FILES['image']['size'];
            $itemIMGTmp  = $_FILES['image']['tmp_name'];
            $itemIMGType = $_FILES['image']['type'];

            // List For Allowed File Types To Upload
            $itemsIMGAllowedExtensions = array("jpeg", "jpg", "png");

            // Get Product Extension
            $explode = explode('.', $itemIMGName);
            $itemIMGExtension = strtolower(end($explode));

            // Get Variable From The Form
            $name       = $_POST['name'];
            $desc       = $_POST['description'];
            $price      = $_POST['price'];
            $stock      = $_POST['stock'];
            $country    = $_POST['country'];
            $year       = $_POST['year'];

            // Validate The Form
            if (empty($name)) {
                $_SESSION['product_err_name'] = PRODUCT_NAME;
            }
            if (empty($desc)) {
                $_SESSION['product_err_desc'] = PRODUCT_DESC;
            }
            if (empty($price)) {
                $_SESSION['product_err_price'] = PRODUCT_PRICE;
            }
            if ($price < 1) {
                $_SESSION['product_low_price'] = PRODUCT_LOW_PRICE;
            }
            if (empty($stock)) {
                $_SESSION['product_err_stock'] = PRODUCT_STOCK;
            }
            if ($stock < 1) {
                $_SESSION['product_low_stock'] = PRODUCT_LOW_STOCK;
            }
            if (empty($country)) {
                $_SESSION['product_err_country'] = PRODUCT_COUNTRY;
            }
            if (empty($year)) {
                $_SESSION['product_err_year'] = PRODUCT_YEAR;
            }
            if (!empty($itemIMGName) && !in_array($itemIMGExtension, $itemsIMGAllowedExtensions)) {
                $_SESSION['product_err_img_ex'] = PRODUCT_IMG_EX;
            }
            if (empty($itemIMGName)) {
                $_SESSION['product_err_img'] = PRODUCT_IMG;
            }
            if ($itemIMGSize > 4194304) {
                $_SESSION['product_err_img_si'] = PRODUCT_IMG_SI;
            }

            if ($_SESSION != $_SESSION['product_err_name'] || $_SESSION['product_err_desc'] || $_SESSION['product_err_price'] || $_SESSION['product_low_price'] || $_SESSION['product_err_stock'] || $_SESSION['product_low_stock'] || $_SESSION['product_err_country'] || $_SESSION['product_err_year'] || $_SESSION['product_err_img_ex'] || $_SESSION['product_err_img'] || $_SESSION['product_err_img_si']) {
                $image = rand(0, 100000000) . '_' . $itemIMGName;
                move_uploaded_file($itemIMGTmp, UPLOAD_PATH . '/' . $image);
                $this->productModel->addProduct($name, $desc, $image, $price, $stock, $country, $year);
                $_SESSION['product_created'] = PRODUCT_CRATED;
            }
        }
        header('location: ' . URLROOT . '/products');
    }

    // Read All Products
    public function getProducts(): array
    {
        return $this->productModel->selectAll();
    }
}