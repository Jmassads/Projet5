
    <?php foreach ($data['newArticles'] as $article): ?>
    <div class="col-md-6 col-lg-4">
        <div class="article">
            <div class="article--meta">
                <img class="article--image img-fluid" src="uploads/<?php echo $article->article_image; ?>" alt="">
                <h3 class="article--title h6"><a href="<?php echo $article->article_url; ?>"
                        target="blank"><?php echo $article->article_title; ?></a></h3>
            </div>
            <div class="article--excerpt">
                <p><?php echo $article->article_excerpt; ?></p>
            </div>
            <div class="mb-3">
                <?php foreach ($data['categories'] as $category):?>
                <?php if($article->article_id == $category->article_id):?>
                <a href="<?php echo URLROOT;?>/Blog/categorie/<?php echo $category->category_name_slug;?>"
                    class="badge badge-light"><?php echo $category->category_name;?></a>

                <?php endif;?>
                <?php endforeach;?>
            </div>
            <a href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_slug; ?>"
                class="btn btn-sm btn-outline-dark rounded-0 shadow-none">Lire la suite</a>
        </div>
    </div>
    <?php endforeach;?>



<div id="remove_row" class="col-12 text-center">
    <button type="button" name="btn_more" data-article="<?php echo $article->article_id; ?>" id="btn_more"
        class="btn btn-sm btn-outline-dark rounded-0 mb-4 shadow-none">Voir plus
        d'articles</button>
</div>