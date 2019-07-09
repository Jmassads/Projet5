<div class="row align-items-start">
    <?php foreach ($data['newArticles'] as $article): ?>
    <div class="col-sm-6 col-lg-4">
        <div class="article">
            <div class="article--meta">
                <img class="article--image img-fluid"
                    src="uploads/<?php echo $article->article_image; ?>" alt="">
                <h3 class="article--title h6"><a href="<?php echo $article->article_url; ?>"
                        target="blank"><?php echo $article->article_title; ?></a></h3>
            </div>
            <div class="article--excerpt">
                <p><?php echo $article->article_excerpt; ?></p>
            </div>
            <a href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_slug; ?>"
                class="btn btn-sm btn-outline-dark rounded-0 shadow-none">Lire la suite</a>
        </div>
    </div>
    <?php endforeach;?>
</div>


<div id="remove_row" class="d-flex justify-content-center">
    <button type="button" name="btn_more" data-article="<?php echo $article->article_id; ?>" id="btn_more"
        class="btn btn-sm btn-outline-dark rounded-0 mb-4 shadow-none">Voir plus
        d'articles</button>
</div>