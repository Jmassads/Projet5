<?php require APPROOT . '/views/inc/header.php';?>

<!-- Overlay -->
<div class="overlay">
    <div class="nav-container">
        <ul>
            <li><a href="<?php echo URLROOT;?>#about">À propos</a></li>
            <li><a href="<?php echo URLROOT;?>#projects">Portfolio</a></li>
            <li><a href="<?php echo URLROOT;?>#skills">Skills</a></li>
            <li><a href="<?php echo URLROOT;?>/Blog">Blog</a></li>
        </ul>
    </div>
</div>

<div class="sidenav">
<div class="home-icon">
        <a href="<?php echo URLROOT;?>"><img class="img-fluid" src="<?php echo URLROOT;?>/img/iconmonstr-home-thin.svg" alt=""></a>
    </div>
    <div id="btn-menu" class="btn-open">
        <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
    </div>
    <a href="#contact" class="btn btn-sm btn-outline-dark rounded-0 contact-button shadow-none">Contact</a>
</div>


<div id="main" class="main-container">
    <div class="container">
    <section class="single-article">
        <h2><?php echo $data['article']->article_title;?></h2>
        <p><?php echo $data['article']->article_content;?></p>
    </section>
    </div>
</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>
