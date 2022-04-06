<?php

namespace Models;

use \Models\Database;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * CREATE
     * @param $name
     * @param $description
     * @param $image
     * @param $price
     * @param $stock
     * @param $country
     * @param $year
     * @param $created_at
     * @return bool
     */
    public function addProduct($name, $description, $image, $price, $stock, $country, $year, $created_at): bool
    {
        $this->db->query("INSERT INTO products (`name`, `description`, `image`, `price`,`stock`, `country`, `year`, `created_at`) VALUES (:name, :desc, :image, :price, :stock, :country, :year, :created)");
        $this->db->bind(':name', $name);
        $this->db->bind(':desc', $description);
        $this->db->bind(':image', $image);
        $this->db->bind(':price', ($price));
        $this->db->bind(':stock', $stock);
        $this->db->bind(':country', $country);
        $this->db->bind(':year', $year);
        $this->db->bind(':created', $created_at);
        if ($this->db->execute())
            return true;
        return false;
    }

    /**
     * READ
     * @return array
     */
    public function selectAll() : array
    {
        $this->db->query("SELECT * FROM products ORDER BY id DESC");
        return $this->db->resultSet();
    }

    /**
     * READ
     * @return array
     */
    public function selectLastProducts() : array
    {
        $this->db->query("SELECT * FROM products ORDER BY id DESC LIMIT 8");
        return $this->db->resultSet();
    }
}