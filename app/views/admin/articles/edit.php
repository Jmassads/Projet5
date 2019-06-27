<?php require APPROOT . '/views/inc/admin-header.php';?>

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
            <div class=" my-3">

                <?php
                $categories = array_map(function ($category) {
                    return $category->category_id;
                }, $data['checkedCategories']);
                ?>

                <!-- get database categories and checked echo checked for all the ones that are checked for an article -->

                <?php foreach ($data['databaseCategories'] as $databaseCategory): ?>
                <?php $category_id = $databaseCategory->category_id;?>
                <input type="checkbox" name="categories[]" value="<?php echo $databaseCategory->category_id; ?>" <?php if (in_array("$category_id", $categories)) {
                    echo "checked";}
                ;?> />
                <?php echo $databaseCategory->category_name; ?>
                <?php endforeach;?>

            </div>
            <div class="form-group">
                <label>Slug de l'article:<sup>*</sup></label>
                <input disabled type="text" class="form-control form-control-md" value="<?php echo $data['slug']; ?>">
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

            <input type="submit" class="btn btn-success" value="Envoyer">
    </form>
</div>

<?php require APPROOT . '/views/inc/admin-footer.php';?>