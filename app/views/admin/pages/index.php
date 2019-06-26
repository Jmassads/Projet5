<?php require APPROOT . '/views/inc/admin-header.php';?>

<h2>Derniers Articles</h2>
<table class="table table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">url</th>
            <th scope="col">Catégories</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['articles'] as $article):?>
        <tr>
            <th scope="row"><?php echo $article->article_id;?></th>
            <input type="hidden" id="article_id" name="article_id" value="<?php echo $article->article_id;?>">
            <td><?php echo $article->article_title;?></td>
            <td><?php echo $article->article_url;?></td>
            <td>
                <ul class="list-group m-0">
                    <?php foreach($data['categories'] as $category):?>
                    <?php if($category->article_id == $article->article_id):?>
                    <li class="list-group-item"><?php echo $category->category_name;?></li>
                    <?php endif;?>
                </ul>
                <?php endforeach;?>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<div class="d-flex justify-content-end">

    <a class="btn btn-md btn-outline-dark rounded-0"
        href="<?php echo URLROOT;?>/AdminArticles?>">Voir tous les articles</a>
</div>
<?php require APPROOT . '/views/inc/admin-footer.php';?>