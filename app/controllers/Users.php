<?php
  class Users extends Controller{
    public function __construct(){
      $this->userModel = $this->model('User');
    }


    // Pour enregister un utilisateur
    public function register(){
      // Check if logged in
      if (!isset($_SESSION['user_id'])) {
        redirect('Users/login');
       }

      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Validate email
        if(empty($data['email'])){
            $data['email_err'] = 'Please enter an email';
            // Validate name
            if(empty($data['name'])){
              $data['name_err'] = 'Please enter a name';
            }
        } else{
          // Check Email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = "L'email est déja enregistré";
          }
        }

        // Validate password
        if(empty($data['password'])){
          $password_err = 'Please enter a password.';     
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Le mot de passe doit contenir au moins 6 caractères';
        }

        // Validate confirm password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Merci de confirmer le mot de passe.';     
        } else{
            if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = '
                Les mots de passe ne correspondent pas.';
            }
        }
         
        // Make sure errors are empty
        if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // SUCCESS - Proceed to insert

          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          //Execute
          if($this->userModel->register($data)){
            // Redirect to login
            flash('register_success', "L'utilisateur a bien été enregistré, veuille vous connecter ");
            redirect('users/login');
          } else {
            die('Something went wrong');
          }
           
        } else {
          // Load View
          $this->view('users/register', $data);
        }
      } else {
        // IF NOT A POST REQUEST

        // Init data
        $data = [
          'name' => '',
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load View
        $this->view('users/register', $data);
      }
    }

    // Pour se connecter
    public function login(){
      // Check if logged in
      if($this->isLoggedIn()){
        redirect('admin');
      }


      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // https://zestedesavoir.com/tutoriels/pdf/295/les-filtres-en-php.pdf
        // Supprime les balises, et supprime ou encode les caractères spéciaux (Pour valider plusieurs variables à la fois)
        // htmlspecialchars — Convertit les caractères spéciaux en entités HTML
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // On récupère l'email et mot de passe 
        $data = [       
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),        
          'email_err' => '',
          'password_err' => '',       
        ];     


        // die(print_r($_POST));

        // On verifie que l'email n'est pas 'vide'
        if(empty($data['email'])){
          $data['email_err'] = 'Merci de rajouter votre email';
        }

        // On verifie que le mot de passe n'est pas 'vide'
        if(empty($data['name'])){
          $data['name_err'] = 'Merci de rajouter votre nom';
        }

        // On appelle la methode finfUserByEmail du model pour verifier si l'email existe
        if($this->userModel->findUserByEmail($data['email'])){
          // si TRUE on continue... l'email a bien été trouvé
        } else {
          // sinon, on affiche à l'utilisateur que l'email n'est pas enregistré
          $data['email_err'] = "Cet email n'est pas enregistré";
        }

        // Si il n'y a pas d'erreurs
        if(empty($data['email_err']) && empty($data['password_err'])){

          // On appelle la méthode login du model qui permet de verifier le mot de passe
          // hashed avec password_verify du mot de passe qui a ete entré
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          // si il y a bien un résultat
          if($loggedInUser){
            // On crée une session pour l'utilisateur
            $this->createUserSession($loggedInUser);
           
          } else {
            $data['password_err'] = 'Mot de passe incorrect';
            // Load View
            $this->view('users/login', $data);
          }
           
        } else {
          // Load View
          $this->view('users/login', $data);
        }

      } else {

        // Init data
        $data = [
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',
        ];

        // Load View
        $this->view('users/login', $data);
      }
    }

    // On crée une session pour l'utilisateur et on redirige vers l'admin
    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email; 
      $_SESSION['user_name'] = $user->name;
      redirect('admin');
    }

    // Logout & Destroy Session
    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('users/login');
    }

    // Check Logged In
    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
        return true;
      } else {
        return false;
      }
    }
  }