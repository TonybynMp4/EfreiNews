<?php
class AdminController extends Controller {

    public function __construct() {
        if (!isset($_SESSION['user'])) {
            $this->view('login');
            exit;
        }
    }

    public function createArticle() {
        $args = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = htmlspecialchars($_POST['title']);
            $content = htmlspecialchars($_POST['content']);
            $author = $_SESSION['userId'];

            if ((new ArticleRepository())->createArticle($title, $content, $author)) {
                header('Location: '. BASE_URL .'Home/index');
                exit;
            } else {
                $args['error'] = "Erreur lors de la création de l'article.";
            }
        }

        $this->view('admin', $args);
    }

    public function index() {
        $this->view('admin');
    }
}
