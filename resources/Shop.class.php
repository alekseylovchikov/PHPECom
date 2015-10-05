<?php

require_once("config.php");

class Shop {
    private $mysqli;
    
    public function __construct() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        
        if ($this->mysqli->connect_error) {
            die("Connect error...<br />" . $this->mysqli->connect_error);
        }
    }
    
    public function __destruct() {
        $this->mysqli->close();
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
            die("<p class='alert alert-danger'>Error displayed categories<br />" . $this->mysqli->error . "</p>");
        }
    }
}    
