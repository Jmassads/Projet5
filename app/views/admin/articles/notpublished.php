<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<?php flash('article_message'); ?>

<div class="article--add-button d-flex justify-content-end">
    <a class="btn btn-md btn-red rounded-0" href="<?php echo URLROOT;?>/AdminArticles/add">Ajouter un
        Article</a>
</div>

<div class="articles">
    <h2><img src="<?php echo URLROOT; ?>/img/articles-icon.png" alt="" width="40"> Article non publiés:</h2>   
    <div class="row my-3">
        <?php foreach($data['nonPublished_articles'] as $article):?>
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


<?php require APPROOT . '/views/inc/admin-footer.php'; ?>