<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<a href="<?php echo URLROOT; ?>/AdminArticles" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i>
    Retour</a>
<div class="card card-body bg-light my-5 rounded-0">
    <h2>Modifier un Article</h2>
    <p>Modifier l'article avec ce formulaire</p>
    <form action="<?php echo URLROOT; ?>/AdminArticles/edit/<?php echo $data['id']; ?>" method="post"
        enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre de l'article:<sup>*</sup></label>
            <input type="text" name="title"
                class="form-control form-control-md <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['title']; ?>" placeholder="Ajouter un nom...">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Contenu de l'article:<sup>*</sup></label>
            <textarea name="content" id="editor"
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
                $categories = array_map(function($category){
                    return $category->category_id;
                }, $data['checkedCategories']);
                ?>

             
                
                <div class="mr-4">
                    <input type="checkbox" name="categories[]" value="1" <?php if (in_array("1", $categories)) {
                echo "checked";};?> /> HTML<br>
                    <input type="checkbox" name="categories[]" value="2" <?php if (in_array("2", $categories)) {
                echo "checked";};?> /> CSS<br>
                    <input type="checkbox" name="categories[]" value="3" <?php if (in_array("3", $categories)) {
                echo "checked";};?> /> Javascript<br>
                    <input type="checkbox" name="categories[]" value="4" <?php if (in_array("4", $categories)) {
                echo "checked";};?> /> PHP<br>
                    <input type="checkbox" name="categories[]" value="5" <?php if (in_array("5", $categories)) {
                echo "checked";};?> /> jQuery<br>

                </div>
                <div class="mr-4">
                    <input type="checkbox" name="categories[]" value="6" <?php if (in_array("6", $categories)) {
                echo "checked";};?> /> Wordpress<br>
                    <input type="checkbox" name="categories[]" value="7" <?php if (in_array("7", $categories)) {
                echo "checked";};?> /> flexbox<br>
                    <input type="checkbox" name="categories[]" value="8" <?php if (in_array("8", $categories)) {
                echo "checked";};?> /> Bootstrap<br>
                    <input type="checkbox" name="categories[]" value="9" <?php if (in_array("9", $categories)) {
                echo "checked";};?> /> mySql<br>
                 <input type="checkbox" name="categories[]" value="10" <?php if (in_array("10", $categories)) {
                echo "checked";};?> /> Architecture mvc<br>
                </div>
                <div class="mr-4">
                <input type="checkbox" name="categories[]" value="11" <?php if (in_array("11", $categories)) {
                echo "checked";};?> /> Webpack<br>
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
        <!-- <input name="image" type="file" id="upload" class="hidden" onchange=""> -->

        <input type="submit" class="btn btn-success" value="Envoyer">
    </form>
</div>

<?php print_r($data);?>

<?php require APPROOT . '/views/inc/admin-footer.php'; ?>