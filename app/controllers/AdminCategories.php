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

    // Load All Posts
    public function index()
    {
        $categories = $this->categoryModel->getAllDatabaseCategories();

        $data = [
            'categories' => $categories,
        ];

        $this->view('admin/categories/index', $data);
    }

    // Add Category
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

    // Edit Post
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'type' => trim($_POST['type']),
                'name_slug' => cleaner(trim($_POST['name'])),
                'type_slug' => cleaner(trim($_POST['type'])),

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
            // Get post from model
            $category = $this->categoryModel->getCategoryById($id);

            $data = [
                'id' => $id,
                'name' => $category->category_name,
                'type' => $category->category_type,
            ];

            $this->view('admin/categories/edit', $data);
        }

    }

    // Delete Post
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
