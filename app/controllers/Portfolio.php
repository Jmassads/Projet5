<?php

/**
 *
 */
class Portfolio extends Controller
{

    public function __construct()
    {
        $this->projectModel = $this->model('Projectmodel');
    }

    public function index($slug = null)
    {

        if (is_null($slug)) {
            $projects = $this->projectModel->getProjects();
            $data = [
                'projects' => $projects,
            ];
            $this->view('front/pages/projects', $data);
        } else {

            $projects = $this->projectModel->getProjects();
            $project = $this->projectModel->getprojectBySlug($slug);
            $data = [
                'projects' => $projects,
                'project' => $project,

            ];

            if (!$project) {
                die("le projet n'existe pas");
            } else {
                $this->view('front/pages/project', $data);
            }

        }

    }
}
