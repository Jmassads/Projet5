<?php

/**
 *
 */
class Blog extends Controller
{

    public function __construct()
    {
        $this->BlogModel = $this->model('Blogmodel');
        $this->categoryModel = $this->model('Categorymodel');
    }

    public function index($current_page = 1)
    {

        $articles = $this->BlogModel->getArticlesLimit6();
        $categories = $this->categoryModel->getCategories();
        $frontCategories = $this->categoryModel->getFrontCategories();
        $backCategories = $this->categoryModel->getBackCategories();
        $databaseCategories = $this->categoryModel->getDatabaseCategories();

        $data = [
            'articles' => $articles,
            'categories' => $categories,
            'frontCategories' => $frontCategories,
            'backCategories' => $backCategories,
            'databaseCategories' => $databaseCategories,

        ];
        $this->view('front/pages/blog', $data);
    }

    public function ajax()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $article_id = $_POST['last_article_id'];

            if (!empty($this->BlogModel->getArticleswithAjax($article_id))) {
                $newArticles = $this->BlogModel->getArticleswithAjax($article_id);
            } else {
                die();
            }

            $data = [
                'newArticles' => $newArticles,
            ];

            $this->view('front/pages/ajax_more', $data);
        } else {
            $article_id = '';
        }
    }

    public function categorie($nameSlug = null)
    {
        if (is_null($nameSlug)) {
            die("redirection");
        } else {
            $categoryByNameSlug = $this->categoryModel->getCategoriesByNameSlug($nameSlug);
            $articles = $this->BlogModel->getArticlesbyCategoryName($nameSlug);
            $categories = $this->categoryModel->getCategories();
            $frontCategories = $this->categoryModel->getFrontCategories();
            $backCategories = $this->categoryModel->getBackCategories();
            $databaseCategories = $this->categoryModel->getDatabaseCategories();
            $data = [
                'articles' => $articles,
                'categories' => $categories,
                'frontCategories' => $frontCategories,
                'backCategories' => $backCategories,
                'databaseCategories' => $databaseCategories,
            ];

            if (!$categoryByNameSlug) {
                die("Redirection - la catégorie n'existe pas");
            } else {
                $this->view('front/pages/category', $data);
            }
        }
    }
    
    public function article($slug = null)
    {

        if (is_null($slug)) {
            die('redirection page');
        } else {

            $categories = $this->categoryModel->getcategories();
            $article = $this->BlogModel->getarticleBySlug($slug);
            $frontCategories = $this->categoryModel->getFrontCategories();
            $backCategories = $this->categoryModel->getBackCategories();
            $databaseCategories = $this->categoryModel->getDatabaseCategories();
            $data = [
                'categories' => $categories,
                'article' => $article,
                'frontCategories' => $frontCategories,
                'backCategories' => $backCategories,
                'databaseCategories' => $databaseCategories,
            ];

            if (!$article) {
                die("cet article n'existe pas");
            } else {
                $this->view('front/pages/single-article', $data);
            }

        }
    }

}