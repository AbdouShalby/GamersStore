<?php

namespace Controllers;

use \Models\Product;

class IndexController
{
    public function __construct()
    {
        $this->productModel = new Product;
    }

    public function home()
    {
    view('front/home', $this->getLast());
    }

    // Read All Products
    public function getLast(): array
    {
        return $this->productModel->selectLastProducts();
    }
}