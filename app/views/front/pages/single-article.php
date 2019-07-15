<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/top-menu.php';?>

<div id="main" class="main-container blog">
    <section class="single-article">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="heading-meta text-center">Julia Assad.blog</span>
                    <h2 class="mb-4 text-center section-title">Des Ressources et de l'inspiration</h2>
                    <a href="<?php echo URLROOT; ?>/Blog" class="btn btn-sm btn-light"><i class="fa fa-backward"
                            aria-hidden="true"></i>
                        Tous les articles</a>
                    <nav class="navbar justify-content-center mb-4">
                        <?php if($data['frontCategories']):?>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-fluid front-end-img" src="../../img/front.png" width="45" height="45"
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
                                <img class="img-fluid back-end-img" src="../../img/back.png" width="40" height="40"
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

                    <?php if($data['article']->article_url):?>
                    <h2 class="mt-3 h4"><a href="<?php echo $data['article']->article_url;?>" target="_blank"><span
                                class="lnr lnr-link"></span> <?php echo $data['article']->article_title; ?></a></h2>
                    <?php else: ?>
                    <h2 class="mt-3 h4"><?php echo $data['article']->article_title; ?></h2>
                    <?php endif;?>


                    <?php echo $data['article']->article_content; ?>
                    <div class="mb-3">
                        <?php foreach ($data['categories'] as $category):?>
                        <?php if($data['article']->article_id == $category->article_id):?>
                        <a href="<?php echo URLROOT;?>/Blog/categorie/<?php echo $category->category_name_slug;?>"
                            class="badge badge-light"><?php echo $category->category_name;?></a>

                        <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>