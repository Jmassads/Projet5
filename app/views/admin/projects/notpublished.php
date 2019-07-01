<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<?php flash('project_message'); ?>

<div class="project--add-button d-flex justify-content-end">
    <a class="btn btn-md btn-outline-dark rounded-0" href="<?php echo URLROOT;?>/AdminProjects/add">Ajouter un
        Projet</a>
</div>


<div class="projects">
    <div class="row my-3">
        <?php foreach($data['nonPublished_projects'] as $project):?>
        <div class="col-md-6 col-lg-4">
            <div class="projects--single pb-3">
                <div class="d-flex align-items-center mb-2">
                    <img src="<?php echo URLROOT;?>/img/project-icon.png" alt="" width="40">
                    <h2 class="m-0 pl-3 h4"><?php echo $project->project_name;?></h2>
                </div>
                <?php 
                $string = strip_tags($project->project_description);
                if (strlen($project->project_description) > 200) {

                    // truncate string
                    $stringCut = substr($string, 0, 200);
                    $endPoint = strrpos($stringCut, ' ');

                    //if the string doesn't contain any space then it will cut without word basis.
                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    echo $string . ' ...';
                } else {
                    echo $project->project_description;
                }
                
                ?>

                <div class="mt-2">
                    <a class="btn btn-md btn-outline-dark rounded-0" target="_blank"
                        href="<?php echo $project->project_url;?>">Voir
                        le site</a>
                    <a class="btn btn-md btn-outline-dark rounded-0"
                        href="<?php echo URLROOT;?>/AdminProjects/show/<?php echo $project->id;?>">Voir le projet</a>
                </div>

            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<?php require APPROOT . '/views/inc/admin-footer.php'; ?>