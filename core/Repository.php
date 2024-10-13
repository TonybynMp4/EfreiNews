<?php
class Repository {
    protected $db;

    public function __construct() {
        // Connexion à la base de données via PDO
        $host = DB_HOST;
        $db   = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASSWORD;


        try {
            $this->db = new PDO("mysql:host=$host;port=3328;dbname=$db", $user, $pass);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
        }
    }
}