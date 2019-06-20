<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<a href="<?php echo URLROOT; ?>/AdminArticles" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Retour</a>
<div class="card card-body bg-light my-5 rounded-0">
    <h2>Modifier un Article</h2>
    <p>Modifier l'article avec ce formulaire</p>
    <form action="<?php echo URLROOT; ?>/AdminArticles/edit/<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre de l'article:<sup>*</sup></label>
            <input type="text" name="title"
                class="form-control form-control-md <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['title']; ?>" placeholder="Ajouter un nom...">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Contenu de l'article:<sup>*</sup></label>
            <textarea name="content"
                class="mytextarea form-control form-control-md <?php echo (!empty($data['content_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter un contenu..."><?php echo $data['content']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['content_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Excerpt:<sup>*</sup></label>
            <textarea name="excerpt"
                class="mytextarea form-control form-control-md <?php echo (!empty($data['excerpt_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter un excerpt..."><?php echo $data['excerpt']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['excerpt_err']; ?></span>
        </div>
        <div class="form-group">
            <label>url de la ressource:<sup>*</sup></label>
            <textarea name="url"
                class="form-control form-control-md <?php echo (!empty($data['url_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter l'url du projet..."><?php echo $data['url']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['url_err']; ?></span>
        </div>
        <div class="form-group">
        <label>Languages:<sup>*</sup></label>
        <div class="d-flex justify-content-start mb-3">
            <?php 
            $categories_as_string = $data['categories'];
            $categories = (explode(",",$categories_as_string));
          ?>
            <div class="mr-4">
                <?php $checked = 'checked'; ?>
                <input type="checkbox" name="categories[]" value="html" <?php if (in_array("html", $categories)) {
                echo "checked";};?> /> HTML <br>
                <input type="checkbox" name="categories[]" value="css" <?php if (in_array("css", $categories)) {
                echo "checked";};?> /> CSS <br>
                <input type="checkbox" name="categories[]" value="javascript" <?php if (in_array("javascript", $categories)) {
                echo "checked";};?> /> Javascript <br>
                <input type="checkbox" name="categories[]" value="jquery" <?php if (in_array("jquery", $categories)) {
                echo "checked";};?> /> jQuery <br>
                <input type="checkbox" name="categories[]" value="flexbox" <?php if (in_array("flexbox", $categories)) {
                echo "checked";};?> /> Flexbox <br>
            </div>
            <div class="mr-4">
                <input type="checkbox" name="categories[]" value="php" <?php if (in_array("php", $categories)) {
                echo "checked";};?> /> PHP <br>
                <input type="checkbox" name="categories[]" value="wordpress" <?php if (in_array("wordpress", $categories)) {
                echo "checked";};?> /> Wordpress <br>
                <input type="checkbox" name="categories[]" value="mySql" <?php if (in_array("mysql", $categories)) {
                echo "checked";};?> /> mySql <br>
                <input type="checkbox" name="categories[]" value="MVC" <?php if (in_array("mvc", $categories)) {
                echo "checked";};?> /> Architecture MVC <br>
                <input type="checkbox" name="categories[]" value="Webpack" 
                <?php if (in_array("webpack", $categories)) {
                echo "checked";};?> /> Webpack <br>
            </div>
            <div class="mr-4">
                <input type="checkbox" name="categories[]" value="GSAP" <?php if (in_array("gsap", $categories)) {
                echo "checked";};?> /> GSAP <br>
                <input type="checkbox" name="categories[]" value="ScrollMagic" <?php if (in_array("scrollmagic", $categories)) {
                echo "checked";};?> /> ScrollMagic <br>
                <input type="checkbox" name="categories[]" value="Sass" 
                <?php if (in_array("sass", $categories)) {
                echo "checked";};?> /> Sass <br>
               <input type="checkbox" name="categories[]" value="Bootstrap" 
               <?php if (in_array("bootstrap", $categories)) {
                echo "checked";};?> /> Bootstrap <br>
               <input type="checkbox" name="categories[]" value="Gulp" 
               <?php if (in_array("gulp", $categories)) {
                echo "checked";};?> /> Gulp <br>
            </div>
        </div>
        </div>
        <div class="form-group">
        <p><strong>Image actuelle:</strong>
            <?php echo $data['article_image']; ?>
            <label>Sélectionner une image</label>
            <input type="file" name="article_image"
                class="form-control-file <?php echo (!empty($data['article_image_err'])) ? 'is-invalid' : ''; ?>">
                
                <span class="invalid-feedback">
                <?php foreach ($data['article_image_err'] as $error): ?>
                <span><?php echo $error . '</br>'; ?></span>
                <?php endforeach;?>
                </span> 
               
        
        </div>
        <input name="image" type="file" id="upload" class="hidden" onchange="">
        
        <input type="submit" class="btn btn-success" value="Envoyer">
    </form>
</div>


<?php require APPROOT . '/views/inc/admin-footer.php'; ?>