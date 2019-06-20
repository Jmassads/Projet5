<?php require APPROOT . '/views/inc/header.php';?>

<!-- Overlay -->
<div class="overlay">
    <div class="nav-container">
        <ul>
            <li><a href="<?php echo URLROOT;?>#about">À propos</a></li>
            <li><a href="<?php echo URLROOT;?>#projects">Portfolio</a></li>
            <li><a href="<?php echo URLROOT;?>#skills">Skills</a></li>
            <li><a href="<?php echo URLROOT;?>/Blog">Blog</a></li>
        </ul>
    </div>
</div>

<div class="sidenav">
<div class="home-icon">
        <a href="<?php echo URLROOT;?>"><img class="img-fluid" src="<?php echo URLROOT;?>/img/iconmonstr-home-thin.svg" alt=""></a>
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
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="text-center mb-4">Julia Assad.blog</h2>
                    <h3 class="blog--title">Des Ressources et de l'inspiration</h3>
                    <div class="row align-items-start">
                       <?php foreach($data['articles'] as $article):?>
                       <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="<?php echo URLROOT;?>/uploads/<?php echo $article->article_image;?>" alt="">
                                    <h3 class="article--title"><a href="<?php echo $article->article_url;?>" target="blank"><?php echo $article->article_title;?></a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p><?php echo $article->article_excerpt;?></p>
                                </div>
                                <a href="<?php echo URLROOT;?>/Blog/<?php echo $article->id;?>" class="btn btn-sm btn-outline-dark">Lire la suite</a>
                            </div>
                        </div>  
                       <?php endforeach;?>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about-image d-none d-sm-block">
                        <img class="w-100" src="https://avatars0.githubusercontent.com/u/22447803?s=400&u=453226f708a7c2242a639882fde1ec32ffa78918&v=4 " alt="photo de Julia Assad">
                    </div>

                    <div class="about--description my-4">
                        <p>Je partage certaines ressources/cours/jeux que je découvre au fil de ma veille. La plupart des cours sont en Anglais.</p>
                    </div>
                    <div class="card mb-4 rounded-0">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach ($data['languages'] as $language):?>
                                        <li><a href="<?php echo URLROOT;?>/Blog/categorie/<?php echo strtolower($language->language_name);?>"><?php echo strtolower($language->language_name);?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>
