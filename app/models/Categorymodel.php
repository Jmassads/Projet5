<?php
class Categorymodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Récuperer toutes les catégories de la base de donnée
    public function getAllDatabaseCategories()
    {
        $this->db->query('SELECT * FROM categories ORDER BY category_type DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    // Ajouter categorie
    public function addCategory($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO categories (category_name, category_type, category_name_slug, category_type_slug)
        VALUES (:name, :type, :name_slug, :type_slug)');

        // Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':name_slug', $data['name_slug']);
        $this->db->bind(':type_slug', $data['type_slug']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Récuperer une categorie par id
    public function getCategoryById($id)
    {
        $this->db->query("SELECT * FROM categories WHERE category_id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    // Modifier une catégorie
    public function updateCategory($data)
    {
        // Prepare Query
        $this->db->query('UPDATE categories SET category_name = :name, category_type = :type,
      category_name_slug = :name_slug, category_type_slug = :type_slug WHERE category_id = :id');

        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':name_slug', $data['name_slug']);
        $this->db->bind(':type_slug', $data['type_slug']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Supprimer catégorie
    public function deleteCategory($id)
    {
        // Prepare Query
        $this->db->query('DELETE FROM categories WHERE category_id = :id');

        // Bind Values
        $this->db->bind(':id', $id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Récuperer les catégories du front (celles qui ont un article avec une catégorie du front uniquement)
    public function getFrontCategories()
    {
        $this->db->query('SELECT * FROM categories
        INNER JOIN article_categories on categories.category_id = article_categories.category_id
        INNER JOIN articles on articles.article_id = article_categories.article_id 
        WHERE category_type = :type
        AND articles.is_published = 1
        GROUP BY article_categories.category_id');

        $this->db->bind(':type', 'front-end');

        $results = $this->db->resultSet();

        return $results;
    }

    // Récuperer les catégories du back (celles qui ont un article avec une catégorie du back uniquement)
    public function getBackCategories()
    {
        $this->db->query('SELECT * FROM categories 
        INNER JOIN article_categories on categories.category_id = article_categories.category_id 
        INNER JOIN articles on articles.article_id = article_categories.article_id 
        WHERE category_type = :type 
        AND articles.is_published = 1 
        GROUP BY article_categories.category_id');

        $this->db->bind(':type', 'back-end');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategoriesByName($name)
    {
        $this->db->query('SELECT * FROM categories WHERE category_name = :name');

        $this->db->bind(':name', $name);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategoriesByNameSlug($nameSlug)
    {
        $this->db->query('SELECT * FROM categories WHERE category_name_slug = :name_slug');

        $this->db->bind(':name_slug', $nameSlug);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategoriesByArticleId($id)
    {
        $this->db->query('SELECT * FROM article_categories
        WHERE article_id = :id');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();
        return $results;
    }

    // Recuper les categories pour un article
    public function getArticleCategoriesByArticleId($id){
        $this->db->query('SELECT * FROM categories
        INNER JOIN article_categories on categories.category_id = article_categories.category_id
        INNER JOIN articles on articles.article_id = article_categories.article_id 
        WHERE articles.article_id = :id
        GROUP BY article_categories.category_id');

        $this->db->bind(':id', $id);

        $results = $this->db->resultSet();

        return $results;
    }


    // Ajouter categories pour un article
    public function addArticleCategory($category, $article_id)
    {
        // Prepare Query
        $this->db->query('INSERT INTO article_categories (category_id, article_id) VALUES (:category, :article_id)');

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

    // Compter les categories
    public function countAllCategories()
    {
        $this->db->query('SELECT * FROM categories');

        $this->db->resultSet();

        $results = $this->db->rowCount();

        return $results;
    }

    // recuperer les categories pour les articles
    public function getDatabaseCategories()
    {
        $this->db->query('SELECT * FROM categories 
        INNER JOIN article_categories on categories.category_id = article_categories.category_id
        INNER JOIN articles on articles.article_id = article_categories.article_id 
        WHERE category_type = :type 
        AND articles.is_published = 1 
        GROUP BY article_categories.category_id');
        $this->db->bind(':type', 'database');
        $results = $this->db->resultSet();
        return $results;
    }


    // Récuperer les categories des articles? 
    public function getCategories()
    {
        $this->db->query('SELECT * FROM categories INNER JOIN article_categories on article_categories.category_id = categories.category_id');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategoryName($slug)
    {
        $this->db->query("SELECT * FROM categories WHERE category_name_slug = :slug");

        $this->db->bind(':slug', $slug);

        $row = $this->db->single();

        return $row;

    }


}
