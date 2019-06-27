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

    public function index($current_page=1)
    {
       
            $articles = $this->BlogModel->getArticlesLimit3();
            $categories = $this->BlogModel->getCategories();
            $frontCategories = $this->BlogModel->getFrontCategories();
            $backCategories = $this->BlogModel->getBackCategories();
            $databaseCategories = $this->BlogModel->getDatabaseCategories();

            $data = [
                'articles' => $articles,
                'categories' => $categories,
                'frontCategories' => $frontCategories,
                'backCategories' => $backCategories,
                'databaseCategories' => $databaseCategories,


            ];
            $this->view('front/pages/blog', $data);
    }

    public function ajax(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $article_id = $_POST['last_article_id'];

            if(!empty($this->BlogModel->getArticleswithAjax($article_id))){
                $newArticles = $this->BlogModel->getArticleswithAjax($article_id);
            } else {
                die();
            }
            
            $data = [
                'newArticles' => $newArticles
            ];
            

            $this->view('front/pages/ajax_more', $data);
        } else {
            $article_id = '';
        }    
    }

    public function article($slug = null){

        if (is_null($slug)){
            die('redirection page');
        } else {

            $categories = $this->BlogModel->getcategories();
            $article = $this->BlogModel->getarticleBySlug($slug);
            $frontCategories = $this->BlogModel->getFrontCategories();
            $backCategories = $this->BlogModel->getBackCategories();
            $databaseCategories = $this->BlogModel->getDatabaseCategories();
            $data = [
                'categories' => $categories,
                'article' => $article,
                'frontCategories' => $frontCategories,
                'backCategories' => $backCategories,
                'databaseCategories' => $databaseCategories,
            ];

            if(!$article){
              die("cet article n'existe pas"); 
            } else {
                $this->view('front/pages/single-article', $data);
            }
            
        }
    }

    public function categorie($name)
    {
        $categoryName = $this->BlogModel->getCategoriesByName($name);
        $articles = $this->BlogModel->getArticlesbyCategoryName($name);
        $categories = $this->BlogModel->getCategories();
        $frontCategories = $this->BlogModel->getFrontCategories();
        $backCategories = $this->BlogModel->getBackCategories();
        $databaseCategories = $this->BlogModel->getDatabaseCategories();
        $data = [
            'articles' => $articles,
            'categories' => $categories,
            'frontCategories' => $frontCategories,
            'backCategories' => $backCategories,
            'databaseCategories' => $databaseCategories,
        ];

        if(!$categoryName){
            die("Redirection - la catégorie n'existe pas");
        } else {
            $this->view('front/pages/category', $data);
        }  
    }
}
