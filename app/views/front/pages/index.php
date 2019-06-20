<?php require APPROOT . '/views/inc/header.php';?>

<!-- Overlay -->
<div class="overlay">
    <div class="nav-container">
        <ul>
            <li><a class="is-active" href="">Accueil</a></li>
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

    <!-- Header -->
    <header id="header" class="header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h1>Julia Assad</h1>
                    <p>Je suis Développeuse Web</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatem voluptatibus ullam at
                        saepe consequuntur accusamus nulla dolorum deserunt dolor, iste illum, culpa possimus itaque
                        esse modi soluta molestias illo?</p>
                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <a href="#projects" class="project-button btn btn-outline-dark rounded-0">Portfolio</a>
                        <hr class="hr-line">
                        <a href="<?php echo URLROOT;?>/Blog" class="blog-button btn btn-outline-dark rounded-0">Blog</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="header--social-icons">
                        <li><a href=""><i class="header--social-icons-facebook fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="header--social-icons-linkedin fab fa-linkedin-in"></i></a></li>
                        <li><a href=""><i class="header--social-icons-twitter fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="header--social-icons-github fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section id="projects" class="section projects">
        <div class="container-fluid">
            <h2 class="headline--red-dot">Projets</h2>
            <div class="row"> 
            <?php foreach($data['projects'] as $project):?>
            <div class="col-md-6">
                    <div class="project">
                        <div class="project--image">
                            <picture>
                                <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_sm_image;?>" media="(min-width:768px)">
                                <img class="img-fluid" srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_lg_image;?>" alt="" class="large-hero__image">
                                <a href="<?php echo URLROOT;?>/Portfolio/<?php echo $project->project_slug;?>"><span
                                        class="lnr lnr-chevron-right"></span></a>
                            </picture>
                        </div>
                        <h3 class="project--title"><?php echo $project->project_name;?></h3>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <section id="about" class="section about">
        <div class="container-fluid">
            <h2 class="headline--red-dot">About me</h2>
            <p class="about--description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla maxime impedit cumque eaque possimus
                ipsum explicabo eos quisquam labore obcaecati? Temporibus officia similique consequatur et ratione
                totam, tempore molestias excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae fugit
                quod voluptates ratione harum tempore voluptatem incidunt facilis reprehenderit praesentium, explicabo
                dolore mollitia porro voluptate, debitis vero fugiat enim aliquam.</p>
        </div>
    </section>

    <section id="skills" class="section skills">
        <div class="container-fluid">
            <div class="py-4">
                <h2 class="headline--red-dot">Skills</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <h3>Front End</h3>
                        <ul>
                            <li>HTML5/CSS3</li>
                            <li>Flexbox</li>
                            <li>Bootstrap</li>
                            <li>Sass</li>
                            <li>Gulp</li>
                            <li>Webpack</li>
                            <li>jQuery</li>
                            <li>Javascript es5/es6</li>
                            <li>GSAP</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">

                        <h3>Back End</h3>
                        <ul>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Architecture MVC</li>
                            <li>Wordpress</li>
                        </ul>

                    </div>
                    <div class="col-sm-4">
                        <h3>Autres</h3>
                        <ul>
                            <li>Git</li>
                            <li>Basic Command Line</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact">
        <div class="container">
            <div class="contact--content py-4">
                <h2><span>Contact</span></h2>
            </div>
        </div>
    </section>

    <button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>

    <?php require APPROOT . '/views/inc/footer.php';?>