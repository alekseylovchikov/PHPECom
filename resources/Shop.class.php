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
    private function esc_string($string) {
        $this->mysqli->escape_string($string);
    }
    
    private function error_msg($text_message) {
        return "<p class='alert alert-danger'>{$text_message}<br />";
    }
    
    // function for redirect to some page
    public function redirect($location) {
        header("Location: {$location}");
    }
    
    // function for get all category
    public function get_category() {
        $result = $this->mysqli->query("SELECT * FROM categories ORDER BY cat_title ASC");
        
        if ($result) {
            return $result;
        } else {
            die(error_msg("Error displayed categories") . $this->mysqli->error . "</p>");
        }
    }
    
    // get 3 top products
    public function get_top_products() {
        $result = $this->mysqli->query("SELECT * FROM products ORDER BY product_id ASC LIMIT 3");
        
        if ($result) {
            return $result;
        } else {
            die(error_msg("Error displayed top products") . $this->mysqli->error . "</p>");
        }
    }
}    