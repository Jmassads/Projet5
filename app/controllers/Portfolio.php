<?php

/**
 *
 */
class Portfolio extends Controller
{

    public function __construct()
    {
        $this->projectModel = $this->model('Projectmodel');
        $this->categoryModel = $this->model('Categorymodel');
    }

    // Pour voir tous les projets au front-end
    public function index($slug = null)
    {

        if (is_null($slug)) {
            $projects = $this->projectModel->getPublishedProjects();
            $data = [
                'projects' => $projects,
            ];
            $this->view('front/pages/projects', $data);
        } else {

            $projects = $this->projectModel->getPublishedProjects();
            $project = $this->projectModel->getprojectBySlug($slug);
            $categories = $this->projectModel->getCategoriesByProjectSlug($slug);
            $data = [
                'projects' => $projects,
                'project' => $project,
                'categories' => $categories

            ];

            if (!$project) {
                die("le projet n'existe pas");
            } else {
                $this->view('front/pages/project', $data);
            }

        }

    }


    // Pour voir un seul projet au front-end
    public function projets($slug = null)
    {

        if (is_null($slug)) {
            $projects = $this->projectModel->getPublishedProjects();
            $data = [
                'projects' => $projects,
            ];
            $this->view('front/pages/projects', $data);
        } else {

            $projects = $this->projectModel->getPublishedProjects();
            $project = $this->projectModel->getprojectBySlug($slug);
            $categories = $this->projectModel->getCategoriesByProjectSlug($slug);
            $data = [
                'projects' => $projects,
                'project' => $project,
                'categories' => $categories

            ];

            if(!$project){
                $this->view('404');
            } else {
                $this->view('front/pages/project', $data);
            }

        }   

    }

}
