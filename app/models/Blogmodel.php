<?php
class Blogmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // CRUD

    // Add Article
    public function addArticle($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO articles (article_title, article_content, article_image, article_excerpt, article_slug, is_published) VALUES (:title, :content, :article_image, :excerpt, :slug, :is_published)');

        // Bind Values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':article_image', $data['article_image']);
        $this->db->bind(':excerpt', $data['excerpt']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':is_published', $data['is_published']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    // Get all Articles
    public function getArticles()
    {
        $this->db->query('SELECT * FROM articles ORDER BY articles.article_id DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getPublishedArticles()
    {
        $this->db->query('SELECT * FROM articles WHERE articles.is_published = 1 ORDER BY articles.article_id DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getNonPublishedArticles()
    {
        $this->db->query('SELECT * FROM articles WHERE articles.is_published = 0 ORDER BY articles.article_id DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    // Get last 3 articles
    public function getArticlesLimit6()
    {
        $this->db->query('SELECT * FROM articles
        WHERE articles.is_published = 1 

        ORDER BY articles.article_id DESC LIMIT 6');

        $results = $this->db->resultSet();

        return $results;
    }

    // Get articles with Ajax
    public function getArticleswithAjax($article_id)
    {
        $this->db->query('SELECT * FROM articles  WHERE article_id < :id AND articles.is_published = 1 ORDER BY articles.article_id DESC LIMIT 3');

        $this->db->bind(":id", $article_id);
        $results = $this->db->resultSet();

        return $results;
    }

    // Get single article by id
    public function getArticleById($id)
    {
        $this->db->query("SELECT * FROM articles WHERE article_id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    // Get single article by slug (slug in the url)
    // Pour lire un article, ex:article/object-oriented-php-mvc
    public function getarticleBySlug($slug)
    {
        $this->db->query("SELECT * FROM articles WHERE article_slug = :slug");

        $this->db->bind(':slug', $slug);

        $row = $this->db->single();

        return $row;
    }

    // Get all articles by category (html, cs, php...)
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

    // pour trouver des articles par nom (slug) (html, cs, javascript...)
    public function getArticlesbyCategoryName($nameSlug)
    {
        $this->db->query('SELECT * FROM articles INNER JOIN article_categories on article_categories.article_id = articles.article_id INNER JOIN categories on categories.category_id = article_categories.category_id WHERE articles.is_published = 1 AND categories.category_name_slug = :slug');

        $this->db->bind(':slug', $nameSlug);

        $results = $this->db->resultSet();

        return $results;
    }

    // get the last id inserted
    public function getId()
    {
        $article_id = $this->db->lastInsertId();
        return $article_id;
    }

    // Update Article
    public function updateArticle($data)
    {
        // Prepare Query
        $this->db->query('UPDATE articles SET article_title= :title, article_content = :content, article_image = :image, article_excerpt = :excerpt, article_url = :url, article_slug = :slug , is_published = :is_published WHERE article_id = :id');

        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image', $data['article_image']);
        $this->db->bind(':excerpt', $data['excerpt']);
        $this->db->bind(':url', $data['url']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':is_published', $data['is_published']);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete article category
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

    public function countAllArticles()
    {
        $this->db->query('SELECT * FROM articles');

        $this->db->resultSet();

        $results = $this->db->rowCount();

        return $results;
    }

    public function countPublishedArticles()
    {
        $this->db->query('SELECT * FROM articles WHERE articles.is_published = 1');

        $this->db->resultSet();

        $results = $this->db->rowCount();

        return $results;
    }

    public function countNotPublishedArticles()
    {
        $this->db->query('SELECT * FROM articles WHERE articles.is_published = 0');

        $this->db->resultSet();

        $results = $this->db->rowCount();

        return $results;
    }

    // Delete Article
    public function deleteArticle($id){
        // Prepare Query
        $this->db->query('DELETE FROM articles WHERE article_id = :id');
  
        // Bind Values
        $this->db->bind(':id', $id);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

}
