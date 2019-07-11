<?php require APPROOT . '/views/inc/header.php';?>

<section id="banner" class="banner">
    <div class="content">
            <nav class="d-md-none top-menu-container">
                <ul class="top-menu">
                    <li class="m-0 current"><a href="#about">À Propos</a></li>
                    <li class=""><a href="#projects">Projets</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </nav>
        <div class="banner--bottom">
            <div class="banner--bottom--titles">
                <h1>Julia Assad</h1>
                <h2>Développeuse Web</h2>
            </div>
            <p class="d-none d-md-block">Ayant une passion pour <strong>l'informatique</strong>, j'ai choisi de faire
                une reconversion professionelle en 2016. Je me
                suis d'abord formée en autodidacte puis j'ai suivi le parcours <strong>'Développeur Web Junior'</strong>
                chez Openclassrooms
            </p>
        </div>
        <ul class="social-icons">
            <li><a class="target=_blank" href="https://www.facebook.com/julia.assadchevreux"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a class="target=_blank" href="https://www.linkedin.com/in/julia-assad/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            <li><a class="target=_blank" href="https://github.com/Jmassads"><i class="fab fa-github" aria-hidden="true"></i></a></li>
            <li><a class="target=_blank" href="https://twitter.com/jmassads"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="image">
        <p class="text-light">N'hésitez pas à me contacter pour plus d'infos</p>
        <a class="btn btn-md btn-light shadow-none" href="#contact">Contact</a>
    </div>
</section>


<div class="sidenav">
    <a href="#banner">
        <div class="logo">
            <span class="initial_first_name">J</span>
            <span class="initial_last_name">A</span>
        </div>
    </a>

    <ul class="sidenav--menu">
        <li><a class="active" href="#about">A Propos</a></li>
        <li><a href="#projects">Projets</a></li>
        <li><a href="#skills">Compétences</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<div class="inside-sections">

    <section id="about" class="section about">
        <div class="container-fluid">
            <span class="heading-meta">À Propos</span>
            <h2 class="headline--red-dot">Qui suis-je?</h2>
            <p class="about--description">
                J'ai obtenu mon diplôme en management de système d'information en 2009 aux États Unis. Je suis
                rentrée
                en France en 2012 et j'ai passé plusieurs années à travailler dans l'hôtellerie. En 2016, le
                développement web est devenu une réelle passion pour moi et j'ai décidé de me former chez
                Openclassrooms.</p>
            <div class="row">
                <div class="col-sm-12">
                    <div class="timer-container">
                        <div class="timer"></div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start">
                <a href="files/julia_assad_cv.pdf" download
                    class="blog-button btn btn btn-outline-dark shadow-none rounded-0"> <i class="fas fa-download"></i>
                    Curriculum vitae</a>
            </div>
        </div>
    </section>

    <section id="projects" class="section projects">
        <div class="container-fluid">
            <span class="heading-meta">Projets</span>
            <h2 class="headline--red-dot">Projets récents</h2>
            <div class="row justify-content-center">
                <?php foreach($data['projects'] as $project):?>
                <div class="col-md-6">
                    <div class="project">
                        <div class="project--image mb-2">
                            <picture>
                                <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_sm_image;?>"
                                    media="(min-width:768px)">
                                <img class="img-fluid large-hero__image"
                                    src="<?php echo URLROOT;?>/uploads/<?php echo $project->project_lg_image;?>"
                                    alt="<?php echo $project->project_name;?>">
                            </picture>
                             <a href="<?php echo URLROOT;?>/Portfolio/projets/<?php echo $project->project_slug;?>"><span
                                        class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Voir le projet</span></a>
                        </div>
                        <h3 class="project--title"><?php echo $project->project_name;?></h3>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="d-flex justify-content-start">
                <a href="<?php echo URLROOT;?>/Portfolio"
                    class="blog-button btn btn-outline-dark shadow-none rounded-0">Tous mes Projets <span
                        class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </section>

    <section id="skills" class="section skills">
        <div class="container-fluid">
            <div class="py-4">
                <span class="heading-meta">Compétences</span>
                <h2 class="headline--red-dot">Langages de programmation</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <h3 class="h6"><img class="img-fluid" src="<?php echo URLROOT;?>/img/front.png" width="45"
                                    height="45" alt="front-end icon">
                                Front End</h3>
                            <ul>
                                <li>HTML5/CSS3</li>
                                <li>Flexbox</li>
                                <li>Bootstrap</li>
                                <li>Sass</li>
                                <li>Gulp</li>
                                <li>Webpack</li>
                                <li>jQuery</li>
                                <li>Javascript es5/es6</li>
                                <li>AJAX</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="mb-3">
                            <h3 class="h6"><img class="img-fluid" src="<?php echo URLROOT;?>/img/back.png" width="35"
                                    height="35" alt="back-end icon">
                                Back End</h3>
                            <ul>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>Architecture MVC</li>
                                <li>Wordpress</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <h3 class="h6"><img class="img-fluid" src="<?php echo URLROOT;?>/img/command-line.png"
                                    width="45" height="45" alt="database icon"> Autres</h3>
                            <ul>
                                <li>Git</li>
                                <li>Basic Command Line</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="section about">
        <div class="container-fluid">
            <span class="heading-meta">Lire</span>
            <h2 class="headline--red-dot">Blog</h2>
            <p>Faire de la veille, c'est important. J'ai donc decidé de partager des ressources sur le développement
                web. Les articles que je partage sont des cours et des tutoriels, principalement sur le HTML, CSS, PHP
                et Javascript.</p>
            <div class="d-flex justify-content-start">
                <a href="<?php echo URLROOT;?>/Blog" class="blog-button btn btn-outline-dark shadow-none rounded-0">Mon
                    Blog <span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact pb-4">
        <div class="container-fluid">
            <div class="head-section">
                <span class="heading-meta">Contact</span>
                <h2 class="headline--red-dot">Contact</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="info-contact list-unstyled ">
                        <li><i class="mr-2 fa fa-map-marker "></i> Saint Germain en Laye</li>
                        <li>
                            <i class="mr-2 fa fa-envelope "></i> <a
                                href=mailto:support@me.com>juliasajah85@gmail.com</a>
                        </li>
                    </ul>
                    <div id="map"></div>
                </div>
                <div class="col-md-6">

                    <!-- message -->
                    <?php flash('contact_message'); ?>
                    <form method="post" action="<?php echo URLROOT;?>/Home/Index/#contact">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="h6 mt-3">N'hésitez pas à me contacter pour plus d'informations</h3>
                            </div>
                        </div>
                        <div class="row box-form">

                            <div class="col-12 col-lg-6">
                                <input type="text" name="name"
                                    class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $data['name']; ?>" placeholder="Votre nom*">
                                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                            </div>

                            <div class="col-12 col-lg-6">
                                <input type="text" name="email"
                                    class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $data['email']; ?>" placeholder="Votre email*">
                                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                            </div>
                            <div class="col-12 col-lg-6">

                                <textarea name="message" class="form-control" placeholder="Votre message.."
                                    rows=3><?php echo isset($message) ? $message : '';?></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button class="btn btn-sm btn-outline-dark shadow-none rounded-0" type="submit"
                                    name="submit">Envoyer <i class="fa fa-paper-plane-o com-i ml-1"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <button id="backTotop" class="backTotop" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>
</div>



<?php require APPROOT . '/views/inc/homepage-footer.php';?>