<?php

/**
 *
 */
class AdminProjects extends Controller
{

    public function __construct()
    {
        $this->projectModel = $this->model('Projectmodel');
    }

    // Tous les projets
    public function index()
    {
        $projects = $this->projectModel->getProjects();

        $data = [
            'projects' => $projects,
        ];
        $this->view('admin/projects/index', $data);
    }

    // Un seul Projet
    public function show($id)
    {

        $project = $this->projectModel->getProjectById($id);

        $data = [
            'project' => $project,
        ];
        $this->view('admin/projects/show', $data);
    }

    // Ajouter un projet
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['categories'])) {
                $categories = implode(",", $_POST["categories"]);
            } else {
                $categories = '';
            }

            $data = [
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'small_image' => str_replace(' ', '', $_FILES['project_sm_image']['name']),
                'large_image' => str_replace(' ', '', $_FILES['project_lg_image']['name']),
                'url' => trim($_POST['url']),
                'categories' => $categories,
                'comments' => trim($_POST['comments']),
                'slug' => cleaner(trim($_POST['name'])),

                'name_err' => '',
                'description_err' => '',
                'small_image_err' => '',
                'large_image_err' => '',
                'url_err' => '',
                'comments_err' => '',

            ];

            // Validate project name
            if (empty($data['name'])) {
                $data['name_err'] = 'Merci de rajouter un nom pour le projet';
            }
            // Validate project description
            if (empty($data['description'])) {
                $data['description_err'] = 'Merci de rajouter une description';
            }

            // Validate project url
            if (empty($data['url'])) {
                $data['url_err'] = "Merci de rajouter l'url du projet";
            }

            // Validate project comments
            if (empty($data['comments'])) {
                $data['comments_err'] = "Merci de rajouter les commentaires du mentor";
            }

            $small_image_uploader = new Uploader();
            $small_image_uploader->uploadFile('project_sm_image');
            $small_image_error_message = $small_image_uploader->getError();
            $data['small_image_err'] = $small_image_error_message;

            $large_image_uploader = new Uploader();
            $large_image_uploader->uploadFile('project_lg_image');
            $large_image_error_message = $large_image_uploader->getError();
            $data['large_image_err'] = $large_image_error_message;

            // Make sure there are no errors
            if (empty($data['name_err']) && empty($data['description_err']) && empty($data['url_err']) && empty($data['comments_err']) && empty($data['small_image_err']) && empty($data['large_image_err'])) {
                // Validation passed
                //Execute
                if ($this->projectModel->addProject($data)) {
                    // Redirect to login
                    flash('project_message', 'Projet ajouté');
                    redirect('AdminProjects');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/projects/add', $data);
            }

        } else {
            $data = [
                'name' => '',
                'description' => '',
                'small_image' => '',
                'large_image' => '',
                'url' => '',
                'comments' => '',
                'categories' => '',
                'slug' => '',
            ];

            $this->view('admin/projects/add', $data);
        }
    }

    public function edit($id)
    {

        if (!empty($_POST['categories'])) {
            $categories = implode(",", $_POST["categories"]);
        } else {
            $categories = '';
        }

        $project = $this->projectModel->getProjectById($id);

        if (!empty($_FILES['project_sm_image']['name'])) {
            $small_image = str_replace(' ', '', $_FILES['project_sm_image']['name']);
        } else {
            $small_image = $project->project_sm_image;
        }

        if (!empty($_FILES['project_lg_image']['name'])) {
            $large_image = str_replace(' ', '', $_FILES['project_lg_image']['name']);
        } else {
            $large_image = $project->project_lg_image;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'small_image' => $small_image,
                'large_image' => $large_image,
                'categories' => $categories,
                'url' => trim($_POST['url']),
                'comments' => trim($_POST['comments']),
                'slug' => cleaner(trim($_POST['name'])),

                'name_err' => '',
                'description_err' => '',
                'url_err' => '',
                'comments_err' => '',
            ];

            // FINISH ERRORS!!!!!!!!!!!

            // Validate project name
            if (empty($data['name'])) {
                $data['name_err'] = 'Merci de rajouter un nom pour le projet';

            }
            // Validate project description
            if (empty($data['description'])) {
                $data['description_err'] = 'Merci de rajouter une description';
            }

            $small_image_uploader = new Uploader();
            $small_image_uploader->uploadFile('project_sm_image');
            $small_image_error_message = $small_image_uploader->getError();
            $data['small_image_err'] = $small_image_error_message;

            $large_image_uploader = new Uploader();
            $large_image_uploader->uploadFile('project_lg_image');
            $large_image_error_message = $large_image_uploader->getError();
            $data['large_image_err'] = $large_image_error_message;

            // Make sure there are no errors
            if (empty($data['name_err']) && empty($data['description_err']) && empty($data['url_err']) && empty($data['comments_err']) && empty($data['small_image_err']) && empty($data['large_image_err'])) {
                // Validation passed
                //Execute
                if ($this->projectModel->updateProject($data)) {
                    // Redirect to login
                    flash('project_message', 'Projet modifié');
                    redirect('AdminProjects');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/projects/edit', $data);
            }
        } else {
            // Get Project from model
            $project = $this->projectModel->getProjectById($id);

            $data = [
                'id' => $id,
                'name' => $project->project_name,
                'small_image' => $project->project_sm_image,
                'large_image' => $project->project_lg_image,
                'description' => $project->project_description,
                'url' => $project->project_url,
                'categories' => $project->project_categories,
                'comments' => $project->project_comments,
                'slug' => $project->project_slug,
            ];

            $this->view('admin/projects/edit', $data);
        }
    }

}
