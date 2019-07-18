<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/top-menu.php';?>


<div id="main" class="main-container">
    <section class="blog">
        <div class="container">
            <span class="heading-meta text-center">Julia Assad.blog</span>
            <h2 class="mb-4 text-center section-title">Des Ressources et de l'inspiration</h2>
            <nav class="navbar justify-content-center mb-4">
                <?php if($data['frontCategories']):?>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid front-end-img" src="<?php echo URLROOT;?>/img/front.png" width="45" height="45"
                            alt="front-end icon"> Front-End
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($data['frontCategories'] as $frontCategory): ?>
                        <a class="dropdown-item"
                            href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $frontCategory->category_name_slug; ?>"><?php echo $frontCategory->category_name; ?></a>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>

                <?php if($data['backCategories']):?>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid back-end-img" src="<?php echo URLROOT;?>/img/back.png" width="40" height="40"
                            alt="front-end icon"> Back-End
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <?php foreach ($data['backCategories'] as $backCategory): ?>
                        <a class="dropdown-item"
                            href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $backCategory->category_name_slug; ?>"><?php echo $backCategory->category_name; ?></a>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
            </nav>

           
            <div id="load_data_articles" class="articles">
                <div class="row align-items-start">
                    <?php foreach ($data['articles'] as $article): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="article">
                            <div class="d-flex justify-content-start align-items-center">
                                <?php if($article->article_image):?>
                                <img class="article--image img-fluid py-2"
                                    src="<?php echo URLROOT;?>/uploads/<?php echo $article->article_image;?>" alt="">
                                <?php endif;?>

                                <h3 class="article--title"><a
                                        href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_slug; ?>"><?php echo $article->article_title; ?></a>
                                </h3>
                            </div>
                            <div class="article--excerpt">
                                <?php echo $article->article_excerpt; ?>
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
                                <input type="hidden" value="<?php echo $article->article_id;?>">
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>

                <div id="remove_row" class="col-12 text-center">
                    <button type="button" name="btn_more" data-article="<?php echo $article->article_id; ?>"
                        id="btn_more" class="btn btn-sm btn-outline-dark rounded-0 mb-4 shadow-none">Voir plus
                        d'articles</button>
                </div>
            </div>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>