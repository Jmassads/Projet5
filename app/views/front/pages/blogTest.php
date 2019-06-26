<?php require APPROOT . '/views/inc/header.php';?>

<!-- Overlay -->
<div class="overlay">
    <div class="nav-container">
        <ul>
            <li><a href="<?php echo URLROOT; ?>#about">À propos</a></li>
            <li><a href="<?php echo URLROOT; ?>/Portfolio">Portfolio</a></li>
            <li><a href="<?php echo URLROOT; ?>#skills">Skills</a></li>
            <li><a href="<?php echo URLROOT; ?>/Blog">Blog</a></li>
        </ul>
    </div>
</div>

<div class="sidenav">
    <div class="home-icon">
        <a href="<?php echo URLROOT; ?>"><img class="img-fluid"
                src="<?php echo URLROOT; ?>/img/iconmonstr-home-thin.svg" alt=""></a>
    </div>
    <div id="btn-menu" class="btn-open">
        <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
    <a href="#contact" class="btn btn-sm btn-outline-dark rounded-0 contact-button shadow-none">Contact</a>
</div>

<div id="main" class="main-container">
    <section class="blog">
        <div class="container-fluid">

            <h2 class="mb-4">Julia Assad.blog</h2>
            <h3 class="blog--title">Des Ressources et de l'inspiration</h3>
            <nav class="navbar navbar-expand-sm mb-4 justify-content-start">
                <a class="navbar-brand" href="<?php echo URLROOT; ?>/Blog"><i class="far fa-list-alt"></i></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="lnr lnr-chevron-down"></span>
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
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $frontCategory->category_id; ?>"><?php echo $frontCategory->category_name; ?></a>
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
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $backCategory->category_id; ?>"><?php echo $backCategory->category_name; ?></a>
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
                                    href="<?php echo URLROOT; ?>/Blog/categorie/<?php echo $databaseCategory->category_id; ?>"><?php echo $databaseCategory->category_name; ?></a>
                                <?php endforeach;?>
                            </div>
                        </li>
                </div>
            </nav>



            <div id="load_data_table">
                <div class="row align-items-start">
                <?php foreach ($data['articles'] as $article): ?>
                <div class="col-md-4">
                    <div class="article">
                        <div class="article--meta">
                            <img class="article--image img-fluid"
                                src="<?php echo URLROOT; ?>/uploads/<?php echo $article->article_image; ?>" alt="">
                            <h3 class="article--title"><a href="<?php echo $article->article_url; ?>"
                                    target="blank"><?php echo $article->article_title; ?></a></h3>
                        </div>
                        <div class="article--excerpt">
                            <p><?php echo $article->article_excerpt; ?></p>
                        </div>
                        <a href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_id; ?>"
                            class="btn btn-sm btn-outline-dark rounded-0">Lire la suite</a>
                    </div>
                </div>
                <?php endforeach;?>
                </div>
                
   
                <div id="remove_row"><button type="button" name="btn_more" data-article="<?php echo $article->article_id; ?>"
        id="btn_more" class="btn btn-sm btn-outline-dark rounded-0 mb-4">Plus d'articles</button></div>
                </div>

          
            
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>