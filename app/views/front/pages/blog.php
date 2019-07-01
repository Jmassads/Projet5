<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/sidenav.php';?>

<div id="main" class="main-container">
    <section class="blog">
        <div class="container-fluid">

            <h2 class="mb-4">Julia Assad.blog</h2>
            <h3 class="blog--title">Des Ressources et de l'inspiration</h3>
            <nav class="navbar navbar-expand-sm mb-4 justify-content-start">
                <button class="navbar-toggler pl-0" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span>Catégories </span><span class="lnr lnr-chevron-down"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Front-End Technologies
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($data['frontCategories'] as $frontCategory): ?>
                                <a class="dropdown-item"
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $frontCategory->category_name_slug; ?>"><?php echo $frontCategory->category_name; ?></a>
                                <?php endforeach;?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Back-End Technologies
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($data['backCategories'] as $backCategory): ?>
                                <a class="dropdown-item"
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $backCategory->category_name_slug; ?>"><?php echo $backCategory->category_name; ?></a>
                                <?php endforeach;?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Databases
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($data['databaseCategories'] as $databaseCategory): ?>
                                <a class="dropdown-item"
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $databaseCategory->category_name_slug; ?>"><?php echo $databaseCategory->category_name; ?></a>
                                <?php endforeach;?>
                            </div>
                        </li>
                </div>
            </nav>

            <div id="load_data_table" class="articles">
                <div class="row align-items-start">
                    <?php foreach ($data['articles'] as $article): ?>
                    <div class="col-md-4">
                        <div class="article">
                            <div class="article--meta">
                                <?php if($article->article_image):?>
                                <img class="article--image img-fluid"
                                    srcset="<?php echo URLROOT;?>/uploads/<?php echo $article->article_image;?>" alt="">
                                <?php endif;?>

                                <h3 class="article--title"><a href="<?php echo $article->article_url; ?>"
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
                    <button type="button" name="btn_more" data-article="<?php echo $article->article_id; ?>"
                        id="btn_more" class="btn btn-sm btn-outline-dark rounded-0 mb-4 shadow-none">Voir plus
                        d'articles</button>
                </div>



            </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>