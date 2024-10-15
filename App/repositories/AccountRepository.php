<?php
class AccountRepository extends Repository {
    private $username;
    private $userId;
    private $role;

    public function __construct() {
        parent::__construct();
    }

    public function register($username, $password, $role) {
        $query = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role
        ]);

        return $stmt->rowCount() > 0;
    }

    public function login($login_username, $login_password) {
        $query = "SELECT * FROM users WHERE username = :login_username";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['login_username' => $login_username]);
        $user = $stmt->fetch();

        // Check si l'utilisateur existe et si le mot de passe est correct
        if ($user && password_verify($login_password, $user['password'])) {
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

    public function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    public function isAdmin() {
        return $this->role === 'admin';
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