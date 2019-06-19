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
        $projects = $this->projectModel->getProjects();
        $data = [
            'projects' => $projects
           ];
        $projects = $this->projectModel->getProjects();
          $this->view('front/pages/index', $data);
      }
  }
