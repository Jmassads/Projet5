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

      public function index($id = null)
      {
        if(is_null($id)){
          $articles= $this->BlogModel->getArticles();
        $languages = $this->BlogModel->getLanguages();
        $data = [
          'articles' => $articles,
          'languages' => $languages
         ];
          $this->view('front/pages/blog', $data);
        }else {

           $article = $this->BlogModel->getArticleById($id);
          $data = [
            'article' => $article
          ];
          $this->view('front/pages/single-article', $data);
        }
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