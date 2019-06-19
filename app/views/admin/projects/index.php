<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<?php flash('project_message'); ?>

<div class="d-flex justify-content-end py-4">
<a class="btn btn-md btn-outline-dark rounded-0" href="<?php echo URLROOT;?>/AdminProjects/add">Ajouter un Projet</a>
</div>

<div class="row my-3">
    <?php foreach($data['projects'] as $project):?>
    <div class="col-md-6 col-lg-4">
        <div class="project mb-4">
        <h2><?php echo $project->project_name;?></h2>
        <p>
            <?php if (strlen($project->project_description) > 100): ?>
            <?php echo substr($project->project_description, 0, strpos($project->project_description, ' ', 100)) ?> ...
        </p>
        <?php else: ?>
        <p><?php echo $project->project_description; ?></p>
        <?php endif;?>

        <a class="btn btn-md btn-outline-dark rounded-0" target="_blank" href="<?php echo $project->project_url;?>">Voir
            le site</a>
        <a class="btn btn-md btn-outline-dark rounded-0"
            href="<?php echo URLROOT;?>/AdminProjects/show/<?php echo $project->id;?>">Voir le projet</a>
        </div>
    </div>
    <?php endforeach;?>
</div>

<?php require APPROOT . '/views/inc/admin-footer.php'; ?>