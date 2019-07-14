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

    // Page Blog du front-end
    public function index()
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

    // Pour voir d'autres articles avec AJAX
    public function ajax()
    {
        // On utilise la méthode POST pour envoyer l'id du dernier article posté au serveur
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $article_id = $_POST['last_article_id'];
            $categories = $this->categoryModel->getCategories();

            if (!empty($this->BlogModel->getArticleswithAjax($article_id))) {
                $newArticles = $this->BlogModel->getArticleswithAjax($article_id);
            } else {
                die();
            }

            $data = [
                'newArticles' => $newArticles,
                'categories' => $categories
            ];

            $this->view('front/pages/ajax_more', $data);
        } else {
            $article_id = '';
        }
    }

    // Pour voir les articles par catégorie (HTML, CSS, JAVASCRIPT....)
    public function categorie($nameSlug = null)
    {
        if (is_null($nameSlug)) {
            $this->view('404');
        } else {
            $categoryByNameSlug = $this->categoryModel->getCategoriesByNameSlug($nameSlug);
            $articles = $this->BlogModel->getArticlesbyCategoryName($nameSlug);
            $categories = $this->categoryModel->getCategories();
            $frontCategories = $this->categoryModel->getFrontCategories();
            $backCategories = $this->categoryModel->getBackCategories();
            $databaseCategories = $this->categoryModel->getDatabaseCategories();
            $categoryName = $this->categoryModel->getCategoryName($nameSlug);
            $data = [
                'articles' => $articles,
                'categories' => $categories,
                'frontCategories' => $frontCategories,
                'backCategories' => $backCategories,
                'databaseCategories' => $databaseCategories,
                'categoryName' => $categoryName
            ];

            if (!$categoryByNameSlug) {
                $this->view('404');
            } else {
                $this->view('front/pages/category', $data);
            }
        }
    }
    
    // Pour voir un seul article (front-end)
    public function article($slug = null)
    {

        if (is_null($slug)) {
            $this->view('404');
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
                $this->view('404');
            } else {
                $this->view('front/pages/single-article', $data);
            }

        }
    }

}