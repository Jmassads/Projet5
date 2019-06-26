<?php

/**
 *
 */
class BlogTest extends Controller
{

    public function __construct()
    {
        $this->BlogModel = $this->model('Blogmodel');
    }

    public function index($current_page=1)
    {
       
            $articles = $this->BlogModel->getArticles();
            $categories = $this->BlogModel->getCategories();
            $frontCategories = $this->BlogModel->getFrontCategories();
            $backCategories = $this->BlogModel->getBackCategories();
            $databaseCategories = $this->BlogModel->getDatabaseCategories();
            $per_page = 6;
            $total_count = $this->BlogModel->ArticlesPagination();
            $pagination = new Pagination($current_page, $per_page, $total_count);
            $offset = $pagination->offset();
            $articles = $this->BlogModel->GetPaginatedArticles($per_page, $offset);

            $data = [
                'articles' => $articles,
                'categories' => $categories,
                'frontCategories' => $frontCategories,
                'backCategories' => $backCategories,
                'databaseCategories' => $databaseCategories,
                'articles' => $articles,
                'previous_page' => $pagination->previous_page(),
                'next_page' => $pagination->next_page(),
                'total_pages' => $pagination->total_pages(),
                'current_page' => $current_page,

            ];
            $this->view('front/pages/blogTest', $data);
    }

    public function article($id){
        $categories = $this->BlogModel->getcategories();
            $article = $this->BlogModel->getArticleById($id);
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
            $this->view('front/pages/single-article', $data);
    }

    public function categorie($id)
    {

        $articles = $this->BlogModel->getArticlesbyCategory($id);
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
        $this->view('front/pages/category', $data);
    }
}
