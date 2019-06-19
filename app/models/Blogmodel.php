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
}