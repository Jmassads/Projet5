<?php require APPROOT . '/views/inc/admin-header.php';?>

<h2>Articles</h2>
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
      <td><?php echo $article->category_name;?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>

<?php print_r($data);?>
<?php require APPROOT . '/views/inc/admin-footer.php';?>