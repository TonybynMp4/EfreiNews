<?php
class Controller {
    // Méthode pour charger une vue
    public function view($view, $data = []) {
        extract($data); // Permet d'extraire les clés du tableau pour les utiliser directement
        require_once "../app/views/$view.php";
    }
}