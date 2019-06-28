<?php

/**
 *
 */
class Admin extends Controller
{

    public function __construct()
    {
        $this->projectModel = $this->model('Projectmodel');
        $this->blogModel = $this->model('Blogmodel');
        $this->categoryModel = $this->model('Categorymodel');
    }

    public function index()
    {

        $articles = $this->blogModel->getArticlesLimit3();
        $categories = $this->categoryModel->getCategories();
        $projects = $this->projectModel->getProjects();

        $data = [

            'projects' => $projects,
            'articles' => $articles,
            'categories' => $categories,

        ];
        $this->view('admin/pages/index', $data);
    }
}
