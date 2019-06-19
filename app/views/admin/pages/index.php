<?php require APPROOT . '/views/inc/admin-header.php';?>

<div class="d-flex align-items-center mb-3 p-3">
    <div class="">
        <h2 class="m-0 pr-2">Projets</h2>
    </div>
    <div class="">
        <a class="btn btn-primary" href="<?php echo URLROOT; ?>/AdminProjects/add"><i class="fa fa-pencil" aria-hidden="true"></i> Ajouter un projet</a>
    </div>
</div>

<div class="d-flex align-items-center mb-3 p-3">
    <div class="">
        <h2 class="m-0 pr-2">Articles</h2>
    </div>
    <div class="">
        <a class="btn btn-primary" href="<?php echo URLROOT; ?>/AdminArticles/add"><i class="fa fa-pencil" aria-hidden="true"></i> Ajouter un article</a>
    </div>
</div>


<?php require APPROOT . '/views/inc/admin-footer.php';?>