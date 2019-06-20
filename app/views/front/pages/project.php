<?php require APPROOT . '/views/inc/header.php';?>

<?php 
$categories_as_string = $data['project']->project_categories;
$categories = (explode(",",$categories_as_string));
?>


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
    <section class="single-project">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="single-project--title">
                        <?php echo $data['project']->project_name;?>
                    </h2>
                    <div class="single-project--inner">
                        <div class="single-project--image">
                            <picture>
                                <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $data['project']->project_image;?>" media="(min-width:768px)">
                                <img class="img-fluid" srcset="<?php echo URLROOT;?>/uploads/<?php echo $data['project']->project_lg_image;?>" alt="" class="large-hero__image">
                            </picture>
                        </div>
                        <div class="pointer py-4"><span class="lnr lnr-pointer-right"></span> <a href="<?php echo $data['project']->project_url;?>" target="blank">Voir le Projet</a></div>
                        <div class="single-project--description">
                            <h3 class="single-project--description--title pb-2">Description du Projet</h3>
                            <?php echo $data['project']->project_description;?>
                        </div>
                        <div class="single-project--languages-used mt-3">
                        <h3 class="my-3">Languages utilisés</h3>
                        <?php foreach($categories as $category):?>
                        <button class="btn"><?php echo $category;?></button>
                        <?php endforeach;?>
                        </div>
                    </div>
                    <div class="single-project--feedback my-4">
                            <h3>Commentaires de l'évaluateur</h3>
                            <?php echo $data['project']->project_comments;?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="others-projects--title">Autres Projets</h2>
                    <ul class="list-group">
                        <?php foreach($data['projects'] as $project):?>
                        <?php if($data['project']->id != $project->id):?>
                        <li class="list-group-item rounded-0"><a href="<?php echo URLROOT;?>/Portfolio/<?php echo $project->project_slug;?>"><?php echo $project->project_name;?></a></li>
                        <?php endif;?>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>
