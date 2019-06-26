<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/sidenav.php';?>

<div id="main" class="main-container">

    <!-- Header -->
    <section id="projects" class="section projects">
        <div class="container-fluid">
            <h2 class="headline--red-dot">Projets</h2>
            <div class="row"> 
            <?php foreach($data['projects'] as $project):?>
            <div class="col-md-6">
                    <div class="project">
                        <div class="project--image">
                            <picture>
                                <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_sm_image;?>" media="(min-width:768px)">
                                <img class="img-fluid" srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_lg_image;?>" alt="" class="large-hero__image">
                                <a href="<?php echo URLROOT;?>/Portfolio/<?php echo $project->project_slug;?>"><span
                                        class="lnr lnr-chevron-right"></span></a>
                            </picture>
                        </div>
                        <h3 class="project--title"><?php echo $project->project_name;?></h3>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>


    <button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>

    <?php require APPROOT . '/views/inc/footer.php';?>