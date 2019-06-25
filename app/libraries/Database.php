<?php
/*
 * PDO Database Class
 * Create prepared statements
 * Bind values
 * Return rows and results
 */
class Database
{
 private $host = DB_HOST; //* le chemin vers le serveur
 private $user = DB_USER; // nom d'utilisateur pour se connecter
 private $pass = DB_PASS; // mot de passe de l'utilisateur pour se connecter
 private $dbname = DB_NAME; //* le nom de votre base de données

 private $dbh; // Database handler
 private $stmt; // La requête
 private $error;

 public function __construct()
 {

  // Le Data Source Name, ou DSN, contient les informations requises pour se connecter à la base. Il est composé des éléments suivants :
  // Préfixe DSN - Le préfixe DSN est mysql
  // host - L'hôte sur lequel le serveur de base de données se situe.
  // dbname - Le nom de la base de données.

  // $dsn = 'mysql:host=localhost;dbname=db_jf';
  $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
  $options = array(
   PDO::ATTR_PERSISTENT => true,
   // if there is an error in SQL, PDO will throw exceptions and script will stop running
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   //  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
  );

  // Crée une instance PDO qui représente une connexion à la base
  // le nom d'hôte (localhost) ;
  // la nom de la base de données ;
  // le nom d'utilisateur
  // le mot de passe
  try {
   $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
  } catch (PDOException $e) { // le catch est chargé d'intercepter une éventuelle erreur apparue dans le try
   $this->error = $e->getMessage();
   echo $this->error;
  }}

 // On prépare la requête
 public function query($sql)
 {
  $this->stmt = $this->dbh->prepare($sql);
 }

 // On lie chaque marqueur à une valeur
 public function bind($param, $value, $type = null)
 {
  if (is_null($type)) {
   switch (true) {
    case is_int($value):
     $type = PDO::PARAM_INT;
     break;
    case is_bool($value):
     $type = PDO::PARAM_BOOL;
     break;
    case is_null($value):
     $type = PDO::PARAM_NULL;
     break;
    default:
     $type = PDO::PARAM_STR;
   }
  }

  $this->stmt->bindValue($param, $value, $type);
 }

 // Execution de la requête préparée
 // On applique la méthod execute
 // Cette fonction retourne TRUE en cas de succès ou FALSE si une erreur survient.
 public function execute()
 {
  return $this->stmt->execute();
 }

 public function resultSet()
 {
  $this->execute();
  return $this->stmt->fetchAll(PDO::FETCH_OBJ);
 }

 // On Récupère une seule entrée sous forme d'objet
 public function single()
 {
  $this->execute();
  return $this->stmt->fetch(PDO::FETCH_OBJ);
 }

 // Retourne le nombre de lignes affectées
 public function rowCount()
 {
  return $this->stmt->rowCount();
 }

 // Returns the last inserted ID
 public function lastInsertId(){
  return $this->dbh->lastInsertId();
}


}
