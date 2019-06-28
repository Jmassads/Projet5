<?php require APPROOT . '/views/inc/admin-header.php'; ?>
<a href="<?php echo URLROOT; ?>/AdminCategories" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i>
    Retour</a>
<div class="card card-body bg-light mt-5 rounded-0">
    <h2>Ajouter une catégorie</h2>
    <p>Ajouter une catégorie avec ce formulaire</p>
    <form action="<?php echo URLROOT; ?>/adminCategories/add" method="post">
        <div class="form-group">
            <label>Nom de la catégorie<sup>*</sup></label>
            <input type="text" name="name"
                class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['name']; ?>" placeholder="Ajouter une catégorie...">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Type de catégorie:<sup>*</sup></label>
            <select name="type"class="form-control">
                <option value="Front-End">Front-End</option>
                <option value="Back-End">Back-End</option>
                <option value="Database">Database</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Envoyer">
    </form>
</div>
<?php require APPROOT . '/views/inc/admin-footer.php'; ?>