<?php
session_start();
class AccountRepository extends Repository {
    private $username;
    private $userId;
    private $role;

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $query = $this->db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);
        $user = $query->fetch();

        if ($user) {
            $this->username = $user['username'];
            $this->userId = $user['id'];
            $this->role = $user['role'];

            $_SESSION['user'] = $this->username;
            $_SESSION['userId'] = $this->userId;
            $_SESSION['role'] = $this->role;
            return true;
        }

        return false;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getRole() {
        return $this->role;
    }

    public function logout() {
        session_destroy();
    }
}

?>