<?php require APPROOT . '/views/inc/admin-header.php'; ?>


<div class="single-project">
    <h2><?php echo $data['project']->project_name;?></h2>
    <picture>
        <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $data['project']->project_lg_image;?>"
            media="(min-width:768px)">
        <img class="img-fluid" srcset="<?php echo URLROOT;?>/uploads/<?php echo $data['project']->project_sm_image;?>" alt="">
    </picture>

    <h3 class="my-3">Description du projet</h3>
    <p><?php echo $data['project']->project_description;?></p>


    <div class="single-project--categories my-4">
        <h3 class="my-3">Languages utilisés</h3>
      <!-- add categories here!!! -->
      <?php foreach($data['categories'] as $category):?>
                         <button class="btn"><?php echo $category->category_name;?></button>
                      
                        <?php endforeach;?>
    </div>

    <?php if($data['project']->project_comments):?>
    <div class="single-project--comments">
        <h3 class="my-3">Commentaires du mentor</h3>
        <p><?php echo $data['project']->project_comments;?></p>
    </div>
    <?php endif;?>

    <div class="d-flex justify-content-end">
        <a href="<?php echo URLROOT; ?>/AdminProjects/edit/<?php echo $data['project']->id; ?>"
            class="btn btn-dark">Modifier</a>
        <form class="ml-2"
            action="<?php echo URLROOT; ?>/AdminProjects/delete/<?php echo $data['project']->id; ?>"
            method="post">
            <button type="submit" class="btn btn-danger"> Supprimer</button>
        </form>
    </div>

</div>


<?php require APPROOT . '/views/inc/admin-footer.php'; ?>