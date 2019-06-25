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
        $projects = $this->projectModel->getFirstProjects();
        $data = [
            'projects' => $projects
           ];
     
          $this->view('front/pages/index', $data);
      }
  }
