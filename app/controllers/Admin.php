<?php

  /**
   *
   */
  class Admin extends Controller
  {


      public function __construct()
      {
        $this->projectModel = $this->model('Projectmodel');
      }

      public function index()
      {
        $projects = $this->projectModel->getProjects();
      
        $data = [
          'projects' => $projects,
         ];
          $this->view('admin/pages/index', $data);
      }
  }
