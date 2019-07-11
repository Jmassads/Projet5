<?php

  /**
   *
   */
  class Home extends Controller
  {


      public function __construct()
      {
        $this->projectModel = $this->model('Projectmodel');
      }

      public function index()
      {
         if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $projects = $this->projectModel->getFirstProjects();
          $data = [
            'projects' => $projects,
            'name' => htmlspecialchars($_POST['name']),
            'email'  => htmlspecialchars($_POST['email']),
            'message' => htmlspecialchars($_POST['message']),

            'name_err' => '',
            'email_err' => '',
            'msg' => '',
            'msgClass' => ''
          ];

          if(empty($data['name'])){
            $data['name_err'] = 'Merci de mettre votre nom';
          }

          if(empty($data['email'])){
            $data['email_err'] = 'Merci de rajouter votre email';
          }

          if(filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false){
            $data['email_err'] = 'Merci de rajouter un email valide';
          }

          if(empty($data['email_err']) && empty($data['name_err'])){

            $name = $data['name'];
            $email = $data['email'];
            $message = $data['message'];

        

            $toEmail = 'juliasajah85@gmail.com';
            $subject = 'Contact Request From ' .$name;
            $body =  "<h2>Contact Request</h2>
                     <h4>Name</h4>
                     <p>$name</p>
                     <h4>Email</h4><p>$email</p>
                     <h4>Message</h4><p>$message</p>";
            // Email Headers
            // $header = "From: noreply@example.com\r\n"; 
            $header.= "MIME-Version: 1.0\r\n"; 
            $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
            $header.= "X-Priority: 1\r\n"; 
            $header .= 'From: ' . $name . "\r\n";

            
            if(mail($toEmail, $subject, $body, $header)){
                flash('contact_message', 'Message envoyé');
                header('location: ' . URLROOT . '/' . '#contact');
            } else {              
                flash('contact_message', "Votre message n'a pas été envoyé", 'alert alert-danger');
                header('location: ' . URLROOT . '/' . '#contact');
            }
          

          } else {
            $this->view('front/pages/index', $data);
            
           
          }

         } else {

   

          $projects = $this->projectModel->getFirstProjects();
          $data = [
              'projects' => $projects,
              'name' => '',
              'email' => '',
              'msg' => '',
              'msgClass' => ''
             ];
       
            $this->view('front/pages/index', $data);
         }
       
      }
  }