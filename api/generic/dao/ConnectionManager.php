<?php

class ConnectionManager {

    static $pdo = null;

    public static function getConnection () {
        if (ConnectionManager::$pdo == null) {

            include_once APPPATH . 'config/database.php';
            $dsn = $db[$active_group]['dsn'];
            $username = $db[$active_group]['username'];
            $password = $db[$active_group]['password'];
            $pconnect = $db[$active_group]['pconnect'];

            ConnectionManager::$pdo = new PDO($dsn, $username, $password, array(
                    PDO::ATTR_PERSISTENT => $pconnect
            ));
            ConnectionManager::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            ConnectionManager::$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

        }
        return ConnectionManager::$pdo;
    }

}

?>