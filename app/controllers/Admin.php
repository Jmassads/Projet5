<?php

/**
 *
 */
class Admin extends Controller
{

    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            redirect('Users/login');
        }
        
        $this->projectModel = $this->model('Projectmodel');
        $this->blogModel = $this->model('Blogmodel');
        $this->categoryModel = $this->model('Categorymodel');
    }

    // Tableau de bord
    public function index()
    {
        $allArticles = $this->blogModel->countAllArticles();
        $publishedArticles = $this->blogModel->countPublishedArticles();
        $notPublishedArticles = $this->blogModel->countNotPublishedArticles();
        $categories = $this->categoryModel->getCategories();
        $allcategories = $this->categoryModel->countAllCategories();
        $projects = $this->projectModel->getProjects();
        $allProjects = $this->projectModel->countAllProjects();
        $publishedProjects = $this->projectModel->countPublishedProjects();
        $notPublishedProjects = $this->projectModel->countNotPublishedProjects();

        $data = [

            'allProjects' => $allProjects,
            'projects' => $projects,
            'publishedProjects' => $publishedProjects,
            'notPublishedProjects' => $notPublishedProjects,
            'allArticles' => $allArticles,
            'publishedArticles' => $publishedArticles,
            'notPublishedArticles' => $notPublishedArticles,
            'allcategories' => $allcategories,
            'categories' => $categories,

        ];
        $this->view('admin/index', $data);
    }
}
