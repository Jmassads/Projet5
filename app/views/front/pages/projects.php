<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/top-menu.php';?>

<div id="main" class="main-container">


<section id="projects" class="projects text-center">
    <div class="container">
        <span class="heading-meta">Portfolio</span>
        <h2 class="mb-4 text-center section-title">Projets</h2>
        <div class="row">
            <?php foreach($data['projects'] as $project):?>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="project">
                    <div class="project--image">
                        <picture>
                            <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_sm_image;?>"
                                media="(min-width:576px)">
                            <img class="img-fluid"
                                srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_lg_image;?>"
                                alt="" class="large-hero__image">
                            <a href="<?php echo URLROOT;?>/Portfolio/projets/<?php echo $project->project_slug;?>"><span
                                    class="lnr lnr-chevron-right"></span></a>
                        </picture>
                    </div>
                    <h3 class="project--title h6"><?php echo $project->project_name;?></h3>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>


<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>

<?php require APPROOT . '/views/inc/footer.php';?>