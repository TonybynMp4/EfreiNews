<?php
class Repository {
    protected $db;

    public function __construct() {
        // Connexion à la base de données via PDO
        $host = DB_HOST;
        $port = DB_PORT;
        $db   = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASSWORD;


        try {
            $this->db = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
        }
    }
}