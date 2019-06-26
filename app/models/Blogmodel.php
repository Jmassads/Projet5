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
        $this->db->query('SELECT * FROM articles ORDER BY articles.article_id ASC LIMIT 3');

        $results = $this->db->resultSet();

        return $results;
    }

    

    public function getArticleswithAjax($article_id)
    {
        $this->db->query('SELECT * FROM articles  WHERE article_id > :id ORDER BY articles.article_id ASC LIMIT 3');

        $this->db->bind(":id", $article_id);
        $results = $this->db->resultSet();

        return $results;
    }

    public function ArticlesPagination()
    {
        $this->db->query("SELECT COUNT(article_id) as numarticles FROM articles");
        $row = $this->db->single();
        return $row;
    }

    public function GetPaginatedArticles($per_page, $offset)
    {
        $this->db->query("SELECT * FROM articles ORDER BY article_id DESC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $per_page);
        $this->db->bind(":offset", $offset);
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

    // Add Article with article category
    public function addArticleCategory($category, $article_id)
    {
        // Prepare Query
        $this->db->query('INSERT INTO article_categories (category_id, article_id)
  VALUES (:category, :article_id)');

        // Bind Values
        $this->db->bind(':category', $category);
        $this->db->bind(':article_id', $article_id);
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

    // public function getCategoriesByArticleId($id)
    // {
    //     $this->db->query('SELECT * FROM article_categories 
    //     INNER JOIN article_categories.article_id on 
    //     WHERE article_id = :id');

    //     $this->db->bind(':id', $id);

    //     $results = $this->db->resultSet();

    //     return $results;
    // }

    // Get all languages (HTML, CSS< Javascript...)
    public function getCategories()
    {
        $this->db->query('SELECT * FROM categories');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getFrontCategories()
    {
        $this->db->query('SELECT * FROM categories WHERE category_type = :type');

        $this->db->bind(':type', 'front');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getBackCategories()
    {
        $this->db->query('SELECT * FROM categories WHERE category_type = :type');

        $this->db->bind(':type', 'back');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getDatabaseCategories()
    {
        $this->db->query('SELECT * FROM categories WHERE category_type = :type');

        $this->db->bind(':type', 'database');

        $results = $this->db->resultSet();

        return $results;
    }
}
