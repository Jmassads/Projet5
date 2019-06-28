<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<?php flash('category_message'); ?>

<div class="article--add-button d-flex justify-content-end">
    <a class="btn btn-md btn-red rounded-0" href="<?php echo URLROOT;?>/AdminCategories/add">Ajouter une
        catégorie</a>
</div>

<div class="categories my-4">
    <ul class="list-group">
        <?php foreach ($data['categories'] as $category):?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <span class="badge badge-light badge-pill mr-2"><?php echo $category->category_type;?></span>
                <?php echo $category->category_name;?>
            </div>
            <div class="d-flex">
                <a class="btn btn-sm btn-outline-secondary" href="">Voir</a>
                <a class="btn btn-sm btn-outline-info ml-2"
                    href="<?php echo URLROOT;?>/AdminCategories/edit/<?php echo $category->category_id;?>">Modifier</a>

                <form action="<?php echo URLROOT; ?>/AdminCategories/delete/<?php echo $category->category_id; ?>"
                    method="post">
                    <input type="submit" class="btn-sm btn-outline-danger ml-2" value="Supprimer">
                </form>
            </div>
        </li>
        <?php endforeach;?>
    </ul>
</div>

<?php require APPROOT . '/views/inc/admin-footer.php'; ?>