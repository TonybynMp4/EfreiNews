<?php
class AdminController extends Controller {

    public function __construct() {
        // Check if the user is logged in
        if (!isset($_SESSION['user'])) {
            // Redirect to the login page
            $this->view('login');
            exit;
        }
    }

    public function index() {
        // Load the view with the data
        $this->view('admin');
    }
}
