<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT;?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URLROOT; ?>/Admin">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkArticles" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkArticles">
        <a class="dropdown-item" href="<?php echo URLROOT; ?>/AdminArticles/1">Tous les articles</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/AdminArticles/published">Articles publiés</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/AdminArticles/notpublished">Articles non publiés</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkProjets" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Projets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkProjets">
        <a class="dropdown-item" href="<?php echo URLROOT; ?>/AdminProjects">Tous les projets</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/AdminProjects/published">Projets publiés</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/AdminProjects/notpublished">Projets non publiés</a>
        </div>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/AdminCategories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Ajouter un utilisateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>