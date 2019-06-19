<?php

  /**
   *
   */
  class Project extends Controller
  {


      public function __construct()
      {
        $this->projectModel = $this->model('Projectmodel');
      }

      public function index($id)
      {
        $projects = $this->projectModel->getProjects();
        $project = $this->projectModel->getprojectById($id);
        $categories = $this->projectModel->getProjectCategoriesbyProjectID($id);
          $data = [
            'projects' => $projects,
            'project' => $project,
            'categories' => $categories
           ];

          $this->view('front/pages/project', $data);
      }
  }
