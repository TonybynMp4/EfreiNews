<?php
class AccountController extends Controller {
    private $accountRepository;

    public function __construct() {
        $this->accountRepository = new AccountRepository();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->accountRepository->login($username, $password)) {
                $this->view('home');
                exit;
            }
        }

        $this->view('login');
    }
}
