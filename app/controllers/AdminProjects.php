<?php

/**
 *
 */
class AdminProjects extends Controller
{

    public function __construct()
    {
        $this->projectModel = $this->model('Projectmodel');
        $this->categoryModel = $this->model('Categorymodel');
    }

    // Voir tous les projets
    public function index()
    {
        $projects = $this->projectModel->getProjects();

        $data = [
            'projects' => $projects,
        ];
        $this->view('admin/projects/index', $data);
    }

    // Voir un seul Projet
    public function show($id)
    {

        $project = $this->projectModel->getProjectById($id);
        $categories = $this->projectModel->getCategoriesByProjectId($id);

        $data = [
            'project' => $project,
            'categories' => $categories
        ];
        $this->view('admin/projects/show', $data);
    }

    // Ajouter un projet
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();

            if (!isset($_POST['is_published'])) {
                $is_published = '';

            } else {
                // leave the default value
                $is_published = $_POST['is_published'];
            }

            $data = [
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'small_image' => str_replace(' ', '', $_FILES['project_sm_image']['name']),
                'large_image' => str_replace(' ', '', $_FILES['project_lg_image']['name']),
                'url' => trim($_POST['url']),
                // 'categories' => $categories,
                'comments' => trim($_POST['comments']),
                'slug' => cleaner(trim($_POST['name'])),
                'databaseCategories' => $databaseCategories,
                'is_published' => $is_published,

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

            $small_image_uploader = new Uploader();
            $small_image_uploader->uploadFile('project_sm_image');
            $small_image_error_message = $small_image_uploader->getError();
            $data['small_image_err'] = $small_image_error_message;

            $large_image_uploader = new Uploader();
            $large_image_uploader->uploadFile('project_lg_image');
            $large_image_error_message = $large_image_uploader->getError();
            $data['large_image_err'] = $large_image_error_message;

            // Make sure there are no errors
            if (empty($data['name_err']) && empty($data['description_err']) && empty($data['url_err']) && empty($data['small_image_err']) && empty($data['large_image_err'])) {
                // Validation passed
                //Execute
                if ($this->projectModel->addProject($data)) {

                    // (lastInsertId) — Retourne l'identifiant de la dernière ligne insérée ou la valeur d'une séquence
                    $project_id = $this->projectModel->getId();

                    $categories = $_POST['categories'];
                    foreach ($categories as $category) {
                        // die(print_r($categories));
                        $this->projectModel->addProjectCategory($category, $project_id);
                    }

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

            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();

            $data = [
                'name' => '',
                'description' => '',
                'small_image' => '',
                'large_image' => '',
                'url' => '',
                'comments' => '',
                'categories' => '',
                'slug' => '',
                'databaseCategories' => $databaseCategories,
                'is_published' => '',
            ];

            $this->view('admin/projects/add', $data);
        }
    }

    // Modifier un projet
    public function edit($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $project = $this->projectModel->getProjectById($id);
            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();
            $checkedCategories = $this->projectModel->getCategoriesByProjectId($id);

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

            if (isset($_POST['is_published']) && $_POST['is_published'] != '') {
                $is_published = $_POST['is_published'];
           
            } else {
                // leave the default value
                $is_published = $project->is_published;
               
            }

        

            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'small_image' => $small_image,
                'large_image' => $large_image,

                'url' => trim($_POST['url']),
                'comments' => trim($_POST['comments']),
                'slug' => cleaner(trim($_POST['name'])),
                'is_published' => $is_published,
                'checkedCategories' => $checkedCategories,
                'databaseCategories' => $databaseCategories,

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

            if (empty($data['url'])) {
                $data['url_err'] = 'Merci de rajouter une description';
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
            if (empty($data['name_err']) && empty($data['description_err']) && empty($data['url_err']) && empty($data['small_image_err']) && empty($data['large_image_err'])) {
                // Validation passed

                $categories = $this->projectModel->getCategoriesByProjectId($id);

                $checkedCategories = array_map(function ($category) {
                    return $category->category_id;
                }, $categories);

                // die(print_r($checkedCategories));

                // on verifie si il y a des catégories
                if (!empty($_POST['categories'])) {
                    $newCategories = $_POST['categories'];
                } else {
                    $newCategories = [];
                }

                //Execute
                if ($this->projectModel->updateProject($data)) {

                    // die(print_r($checkedCategories));
                    foreach ($newCategories as $newCategory) {
                        // die(print_r($categories));
                        // on verifie si la categorie existe deja. si elle existe on ne la rajoute pas. si elle n'existe pas on la rajoute
                        if (!in_array($newCategory, $checkedCategories)) {
                            $this->projectModel->addProjectCategory($newCategory, $id);
                        }
                    }

                    // array with std objects
                    $databaseCategoriesStd = $this->projectModel->getCategoriesbyProjectID($id);

                    // convert to array to be able to compare 2 arrays later
                    $databaseCategories = json_decode(json_encode($databaseCategoriesStd), true);
                    // die(print_r($databaseCategories));

                    foreach ($databaseCategories as $databaseCategory) {

                        $databaseCategoryId = $databaseCategory['category_id'];

                        if (!in_array($databaseCategory['category_id'], $newCategories)) {
                            // die(print_r($databaseCategory));
                            $this->projectModel->deleteprojectCategory($databaseCategory['category_id'], $id);
                        }
                    }

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
            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();
            $checkedCategories = $this->projectModel->getCategoriesByProjectId($id);
            $data = [
                'id' => $id,
                'name' => $project->project_name,
                'small_image' => $project->project_sm_image,
                'large_image' => $project->project_lg_image,
                'description' => $project->project_description,
                'url' => $project->project_url,
                'comments' => $project->project_comments,
                'slug' => $project->project_slug,
                'is_published' => $project->is_published,
                'checkedCategories' => $checkedCategories,
                'databaseCategories' => $databaseCategories,
            ];

            $this->view('admin/projects/edit', $data);
        }
    }

    // Supprimer un projet
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Execute
            if ($this->projectModel->deleteProject($id)) {
                // Redirect to login
                flash('project_message', 'Projet supprimé');
                redirect('AdminProjects');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('AdminProjects');
        }
    }

    // Voir les projets publiés
    public function published()
    {

        $published_projects = $this->projectModel->getPublishedProjects();

        $data = [
            'published_projects' => $published_projects,
        ];
        $this->view('admin/projects/published', $data);
    }

    // Voir les projets non publiés
    public function notpublished()
    {
        $nonPublished_projects = $this->projectModel->getNonPublishedProjects();

        $data = [

            'nonPublished_projects' => $nonPublished_projects,
        ];
        $this->view('admin/projects/notpublished', $data);
    }
}
