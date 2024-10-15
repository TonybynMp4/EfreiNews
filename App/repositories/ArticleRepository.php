<?php
class ArticleRepository extends Repository {

    // Méthode pour récupérer tous les articles
    public function getAllArticles() {
        $stmt = $this->db->prepare("SELECT articles.id, articles.title, articles.content, DATE_FORMAT(articles.created_at, '%Y-%m-%d') as created_at, users.username FROM articles INNER JOIN users ON articles.author = users.id");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    // Méthode pour récupérer un article par ID
    public function getArticleById($id) {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    // Méthode pour créer un article
    public function createArticle($title, $content, $author) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, author) VALUES (:title, :content, :author)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);

        // On vérifie si l'auteur existe
        $stmt2 = $this->db->prepare("SELECT id FROM users WHERE id = :author");
        $stmt2->bindParam(':author', $author);
        $stmt2->execute();
        $row = $stmt2->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $stmt->bindParam(':author', $author);
            $stmt->execute();
            return true;
        } else {
            return false;
        }
        return $stmt->execute();
    }
}
