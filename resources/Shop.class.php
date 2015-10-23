<?php

// require config file
require_once("config.php");

class Shop {
    private $mysqli;
    
    public function __construct() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        
        $this->mysqli->set_charset("utf8");
        
        if ($this->mysqli->connect_error) {
            die("Connect error...<br />" . $this->mysqli->connect_error);
        }
    }
    
    public function __destruct() {
        $this->mysqli->close();
    }
    
    // sql injection
    public function esc_string($string) {
        return $this->mysqli->escape_string($string);
    }
    
    // function for redirect to some page
    public function redirect($location) {
        header("Location: {$location}");
    }
    
    // get all categories
    public function get_all_categories() {
        $result = $this->mysqli->query("SELECT cat_id, cat_title FROM categories ORDER BY cat_title ASC");
        
        if ($result) {
            return $result;
        } else {
            die("<p class='alert alert-danger'>Error get categories<br />" . $this->mysqli->error . "</p>");
        }
    }
    
    // function for print categories
    public function get_categories() {
        $result = $this->get_all_categories();
        
        if ($result) {
            return $result;
        } else {
            die("<p class='alert alert-danger'>Error get categories...<br />" . $this->mysqli->error . "</p>");
        }
    }
    
    // confirm return data from query
    private function confirm($result) {
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;   
        }
    }
    
    // get category for product
    public function get_category($category_id) {
        $id = $this->esc_string($category_id);
        $result = $this->mysqli->query("SELECT * FROM categories WHERE cat_id = {$id} LIMIT 1");

        if ($result) {
            return $this->confirm($result);
        } else {
            return false;
        }
    }
    
    // get 3 top products
    public function get_top_products() {
        $limit = 3;
        $result = $this->mysqli->query("SELECT * FROM products ORDER BY product_id ASC LIMIT {$limit}");
        
        if ($result) {
            return $result;
        } else {
            die("<p class='alert alert-danger'>Error get top product...<br />" . $this->mysqli->error . "</p>");
        }
    }
    
    // get new products
    public function get_new_products() {
        $limit = 3;
        $result = $this->mysqli->query("SELECT * FROM products ORDER BY product_id DESC LIMIT {$limit}");
        
        if ($result) {
            return $result;
        } else {
            die("<p class='alert alert-danger'>Error get new product...<br />" . $this->mysqli->error . "</p>");
        }
    }
    
    // get product
    public function get_product($id) {
        $id = $this->esc_string($id);
        $result = $this->mysqli->query("SELECT * FROM products WHERE product_id = {$id} LIMIT 1");
        
        if ($result) {
            return $this->confirm($result);
        } else {
            die("<p class='alert alert-danger'>Error get product...<br />" . $this->mysqli->error . "</p>");
        }
    }

    // get products by one category
    public function get_products($id, $sort) {
        $id = $this->esc_string($id);
        $sort = $this->esc_string($sort);
        
        $sort = trim($sort);
        $id = trim($id);
        
        if (!empty($sort)) {
            $sort = ($sort == "toup") ? "ASC" : "DESC";
            $result = $this->mysqli->query("SELECT * FROM products WHERE product_category_id = {$id} ORDER BY product_price {$sort}");
        } else {
            $result = $this->mysqli->query("SELECT * FROM products WHERE product_category_id = {$id} ORDER BY product_title ASC");
        }

        if ($result) {
            return $this->confirm($result);
        } else {
            return false;
        }
    }
    
    // get similar products
    public function get_similar_products($id, $current_product_id) {
        $limit = 3;
        
        $id = $this->esc_string($id);
        $current_product_id = $this->esc_string($current_product_id);
        
        // get 3 last products by this category
        $result = $this->mysqli->query("SELECT * FROM products WHERE product_category_id = {$id} AND product_id NOT LIKE {$current_product_id} ORDER BY product_id DESC LIMIT {$limit}");
        
        if ($result) {
            return $this->confirm($result);
        } else {
            return false;
        }
    }
    
    // change size image
    public function scaleImage($imagePath) {
        $imagick = new Imagick(realpath($imagePath));
        $imagick->scaleImage(180, 150, true);
        header("Content-Type: image/jpg");
        
        return $imagick;
    }
}    