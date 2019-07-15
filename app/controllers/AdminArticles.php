<?php

/**
 *
 */
class AdminArticles extends Controller
{

    public function __construct()
    {
        $this->blogModel = $this->model('Blogmodel');
        $this->categoryModel = $this->model('Categorymodel');
    }

    // Voir tous les articles (pagingation)
    public function index($current_page = 1)
    {
        $articles = $this->blogModel->getArticles();
        $per_page = 6;
        $total_count = $this->blogModel->ArticlesPagination();
        $pagination = new Pagination($current_page, $per_page, $total_count);
        $offset = $pagination->offset();
        $articles = $this->blogModel->GetPaginatedArticles($per_page, $offset);

        $data = [
            'articles' => $articles,
            'previous_page' => $pagination->previous_page(),
            'next_page' => $pagination->next_page(),
            'total_pages' => $pagination->total_pages(),
            'current_page' => $current_page,
        ];
        $this->view('admin/articles/index', $data);
    }

    // Ajouter un article
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
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'article_image' => str_replace(' ', '', $_FILES['article_image']['name']),
                'slug' => cleaner(trim($_POST['title'])),
                'excerpt' => trim($_POST['excerpt']),
                'databaseCategories' => $databaseCategories,
                'is_published' => $is_published,
                'url' => trim($_POST['url']),

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

                    // (lastInsertId) — Retourne l'identifiant de la dernière ligne insérée ou la valeur d'une séquence
                    $article_id = $this->blogModel->getId();

                    $categories = $_POST['categories'];
                    foreach ($categories as $category) {
                        // die(print_r($categories));
                        $this->categoryModel->addArticleCategory($category, $article_id);
                    }
                    // Redirect to login
                    flash('article_message', 'Article ajouté');
                    redirect('AdminArticles' . '/1');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load view with errors
                $this->view('admin/articles/add', $data);
            }

        } else {
            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();

            $data = [
                'title' => '',
                'content' => '',
                'image' => '',
                'slug' => '',
                'excerpt' => '',
                'categories' => [],
                'databaseCategories' => $databaseCategories,
                'url' => ''
            ];

            $this->view('admin/articles/add', $data);
        }
    }

    // Voir un article
    public function show($id)
    {

        $article = $this->blogModel->getArticleById($id);
        $categories = $this->categoryModel->getArticleCategoriesByArticleId($id);

        $data = [
            'article' => $article,
            'categories' => $categories
        ];
        $this->view('admin/articles/show', $data);
    }

    // Modifier un article
    public function edit($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $article = $this->blogModel->getArticleById($id);
            $checkedCategories = $this->categoryModel->getCategoriesByArticleId($id);
            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();
            
            if (!empty($_FILES['article_image']['name'])) {
                $article_image = str_replace(' ', '', $_FILES['article_image']['name']);
            } else {
                $article_image = $article->article_image;
            }
    
            if (isset($_POST['is_published']) && $_POST['is_published'] != '') {
                $is_published = $_POST['is_published'];
            } else {
                // leave the default value
                $is_published = $article->is_published;
            }


            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'article_image' => $article_image,
                'excerpt' => trim($_POST['excerpt']),
                'url' => trim($_POST['url']),
                'slug' => cleaner(trim($_POST['title'])),
                'is_published' => $is_published,
                'checkedCategories' => $checkedCategories,
                'databaseCategories' => $databaseCategories,

                'title_err' => '',
                'content_err' => '',
                'excerpt_err' => '',
            ];

            // Validate article title
            if (empty($data['title'])) {
                $data['title_err'] = "Merci de rajouter un titre pour l'article";

            }
            // Validate article content
            if (empty($data['content'])) {
                $data['content_err'] = 'Merci de rajouter un contenu';
            }

            // Validate article content
            if (empty($data['excerpt'])) {
                $data['excerpt_err'] = 'Merci de rajouter un excerpt';
            }

       

            $article_image_uploader = new Uploader();
            $article_image_uploader->uploadFile('article_image');
            $article_image_error_message = $article_image_uploader->getError();
            $data['article_image_err'] = $article_image_error_message;

            // Make sure there are no errors
            if (empty($data['title_err']) && empty($data['content_err']) && empty($data['excerpt_err']) && empty($data['article_image_err'])) {
                $categories = $this->categoryModel->getCategoriesByArticleId($id);

                $checkedCategories = array_map(function ($category) {
                    return $category->category_id;
                }, $categories);

                // on verifie si il y a des catégories
                if (!empty($_POST['categories'])) {
                    $newCategories = $_POST['categories'];
                } else {
                    $newCategories = [];
                }

                // Validation passed
                //Execute
                if ($this->blogModel->updateArticle($data)) {

                    // die(print_r($checkedCategories));
                    foreach ($newCategories as $newCategory) {
                        // die(print_r($categories));
                        // on verifie si la categorie existe deja. si elle existe on ne la rajoute pas. si elle n'existe pas on la rajoute
                        if (!in_array($newCategory, $checkedCategories)) {
                            $this->categoryModel->addArticleCategory($newCategory, $id);
                        }
                    }

                    // array with std objects
                    $databaseCategoriesStd = $this->categoryModel->getCategoriesByArticleId($id);

                    // convert to array to be able to compare 2 arrays later
                    $databaseCategories = json_decode(json_encode($databaseCategoriesStd), true);
                    // die(print_r($databaseCategories));

                    foreach ($databaseCategories as $databaseCategory) {

                        $databaseCategoryId = $databaseCategory['category_id'];

                        if (!in_array($databaseCategory['category_id'], $newCategories)) {
                            // die(print_r($databaseCategory));
                            $this->blogModel->deleteArticleCategory($databaseCategory['category_id'], $id);
                        }
                    }

                    flash('article_message', 'Article modifié');
                    redirect('AdminArticles' . '/1');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/articles/edit', $data);
            }
        } else {
            // Get Article from model
            $article = $this->blogModel->getArticleById($id);
            $checkedCategories = $this->categoryModel->getCategoriesByArticleId($id);
            $databaseCategories = $this->categoryModel->getAllDatabaseCategories();
            $data = [
                'id' => $id,
                'content' => $article->article_content,
                'title' => $article->article_title,
                'article_image' => $article->article_image,
                'slug' => $article->article_slug,
                'excerpt' => $article->article_excerpt,
                'url' => $article->article_url,
                'is_published' => $article->is_published,
                'checkedCategories' => $checkedCategories,
                'databaseCategories' => $databaseCategories,
            ];

            $this->view('admin/articles/edit', $data);
        }
    }

    // Supprimer un Article
    public function delete($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Execute
            if($this->blogModel->deleteArticle($id)){
              // Redirect to login
              flash('article_message', 'Article supprimé');
              redirect('AdminArticles' . '/1');
              } else {
                die('Something went wrong');
              }
          } else {
              redirect('AdminArticles' . '/1');
          }
    }


    // Voir tous les article publiés
    public function published()
    {

        $published_articles = $this->blogModel->getPublishedArticles();

        $data = [
            'published_articles' => $published_articles,
        ];
        $this->view('admin/articles/published', $data);
    }

    // Voir tous les article non publiés
    public function notpublished()
    {
        $nonPublished_articles = $this->blogModel->getNonPublishedArticles();

        $data = [

            'nonPublished_articles' => $nonPublished_articles,
        ];
        $this->view('admin/articles/notpublished', $data);
    }
}