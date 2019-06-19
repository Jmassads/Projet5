<?php

  /**
   *
   */
  class Blog extends Controller
  {


      public function __construct()
      {
        $this->BlogModel = $this->model('Blogmodel');
      }

      public function index()
      {
        $articles= $this->BlogModel->getArticles();
        $data = [
          'articles' => $articles,
         ];
          $this->view('front/pages/blog', $data);
      }
  }
