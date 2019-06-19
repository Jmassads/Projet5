<?php
class Projectmodel
{
 private $db;

 public function __construct()
 {
  $this->db = new Database;
 }

 public function getProjects()
 {
  $this->db->query('SELECT * FROM projects');

  $results = $this->db->resultSet();

  return $results;
 }

 // Get Post By ID
 public function getProjectById($id){
    $this->db->query("SELECT * FROM projects WHERE id = :id");

    $this->db->bind(':id', $id);
    
    $row = $this->db->single();

    return $row;
  }


 // Add Post
 public function addProject($data){
    // Prepare Query
    $this->db->query('INSERT INTO projects (project_name, project_description, project_sm_image, project_lg_image, project_url, project_categories, project_comments) 
    VALUES (:name, :description, :small_image, :large_image, :url, :categories, :comments)');

    // Bind Values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':small_image', $data['small_image']);
    $this->db->bind(':large_image', $data['large_image']);
    $this->db->bind(':url', $data['url']);
    $this->db->bind(':categories', $data['categories']);
    $this->db->bind(':comments', $data['comments']);

    //Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

 // Update Project
 public function updateProject($data){
  // Prepare Query
  $this->db->query('UPDATE projects SET project_name = :name, project_description = :description, project_categories = :categories, project_comments = :comments WHERE id = :id');

  // Bind Values
  $this->db->bind(':id', $data['id']);
  $this->db->bind(':name', $data['name']);
  $this->db->bind(':description', $data['description']);
  $this->db->bind(':categories', $data['categories']);
  $this->db->bind(':comments', $data['comments']);

  //Execute
  if($this->db->execute()){
    return true;
  } else {
    return false;
  }
}

 public function getProjectCategoriesbyProjectID($id)
 {
  $this->db->query('SELECT * 
  FROM projects 
  LEFT JOIN project_technology_categories ON projects.id = project_technology_categories.project_id
  INNER JOIN technology_categories ON project_technology_categories.technology_cat_id=technology_categories.id 
  WHERE projects.id = :id');
  $this->db->bind(':id', $id);
  $results = $this->db->resultSet();

  return $results;
 }

 

}

