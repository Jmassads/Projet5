<?php

  /**
   *
   */
  class Portfolio extends Controller
  {


      public function __construct()
      {
        $this->projectModel = $this->model('Projectmodel');
      }

      public function index($slug)
      {
        $projects = $this->projectModel->getProjects();
        $project = $this->projectModel->getprojectBySlug($slug);
          $data = [
            'projects' => $projects,
            'project' => $project
           ];

          $this->view('front/pages/project', $data);
      }
  }
