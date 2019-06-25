<?php

/**
 *
 */
class AdminArticles extends Controller
{

    public function __construct()
    {
        $this->blogModel = $this->model('Blogmodel');
    }

// Tous les articles
    public function index()
    {
        $articles = $this->blogModel->getArticles();

        $data = [
            'articles' => $articles,
        ];
        $this->view('admin/articles/index', $data);
    }

    // Ajouter un article
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // To join array elements with a string
            // if (!empty($_POST['categories'])) {
            //     $categories = implode(",", $_POST["categories"]);
            // } else {
            //     $categories = '';
            // }

           
            $data = [
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'article_image' => str_replace(' ', '', $_FILES['article_image']['name']),
                'slug' => clean(trim($_POST['title'])),
                'excerpt' => trim($_POST['excerpt']),

                'title_err' => '',
                'content_err' => '',
                'image_err' => '',
                'excerpt_err' => '',

            ];

            // Validate article title
            if (empty($data['title'])) {
                $data['title_err'] = 'Merci de rajouter un titre pour l\'article';
            }
            // Validate article content
            if (empty($data['content'])) {
                $data['content_err'] = 'Merci de rajouter un contenu';
            }
            // Validate article excerpt
            if (empty($data['excerpt'])) {
                $data['excerpt_err'] = 'Merci de rajouter un excerpt';
            }

            $article_image_uploader = new Uploader();
            $article_image_uploader->uploadFile('article_image');
            $article_image_error_message = $article_image_uploader->getError();
            $data['article_image_err'] = $article_image_error_message;

            // Make sure there are no errors
            if (empty($data['title_err']) && empty($data['content_err']) && empty($data['excerpt_err']) && empty($data['article_image_err'])) {
                // Validation passed
                //Execute
                
                if ($this->blogModel->addArticle($data)) {

                    $article_id = $this->blogModel->getId();
                    
                    $categories = $_POST['categories'];
                    foreach($categories as $category){
                        // die(print_r($categories));
                        $this->blogModel->addArticleCategory($category, $article_id);
                    }
                    // Redirect to login
                    flash('article_message', 'Article ajouté');
                    redirect('AdminArticles');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load view with errors
                $this->view('admin/articles/add', $data);
            }

        } else {
            $data = [
                'title' => '',
                'content' => '',
                'image' => '',
                'slug' => '',
                'excerpt' => '',
                'categories' => []
            ];

            $this->view('admin/articles/add', $data);
        }
    }

    public function show($id)
    {

        $article = $this->blogModel->getArticleById($id);

        $data = [
            'article' => $article,
        ];
        $this->view('admin/articles/show', $data);
    }

    public function edit($id)
    {
        // To join array elements with a string

        $article = $this->blogModel->getArticleById($id);

        if (!empty($_FILES['article_image']['name'])) {
            $article_image = str_replace(' ', '', $_FILES['article_image']['name']);
        } else {
            $article_image = $article->article_image;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'article_image' => $article_image,
                'excerpt' => trim($_POST['excerpt']),
                'url' => trim($_POST['url']),
                'slug' => clean(trim($_POST['title'])),


                'title_err' => '',
                'content_err' => '',
                'excerpt_err' => '',
            ];

            // FINISH ERRORS!!!!!!!!!!!

            // Validate article title
            if (empty($data['name'])) {
                $data['name_err'] = 'Merci de rajouter un nom pour le projet';

            }
            // Validate article content
            if (empty($data['description'])) {
                $data['description_err'] = 'Merci de rajouter une description';
            }

            // Validate article content
            if (empty($data['excerpt'])) {
                $data['excerpt_err'] = 'Merci de rajouter une excerpt';
            }

            $article_image_uploader = new Uploader();
            $article_image_uploader->uploadFile('article_image');
            $article_image_error_message = $article_image_uploader->getError();
            $data['article_image_err'] = $article_image_error_message;

            // Make sure there are no errors
            if (empty($data['title_err']) && empty($data['content_err']) && empty($data['article_image_err'])) {
                $categories = $this->blogModel->getCategoriesByArticleId($id);
          
                $checkedCategories = array_map(function($category){
                    return $category->category_id;
                }, $categories);
 
                $newCategories = $_POST['categories'];
                // Validation passed
                //Execute
                if ($this->blogModel->updateArticle($data)) {
                    
                  
                
                    // die(print_r($checkedCategories));
                    foreach($newCategories as $newCategory){
                        // die(print_r($categories));
                        if(!in_array($newCategory, $checkedCategories))
                        $this->blogModel->addArticleCategory($newCategory, $id);
                        }

                    // Redirect to login
                    flash('article_message', 'Article modifié');
                    redirect('AdminArticles');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/articles/edit', $data);
            }
        } else {
            // Get Project from model
            $article = $this->blogModel->getArticleById($id);
            $checkedCategories = $this->blogModel->getCategoriesByArticleId($id);
            $data = [
                'id' => $id,
                'content' => $article->article_content,
                'title' => $article->article_title,
                'article_image' => $article->article_image,
                'slug' => $article->article_slug,
                'excerpt' => $article->article_excerpt,
                'url' => $article->article_url,
                'checkedCategories' => $checkedCategories
            ];

            $this->view('admin/articles/edit', $data);
        }
    }

}
