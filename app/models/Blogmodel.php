<?php
class Blogmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getArticles()
    {
        $this->db->query('SELECT * FROM articles ORDER BY articles.article_id DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getArticlesLimit3()
    {
        $this->db->query('SELECT * FROM articles ORDER BY articles.article_id DESC LIMIT 3');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getArticleswithAjax($article_id)
    {
        $this->db->query('SELECT * FROM articles  WHERE article_id < :id ORDER BY articles.article_id DESC LIMIT 3');

        $this->db->bind(":id", $article_id);
        $results = $this->db->resultSet();

        return $results;
    }

    // Add Article
    public function addArticle($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO articles (article_title, article_content, article_image, article_excerpt, article_slug)
    VALUES (:title, :content, :article_image, :excerpt, :slug)');

        // Bind Values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':article_image', $data['article_image']);
        $this->db->bind(':excerpt', $data['excerpt']);
        $this->db->bind(':slug', $data['slug']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function getId()
    {
        $article_id = $this->db->lastInsertId();
        return $article_id;
    }

    // Delete Post
    public function deleteArticleCategory($category_id, $article_id)
    {
        // Prepare Query
        $this->db->query('DELETE FROM article_categories WHERE category_id = :category_id AND article_id = :article_id');

        // Bind Values
        $this->db->bind(':category_id', $category_id);
        $this->db->bind(':article_id', $article_id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Update Article
    public function updateArticle($data)
    {
        // Prepare Query
        $this->db->query('UPDATE articles SET article_title= :title, article_content = :content, article_image = :image, article_excerpt = :excerpt, article_url = :url, article_slug = :slug WHERE article_id = :id');

        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image', $data['article_image']);
        $this->db->bind(':excerpt', $data['excerpt']);
        $this->db->bind(':url', $data['url']);
        $this->db->bind(':slug', $data['slug']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Get Article By ID
    public function getArticleById($id)
    {
        $this->db->query("SELECT * FROM articles WHERE article_id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function getArticlesbyCategory($id)
    {
        $this->db->query('SELECT * FROM articles
        INNER JOIN article_categories on article_categories.article_id = articles.article_id
        INNER JOIN categories on categories.category_id = article_categories.category_id
        WHERE article_categories.category_id = :id');

        $this->db->bind(':id', $id);

        $results = $this->db->resultSet();

        return $results;
    }

    // Get Article by slug
    // Pour lire un article, ex:article/object-oriented-php-mvc
    public function getarticleBySlug($slug)
    {
        $this->db->query("SELECT * FROM articles WHERE article_slug = :slug");

        $this->db->bind(':slug', $slug);

        $row = $this->db->single();

        return $row;
    }

    // pour trouver des articles par nom (slug) (html, cs, javascript...)
    public function getArticlesbyCategoryName($nameSlug)
    {
        $this->db->query('SELECT * FROM articles
        INNER JOIN article_categories on article_categories.article_id = articles.article_id
        INNER JOIN categories on categories.category_id = article_categories.category_id
        WHERE categories.category_name_slug = :slug');

        $this->db->bind(':slug', $nameSlug);

        $results = $this->db->resultSet();

        return $results;
    }

}
