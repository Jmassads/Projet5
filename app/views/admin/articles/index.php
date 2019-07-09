<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<?php flash('article_message'); ?>

<div class="article--add-button d-flex justify-content-end">
    <a class="btn btn-md btn-red rounded-0" href="<?php echo URLROOT;?>/AdminArticles/add">Ajouter un
        Article</a>
</div>

<div class="articles">
    <h2><img src="<?php echo URLROOT; ?>/img/articles-icon.png" alt="" width="40"> Tous les articles</h2>
    <div class="row my-3">
        <?php foreach($data['articles'] as $article):?>
        <div class="col-md-6 col-lg-4">
            <div class="single-article">
                <div class="d-flex justify-content-start align-items-center">
                    <?php if($article->article_image):?>
                    <img class="single-article--image img-fluid mr-3"
                        srcset="../uploads/<?php echo $article->article_image;?>" alt="">
                    <?php endif;?>

                    <h2 class="h5"><?php echo $article->article_title;?></h2>
                </div>
                <?php echo $article->article_excerpt;?>
                <p>Article publié?
                    <?php if($article->is_published):?>
                    <span>Oui</span>
                    <?php else:?>
                    <span>Non</span>
                    <?php endif;?>
                </p>

                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-md btn-outline-secondary"
                        href="<?php echo URLROOT;?>/AdminArticles/show/<?php echo $article->article_id;?>">Voir</a>
                    <a class="btn btn-md btn-outline-info"
                        href="<?php echo URLROOT;?>/AdminArticles/edit/<?php echo $article->article_id;?>">Modifier</a>

                    <form class="ml-2"
                        action="<?php echo URLROOT; ?>/AdminArticles/delete/<?php echo $article->article_id; ?>"
                        method="post">
                        <button type="submit" class="btn btn-md btn-outline-danger rounded-0"> Supprimer</button>
                    </form>
                </div>

            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php if($data['total_pages'] > 1): ?>
        <?php if(empty($data['previous_page'])):?>
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php else:?>
        <li class="page-item">
            <a class="page-link" href="<?php echo URLROOT;?>/AdminArticles/<?php echo $data['current_page'] - 1;?>"
                aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php endif;?>
        <?php for($i=1; $i <= $data['total_pages']; $i++): ?>
        <?php if($data['current_page'] == $i):?>
        <li class="page-item disabled"><a class="page-link"
                href="<?php echo URLROOT;?>/Blog/<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php else :?>
        <li class="page-item"><a class="page-link"
                href="<?php echo URLROOT;?>/AdminArticles/<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php endif;?>
        <?php endfor;?>
        <?php if(empty($data['next_page'])):?>
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        <?php else:?>
        <li class="page-item">
            <a class="page-link" href="<?php echo URLROOT;?>/AdminArticles/<?php echo $data['current_page'] + 1;?>"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        <?php endif;?>
        <?php endif;?>
    </ul>
</nav>

<?php require APPROOT . '/views/inc/admin-footer.php'; ?>