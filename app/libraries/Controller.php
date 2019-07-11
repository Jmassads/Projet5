<?php
/*
 * Base Controller
 * Charge les models et les vues
 */
class Controller
{
 /**
  * model
  * Charge le model
  * Instancie le model
  * @param mixed $model
  * @return void
  */
 public function model($model)
 {
  // Require model file
  require_once '../app/models/' . $model . '.php';

  // Instantiate model
  return new $model();
 }

 /**
  * view
  * Charge la vue
  * tableau $data represente toutes les données provenant de la base de donnée que l'on va passer dans les vues, ainsi que les données que nous allons inserer dans la base de donnée.
  * @param mixed $view
  * @param mixed $data
  * @return void
  */
 public function view($view, $data = [])
 {
  // Check for view file
  if (file_exists('../app/views/' . $view . '.php')) {
   require_once '../app/views/' . $view . '.php';
  } else {
   // View does not exist
   die("View does not exist");
  }
 }

}
