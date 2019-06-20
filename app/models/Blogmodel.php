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
  $this->db->query('SELECT * FROM articles');

  $results = $this->db->resultSet();

  return $results;
 }

 // Add Article
 public function addArticle($data){
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
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  // Get Article By ID
 public function getArticleById($id){
    $this->db->query("SELECT * FROM articles WHERE id = :id");

    $this->db->bind(':id', $id);
    
    $row = $this->db->single();

    return $row;
  }

  // Update Article
 public function updateArticle($data){
    // Prepare Query
    $this->db->query('UPDATE articles SET article_title= :title, article_content = :content, article_image = :image, article_excerpt = :excerpt, article_categories = :categories, article_url = :url, article_slug = :slug WHERE id = :id');
  
    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':content', $data['content']);
    $this->db->bind(':image', $data['article_image']);
    $this->db->bind(':excerpt', $data['excerpt']);
    $this->db->bind(':url', $data['url']);
    $this->db->bind(':categories', $data['categories']);
    $this->db->bind(':slug', $data['slug']);
  
    //Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

  // Get articles by language
  public function getArticlesbyCategory($category){
    $this->db->query('SELECT * FROM articles WHERE article_categories LIKE concat ("%", :category, "%")');

    $this->db->bind(':category', $category);
    
    $results = $this->db->resultSet();

    return $results;
  }

  // Get all languages (HTML, CSS< Javascript...)
  public function getLanguages()
  {
   $this->db->query('SELECT * FROM languages');
 
   $results = $this->db->resultSet();
 
   return $results;
  }
}