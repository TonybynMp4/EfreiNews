<?php
class AccountController extends Controller {
    private $accountRepository;

    public function __construct() {
        $this->accountRepository = new AccountRepository();
    }

    public function register() {
        $args = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            if ($this->accountRepository->register($username, $password, $role)) {
                header('Location: ' . BASE_URL);
                exit;
            } else {
                $args['error'] = "Erreur lors de l'inscription.";
            }
        }

        $this->view('register', $args);
    }

    public function login() {
        $args = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->accountRepository->login($username, $password)) {
                header('Location: ' . BASE_URL);
                exit;
            } else {
                $args['error'] = "Nom d\'utilisateur ou mot de passe incorrect.";
            }
        }

        $this->view('login', $args);
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASE_URL);
    }
}
