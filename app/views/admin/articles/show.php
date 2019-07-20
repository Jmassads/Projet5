<?php require APPROOT . '/views/inc/admin-header.php'; ?>


<div class="single-article">
    <div class="d-flex justify-content-start align-items-center pb-4">
        <?php if($data['article']->article_image):?>
        <img class="single-article--image img-fluid mr-3"
            srcset="../../uploads/<?php echo $data['article']->article_image;?>" alt="">
        <?php endif;?>

        <h2 class="single-article--title"><?php echo $data['article']->article_title;?></h2>
    </div>
    <h3 class="my-3">Excerpt de l'article</h3>
    <p><?php echo $data['article']->article_excerpt;?></p>
    <h3 class="my-3">Contenu de l'article</h3>
    <?php echo $data['article']->article_content;?>
    <h3>Catégories:</h3>

    <ul>
    <?php foreach($data['categories'] as $category):?>
    <li><?php echo $category->category_name?></li>
    <?php endforeach;?>
    </ul>

    <div class="d-flex justify-content-end">
        <a href="<?php echo URLROOT; ?>/AdminArticles/edit/<?php echo $data['article']->article_id; ?>"
            class="btn btn-dark">Modifier</a>
        <form class="ml-2" action="<?php echo URLROOT; ?>/AdminArticles/delete/<?php echo $data['article']->article_id; ?>"
            method="post">
            <button type="submit" class="btn btn-danger"> Supprimer</button>
        </form>
    </div>

</div>


<?php require APPROOT . '/views/inc/admin-footer.php'; ?>