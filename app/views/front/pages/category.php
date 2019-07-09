<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/top-menu.php';?>

<div id="main" class="main-container">
    <section class="blog">
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
                                <img class="img-fluid" src="../../img/front.png" width="45" height="45" alt="front-end icon">
                                Front-End
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
                                <img class="img-fluid" src="../../img/back.png" width="40" height="40" alt="front-end icon">
                                Back-End
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <?php foreach ($data['backCategories'] as $backCategory): ?>
                                <a class="dropdown-item"
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $backCategory->category_name_slug; ?>"><?php echo $backCategory->category_name; ?></a>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <?php endif;?>

                        <?php if($data['databaseCategories']):?>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Database
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <?php foreach ($data['databaseCategories'] as $databaseCategory): ?>
                                <a class="dropdown-item"
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $databaseCategory->category_name_slug; ?>"><?php echo $databaseCategory->category_name; ?></a>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <?php endif;?>

                    </nav>


                    <div class="row align-items-start mt-3">

                        <?php if($data['articles']):?>
                        <?php foreach($data['articles'] as $article):?>
                        <div class="col-md-6 col-lg-4">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid"
                                        src="../../uploads/<?php echo $article->article_image; ?>" alt="">
                                    <h3 class="article--title"><a href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_slug; ?>"
                                            ><?php echo $article->article_title; ?></a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p><?php echo $article->article_excerpt; ?></p>
                                </div>
                                <a href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_slug; ?>"
                                    class="btn btn-sm btn-outline-dark">Lire la suite</a>
                            </div>
                        </div>
                        <?php endforeach;?>

                        <?php else:?>

                        <div class="col-12">
                            <p>Pas d'articles pour l'instant</p>
                        </div>
                        <?php endif;?>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>

<?php require APPROOT . '/views/inc/footer.php';?>