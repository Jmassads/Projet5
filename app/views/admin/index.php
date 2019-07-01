<?php require APPROOT . '/views/inc/admin-header.php';?>


<div class="card">
    <div class="card-header">
        <h2><?php echo $data['allArticles'];?> Articles</h2>
    </div>
    <div class="card-body">
        <div>
            <h5 class="card-title d-inline-block mr-2">
                <?php if($data['publishedArticles'] == '1'):?>
                <p><?php echo $data['publishedArticles'];?> article est publié</p>
                <?php else:?>
                <p><?php echo $data['publishedArticles'];?> articles sont publiés</p>
                <?php endif;?>
            </h5>
            <?php if($data['publishedArticles'] == '1'):?>
            <a href="<?php echo URLROOT;?>/AdminArticles/published" class="btn btn-sm btn-red">Voir l'article</a>
            <?php else:?>
            <a href="<?php echo URLROOT;?>/AdminArticles/published" class="btn btn-sm btn-red">Voir les articles</a>
            <?php endif;?>
        </div>
        <div>
            <h5 class="card-title d-inline-block mr-2">
                <?php if($data['notPublishedArticles'] == '1'):?>
                <p><?php echo $data['notPublishedArticles'];?> article n'est pas publié</p>
                <?php else:?>
                <p><?php echo $data['notPublishedArticles'];?> articles ne sont pas publiés</p>
                <?php endif;?>
            </h5>
            <?php if($data['notPublishedArticles'] == '1'):?>
            <a href="<?php echo URLROOT;?>/AdminArticles/nonpublished" class="btn btn-sm btn-red">Voir l'article</a>
            <?php else:?>
            <a href="<?php echo URLROOT;?>/AdminArticles/notpublished" class="btn btn-sm btn-red">Voir les articles</a>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
    <h2><?php echo $data['allProjects'];?> Projets</h2>
    </div>
    <div class="card-body">
        <div>
            <h5 class="card-title d-inline-block mr-2">
                <?php if($data['publishedProjects'] == '1'):?>
                <p><?php echo $data['publishedProjects'];?> projet est publié</p>
                <?php elseif($data['publishedProjects'] == '0'):?>
                <p>Pas de projets publiés</p>
                <?php else:?>
                <p><?php echo $data['publishedProjects'];?> projets sont publiés</p>
                <?php endif;?>
            </h5>
            <?php if($data['publishedProjects'] == '1'):?>
            <a href="<?php echo URLROOT;?>/AdminProjects/published" class="btn btn-sm btn-red">Voir le projet</a>
            <?php elseif($data['publishedProjects'] == '0'):?>
            <?php else:?>
            <a href="<?php echo URLROOT;?>/AdminProjects/published" class="btn btn-sm btn-red">Voir les projets</a>
            <?php endif;?>
        </div>
        <div>
            <h5 class="card-title d-inline-block mr-2">
                <?php if($data['notPublishedProjects'] == '1'):?>
                <p><?php echo $data['notPublishedProjects'];?> projet n'est pas publié</p>
                <?php else:?>
                <p><?php echo $data['notPublishedProjects'];?> projets ne sont pas publiés</p>
                <?php endif;?>
            </h5>
            <?php if($data['notPublishedProjects'] == '1'):?>
            <a href="<?php echo URLROOT;?>/AdminProjects/notpublished" class="btn btn-sm btn-red">Voir l'article</a>
            <?php else:?>
            <a href="<?php echo URLROOT;?>/AdminProjects/notpublished" class="btn btn-sm btn-red">Voir les projets</a>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
    <h2><?php echo $data['allcategories'];?> Catégories</h2>
    </div>
    <div class="card-body">
    <a href="<?php echo URLROOT;?>/AdminCategories" class="btn btn-sm btn-red">Voir les catégories</a>
    </div>
</div>

<?php require APPROOT . '/views/inc/admin-footer.php';?>