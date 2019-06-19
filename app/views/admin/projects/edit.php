<?php require APPROOT . '/views/inc/admin-header.php'; ?>


<a href="<?php echo URLROOT; ?>/AdminProjects" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
<div class="card card-body bg-light my-5">
    <h2>Modifier le Projet</h2>
    <p>Changer les détails du projet</p>
    <form action="<?php echo URLROOT; ?>/AdminProjects/edit/<?php echo $data['id']; ?>" method="post">
        <div class="form-group">
            <label>Title:<sup>*</sup></label>
            <input type="text" name="name"
                class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Description:<sup>*</sup></label>
            <textarea name="description"
                class="mytextarea form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['description']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
        </div>

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
                <input type="checkbox" name="categories[]" value="mySql" <?php if (in_array("mySql", $categories)) {
                echo "checked";};?> /> mySql <br>
                <input type="checkbox" name="categories[]" value="architecture MVC" <?php if (in_array("architecture MVC", $categories)) {
                echo "checked";};?> /> Architecture MVC <br>
                <input type="checkbox" name="categories[]" value="Webpack" 
                <?php if (in_array("Webpack", $categories)) {
                echo "checked";};?> /> Webpack <br>
            </div>
            <div class="mr-4">
                <input type="checkbox" name="categories[]" value="GSAP" <?php if (in_array("GSAP", $categories)) {
                echo "checked";};?> /> GSAP <br>
                <input type="checkbox" name="categories[]" value="ScrollMagic" <?php if (in_array("ScrollMagic", $categories)) {
                echo "checked";};?> /> ScrollMagic <br>
                <input type="checkbox" name="categories[]" value="Sass" 
                <?php if (in_array("Sass", $categories)) {
                echo "checked";};?> /> Sass <br>
               <input type="checkbox" name="categories[]" value="Bootstrap" 
               <?php if (in_array("Bootstrap", $categories)) {
                echo "checked";};?> /> Bootstrap <br>
               <input type="checkbox" name="categories[]" value="Gulp" 
               <?php if (in_array("Gulp", $categories)) {
                echo "checked";};?> /> Gulp <br>
            </div>
        </div>
        <div class="form-group">
            <label>url du projet:<sup>*</sup></label>
            <textarea name="url"
                class="form-control form-control-md <?php echo (!empty($data['url_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter l'url du projet..."><?php echo $data['url']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['url_err']; ?></span>
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

<?php print_r($data);?>
<?php require APPROOT . '/views/inc/admin-footer.php'; ?>