<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/top-menu.php';?>

<div id="main" class="main-container">
    <section class="single-project">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="single-project--title">
                        <?php echo $data['project']->project_name;?>
                    </h2>
                    <div class="single-project--inner">
                        <div class="single-project--image">
                             <img class="img-fluid" srcset="<?php echo URLROOT;?>/uploads/<?php echo $data['project']->project_lg_image;?>" alt="" class="large-hero__image">
                        </div>
                        <div class="pointer py-4"><span class="lnr lnr-pointer-right"></span> <a href="<?php echo $data['project']->project_url;?>" target="blank">Voir le Projet</a></div>
                        <div class="single-project--description">
                            <h3 class="single-project--description--title">Description du Projet</h3>
                            <?php echo $data['project']->project_description;?>
                        </div>
                        <div class="single-project--languages-used mt-3">
                        <?php foreach($data['categories'] as $category):?>
                         <button class="btn"><?php echo $category->category_name;?></button>
                        <?php endforeach;?>
                        </div>
                    </div>
                    <?php if($data['project']->project_comments):?>
                    <div class="single-project--feedback my-4">
                            <h3>Commentaires de l'évaluateur</h3>
                            <?php echo $data['project']->project_comments;?>
                    </div>
                    <?php endif;?>  
                </div>
                <div class="col-md-4">
                    <h2 class="others-projects--title">Autres Projets</h2>
                    <ul class="list-group">
                        <?php foreach($data['projects'] as $project):?>
                        <?php if($data['project']->id != $project->id):?>
                        <li class="list-group-item rounded-0"><a href="<?php echo URLROOT;?>/Portfolio/projets/<?php echo $project->project_slug;?>"><?php echo $project->project_name;?></a></li>
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
