<?php

/**
 *
 */
class AdminCategories extends Controller
{

    public function __construct()
    {
        $this->categoryModel = $this->model('Categorymodel');
    }

    // Voir toutes les catégories
    public function index()
    {
        $categories = $this->categoryModel->getAllDatabaseCategories();

        $data = [
            'categories' => $categories,
        ];

        $this->view('admin/categories/index', $data);
    }

    // Ajouter une catégorie
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'name' => trim($_POST['name']),
                'type' => trim($_POST['type']),
                'name_slug' => cleaner(trim($_POST['name'])),
                'type_slug' => cleaner(trim($_POST['type'])),

                'name_err' => '',
                'type_err' => '',
            ];

            // Validate name
            if (empty($data['name'])) {
                $data['title_err'] = 'Merci de rajouter un nom de catégorie';
            }
            // Validate type
            if (empty($data['type'])) {
                $data['type_err'] = 'Merci de choisir le type de catégorie';
            }

            // Make sure there are no errors
            if (empty($data['name_err']) && empty($data['type_err'])) {
                // Validation passed
                //Execute
                if ($this->categoryModel->addCategory($data)) {
                    // Redirect to login
                    flash('category_message', 'Catégorie ajoutée');
                    redirect('AdminCategories');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/categories/add', $data);
            }

        } else {
            $data = [
                'name' => '',
                'type' => '',
            ];

            $this->view('admin/categories/add', $data);
        }
    }

    // Modifier une catégorie
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $category = $this->categoryModel->getCategoryById($id);

            if(!empty($_POST['type'])){
                $type = trim($_POST['type']);
            } else {
                $type = $category->category_type;
            }

            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'type' => $type,
                'name_slug' => cleaner(trim($_POST['name'])),
                'type_slug' => cleaner($type),

                'name_err' => '',
                'type_err' => '',
            ];

            // Validate name
            if (empty($data['name'])) {
                $data['name_err'] = 'Merci de rajouter un nom de catégorie';
            }
            // Validate type
            if (empty($data['type'])) {
                $data['type_err'] = 'Merci de choisir le type de catégorie';
            }

            // Make sure there are no errors
            if (empty($data['name_err']) && empty($data['type_err'])) {
                // Validation passed
                //Execute
                if ($this->categoryModel->updateCategory($data)) {
                    // Redirect to login
                    flash('category_message', 'Catégorie modifiée');
                    redirect('AdminCategories');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/categories/edit', $data);
            }

        } else {
       
            $category = $this->categoryModel->getCategoryById($id);

            $data = [
                'id' => $id,
                'name' => $category->category_name,
                'type' => $category->category_type,
            ];

            $this->view('admin/categories/edit', $data);
        }

    }

    // Supprimer une catégorie
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Execute
            if ($this->categoryModel->deleteCategory($id)) {
                // Redirect to categories index page
                flash('category_message', 'Catégorie supprimée');
                redirect('AdminCategories');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('AdminCategories');
        }
    }
}
