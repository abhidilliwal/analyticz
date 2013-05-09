<?php

class BasicModel {

    /**
     * 
     * @var PDO
     */
    protected $db;
    
    function __construct() {
        $this->db = ConnectionManager::getConnection();
    }
}

?>