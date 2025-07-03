<?php

abstract class AbstractManager {
    protected PDO $db;

    public function __construct() {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "prenomnom_phpj6";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "votre_username";
        $password = "votre_password";
        $this->db = new PDO($connexionString, $user, $password);
    }
}