<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<?php flash('article_message'); ?>

<div class="article--add-button d-flex justify-content-end">
    <a class="btn btn-md btn-outline-dark rounded-0" href="<?php echo URLROOT;?>/AdminArticles/add">Ajouter un
        Article</a>
</div>

<div class="articles">
<div class="row align-items-center my-3">
    <?php foreach($data['articles'] as $article):?>
    <div class="col-md-6 col-lg-4">
        <div class="single-article">
            <div class="d-flex justify-content-start align-items-center">
            <img class="single-article--image img-fluid mr-3" srcset="<?php echo URLROOT;?>/uploads/<?php echo $article->article_image;?>" alt="">
            <h2><?php echo $article->article_title;?></h2>
            </div>
            <?php echo $article->article_excerpt;?>

            <div>
             
                <a class="btn btn-md btn-outline-dark rounded-0"
                    href="<?php echo URLROOT;?>/AdminArticles/show/<?php echo $article->id;?>">Voir l'article</a>
            </div>

        </div>
    </div>
    <?php endforeach;?>
</div>
</div>

<?php require APPROOT . '/views/inc/admin-footer.php'; ?>
