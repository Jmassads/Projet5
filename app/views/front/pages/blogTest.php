<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/sidenav.php';?>

<div id="main" class="main-container">
    <section class="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="mb-4">Julia Assad.blog</h2>
                    <h3 class="blog--title">Des Ressources et de l'inspiration</h3>
                    <nav class="navbar navbar-expand-sm mb-4 justify-content-start">
                        <a class="navbar-brand" href="<?php echo URLROOT; ?>/Blog"><i class="far fa-list-alt"></i></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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

                    <div class="row align-items-start justify-content-center">
                        <?php foreach ($data['articles'] as $article): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid"
                                        src="<?php echo URLROOT; ?>/uploads/<?php echo $article->article_image; ?>"
                                        alt="">
                                    <h3 class="article--title"><a href="<?php echo $article->article_url; ?>"
                                            target="blank"><?php echo $article->article_title; ?></a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p><?php echo $article->article_excerpt; ?></p>
                                </div>
                                <a href="<?php echo URLROOT; ?>/Blog/article/<?php echo $article->article_id; ?>"
                                    class="btn btn-sm btn-outline-dark">Lire la suite</a>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if($data['total_pages'] > 1): ?>
                    <?php if(empty($data['previous_page'])):?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php else:?>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php for($i=1; $i <= $data['total_pages']; $i++): ?>
                    <?php if($data['current_page'] == $i):?>
                    <li class="page-item disabled"><a class="page-link" href="<?php echo URLROOT;?>/Blog/<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php else :?>
                    <li class="page-item"><a class="page-link" href="<?php echo URLROOT;?>/Blog/<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php endif;?>
                    <?php endfor;?>
                    <?php if(empty($data['next_page'])):?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <?php else:?>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php endif;?>
                </ul>
            </nav>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>