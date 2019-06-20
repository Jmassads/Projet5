<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<a href="<?php echo URLROOT; ?>/AdminProjects" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Retour</a>
<div class="card card-body bg-light my-5 rounded-0">
    <h2>Ajouter un Projet</h2>
    <p>Créer un nouveau projet avec ce formulaire</p>
    <form action="<?php echo URLROOT; ?>/AdminProjects/add" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nom du projet:<sup>*</sup></label>
            <input type="text" name="name"
                class="form-control form-control-md <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['name']; ?>" placeholder="Ajouter un nom...">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Description du projet:<sup>*</sup></label>
            <textarea name="description"
                class="mytextarea form-control form-control-md <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter une description..."><?php echo $data['description']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Sélectionner une image pour mobile:</label>
            <input type="file" name="project_sm_image"
                class="form-control-file <?php echo (!empty($data['small_image_err'])) ? 'is-invalid' : ''; ?>">
                
                <span class="invalid-feedback">
                <?php foreach ($data['small_image_err'] as $error): ?>
                <span><?php echo $error . '</br>'; ?></span>
                <?php endforeach;?>
                </span> 
               
        
        </div>
        <input name="image" type="file" id="upload" class="hidden" onchange="">
        <div class="form-group">
            <label>Sélectionner une image pour desktop:</label>
            <input type="file" name="project_lg_image"
                class="form-control-file <?php echo (!empty($data['large_image_err'])) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback">
                <?php foreach ($data['large_image_err'] as $error): ?>
                <span><?php echo $error . '</br>'; ?></span>
                <?php endforeach;?>
                </span> 
        
        </div>
        <div class="form-group">
            <label>url du projet:<sup>*</sup></label>
            <textarea name="url"
                class="form-control form-control-md <?php echo (!empty($data['url_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter l'url du projet..."><?php echo $data['url']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['url_err']; ?></span>
        </div>
        <div class="form-group">
        <label>Languages:</label>
        <div class="d-flex justify-content-start mb-3">
            <div class="mr-4">
                <input type="checkbox" name="categories[]" value="html" /> HTML<br>
                <input type="checkbox" name="categories[]" value="css" /> CSS<br>
                <input type="checkbox" name="categories[]" value="javascript" /> Javascript<br>
                <input type="checkbox" name="categories[]" value="jquery" /> jQuery<br>
                <input type="checkbox" name="categories[]" value="flexbox" /> flexbox<br>
            </div>
            <div class="mr-4">
                <input type="checkbox" name="categories[]" value="php" /> PHP<br>
                <input type="checkbox" name="categories[]" value="wordpress" /> Wordpress<br>
                <input type="checkbox" name="categories[]" value="mySql" /> mySql<br>
                <input type="checkbox" name="categories[]" value="architecture MVC" /> Architecture MVC<br>
                <input type="checkbox" name="categories[]" value="Webpack" /> Webpack<br>
            </div>
            <div class="mr-4">
               <input type="checkbox" name="categories[]" value="GSAP" /> GSAP<br>
               <input type="checkbox" name="categories[]" value="ScrollMagic" /> ScrollMagic<br>
               <input type="checkbox" name="categories[]" value="Sass" /> Sass<br>
               <input type="checkbox" name="categories[]" value="Bootstrap" /> Bootstrap<br>
               <input type="checkbox" name="categories[]" value="Gulp" /> Gulp<br>
            </div>
        </div>
        </div>
        <div class="form-group">
            <label>Commentaires du mentor:<sup>*</sup></label>
            <textarea name="comments"
                class="mytextarea form-control form-control-md <?php echo (!empty($data['comments_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter les commentaires du mentor..."><?php echo $data['comments']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['comments_err']; ?></span>
        </div>
        <input type="submit" class="btn btn-success" value="Envoyer">
    </form>
</div>


<?php require APPROOT . '/views/inc/admin-footer.php'; ?>