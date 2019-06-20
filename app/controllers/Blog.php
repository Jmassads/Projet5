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
        $languages = $this->BlogModel->getLanguages();
        $data = [
          'articles' => $articles,
          'languages' => $languages
         ];
          $this->view('front/pages/blog', $data);
      }

      public function categorie($category){

        $articles = $this->BlogModel->getArticlesbyCategory($category);
        $languages = $this->BlogModel->getLanguages();
        $data = [
          'articles' => $articles,
          'languages' => $languages
         ];
        $this->view('front/pages/category', $data);
      }
  }
