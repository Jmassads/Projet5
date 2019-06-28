<?php require APPROOT . '/views/inc/admin-header.php'; ?>
<a href="<?php echo URLROOT; ?>/AdminCategories" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Retour</a>
      <div class="card card-body bg-light mt-5">
        <h2>Modifier la catégorie</h2>
        <p>Changer le type de la catégorie</p>
        <form action="<?php echo URLROOT; ?>/AdminCategories/edit/<?php echo $data['id']; ?>" method="post">
          <div class="form-group">
              <label>Nom:<sup>*</sup></label>
              <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
              <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>    
          <div class="form-group">
            <label>Type de catégorie:<sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg" value="<?php echo $data['type']; ?>" disabled>
        </div>
        <div class="form-group">
        <select name="type"class="form-control form-control-lg">
        <label>Choisissez une nouvelle catégorie:<sup>*</sup></label>
                <option value="Front-End">Front-End</option>
                <option value="Back-End">Back-End</option>
                <option value="Database">Database</option>
            </select>
        </div>
          <input type="submit" class="btn btn-success" value="Envoyer">
        </form>
      </div>
<?php require APPROOT . '/views/inc/admin-footer.php'; ?>
