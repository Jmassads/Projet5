<?php

  /**
   *
   */
  class Admin extends Controller
  {


      public function __construct()
      {
        $this->projectModel = $this->model('Projectmodel');
        $this->blogModel = $this->model('Blogmodel');
      }

      public function index()
      {
        
        $articles = $this->blogModel->getArticles();
        $projects = $this->projectModel->getProjects();    
        $data = [
          
          'projects' => $projects,
          'articles' => $articles,

         ];
          $this->view('admin/pages/index', $data);
      }
  }
