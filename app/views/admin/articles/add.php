<?php require APPROOT . '/views/inc/admin-header.php'; ?>

<a href="<?php echo URLROOT; ?>/AdminArticles" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i>
    Retour</a>
<div class="card card-body bg-light my-5 rounded-0">
    <h2>Ajouter un Article</h2>
    <p>Créer un nouvel article avec ce formulaire</p>
    <form action="<?php echo URLROOT; ?>/AdminArticles/add" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre de l'article:<sup>*</sup></label>
            <input type="text" name="title"
                class="form-control form-control-md <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo $data['title']; ?>" placeholder="Ajouter un nom...">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Excerpt:<sup>*</sup></label>
            <textarea name="excerpt"
                class="mytextarea form-control form-control-md <?php echo (!empty($data['excerpt_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter un excerpt..."><?php echo $data['excerpt']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['excerpt_err']; ?></span>
        </div>
        <div class="form-group">
            <label>Contenu de l'article:<sup>*</sup></label>
            <textarea name="content"
                class="mytextarea form-control form-control-md <?php echo (!empty($data['content_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter un contenu..."><?php echo $data['content']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['content_err']; ?></span>
        </div>
        <div class="form-group">
            <label>url de la ressource:</label>
            <textarea name="url"
                class="form-control form-control-md <?php echo (!empty($data['url_err'])) ? 'is-invalid' : ''; ?>"
                placeholder="Ajouter l'url du l'article..."><?php echo $data['url']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['url_err']; ?></span>
        </div>
        <div class="form-group">
            <div class="my-4">
                <label>Languages:</label>
                <br>
                <?php foreach ($data['databaseCategories'] as $databaseCategory): ?>
                <?php $category_id = $databaseCategory->category_id;?>
                <input type="checkbox" name="categories[]" value="<?php echo $databaseCategory->category_id; ?>" />
                <?php echo $databaseCategory->category_name; ?>
                <?php endforeach;?>
            </div>

        </div>
        <div class="form-group">
            <label>Sélectionner une image</label>
            <input type="file" name="article_image"
                class="form-control-file <?php echo (!empty($data['article_image_err'])) ? 'is-invalid' : ''; ?>">

            <span class="invalid-feedback">
                <?php foreach ($data['article_image_err'] as $error): ?>
                <span><?php echo $error . '</br>'; ?></span>
                <?php endforeach;?>
            </span>
        </div>
        <div class="form-group">
            <select name="is_published" class="form-control form-control-md">
                <option selected="true" disabled="disabled">Souhaitez vous publier l'article?</option>
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>
        <input name="image" type="file" id="upload" class="hidden" onchange="">

        <input type="submit" class="btn btn-success" value="Envoyer">
    </form>
</div>


<?php require APPROOT . '/views/inc/admin-footer.php'; ?>