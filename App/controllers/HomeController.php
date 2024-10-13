<?php

class HomeController extends Controller {

    public function index() {
        // Logic for the homepage
        $articles = (new ArticleRepository())->getAllArticles();

        // Load the view with the data
        $this->view('home', ['articles' => $articles]);
    }
}
