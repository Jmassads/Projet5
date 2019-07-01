<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/sidenav.php';?>

<div id="main" class="main-container">
    <section class="single-article">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="mb-4">Julia Assad.blog</h2>
                    <h3 class="blog--title">Des Ressources et de l'inspiration</h3>
                    <a href="<?php echo URLROOT; ?>/Blog" class="btn btn-sm btn-light"><i class="fa fa-backward"
                            aria-hidden="true"></i>
                        Tous les articles</a>
                    <nav class="navbar navbar-expand-sm mb-4 justify-content-start">
                        <button class="navbar-toggler pl-0" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                            href="<?php echo URLROOT;?>/Blog/categorie/<?php echo $frontCategory->category_name_slug;?>"><?php echo $frontCategory->category_name;?></a>
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
                                            href="<?php echo URLROOT;?>/Blog/categorie/<?php echo $backCategory->category_name_slug;?>"><?php echo $backCategory->category_name;?></a>
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
                                            href="<?php echo URLROOT;?>/Blog/categorie/<?php echo $databaseCategory->category_name_slug;?>"><?php echo $databaseCategory->category_name;?></a>
                                        <?php endforeach;?>
                                    </div>
                                </li>
                        </div>
                    </nav>
                    <h2 class="mt-3 h4"><a href="<?php echo $data['article']->article_url;?>" target="_blank"><span class="lnr lnr-link"></span> <?php echo $data['article']->article_title; ?></a></h2>
                    <p><?php echo $data['article']->article_content; ?></p>
                </div>
            </div>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>