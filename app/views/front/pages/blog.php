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
    <section class="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="text-center mb-4">Julia Assad.blog</h2>
                    <h3 class="blog--title">Des Ressources et de l'inspiration</h3>
                    <div class="row align-items-start">
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://htmlreference.io/images/html-reference-icon.png" alt="">
                                    <h3 class="article--title"><a href="https://htmlreference.io/" target="blank">htmlreference.io</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Htmlreference.io est un site outil qui va vous permettre de bien comprendre l’HTML et les différents attributs.</p>
                                </div>
                                <a href="" class="btn btn-sm btn-outline-dark">Lire la suite</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://cssreference.io/images/css-reference-icon.png" alt="">
                                    <h3 class="article--title"><a href="https://cssreference.io/" target="blank">cssreference.io</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>cssreference.io est un site outil qui va vous permettre de bien comprendre l’HTML et les différents attributs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://i.pinimg.com/originals/25/03/55/2503556b9dab183ddb85688c3ca840f4.png" alt="">
                                    <h3 class="article--title"><a href="https://scrollmagic.io/" target="blank">scrollmagic.io</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Librairie Javascript qui permet une multitude d'interaction lors du scrolling d'une page web.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://www.udemy.com/staticx/udemy/images/v6/favicon-128.png" alt="">
                                    <h3 class="article--title"><a href="https://www.udemy.com/wordpress-theme-and-plugin-development-course/" target="blank">WordPress Development</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Cours en Anglais de Zac Gordon pour devenir un développeur WordPress en créant des thèmes et des plugins personnalisés</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://css-tricks.com/apple-touch-icon.png" alt="">
                                    <h3 class="article--title"><a href="">A Complete Guide to Flexbox</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Ce guide explique tout ce qui concerne flexbox, en se concentrant sur les différentes propriétés possibles pour l'élément parent (le conteneur flex) et les éléments enfants (les éléments flex).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://github.com/fluidicon.png" alt="">
                                    <h3 class="article--title"><a href="">idiomatic.js</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Principes d'écriture d'un code JavaScript cohérent et idiomatique</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="https://www.udemy.com/staticx/udemy/images/v6/favicon-128.png" alt="">
                                    <h3 class="article--title"><a href="https://www.udemy.com/object-oriented-php-mvc/" target="blank">Object Oriented PHP &amp; MVC</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Cours en Anglais de Brad Traversy pour apprendre à construire un framework PHP MVC orienté objet personnalisé</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article--meta">
                                    <img class="article--image img-fluid" src="http://flexboxfroggy.com/favicon.ico" alt="">
                                    <h3 class="article--title"><a href="https://flexboxfroggy.com/#fr" target="blank">Flexbox Froggy</a></h3>
                                </div>
                                <div class="article--excerpt">
                                    <p>Jeu où vous aidez Froggy la grenouille et ses amis en écrivant du code CSS (flexbox).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about-image d-none d-sm-block">
                        <img class="w-100" src="https://avatars0.githubusercontent.com/u/22447803?s=400&u=453226f708a7c2242a639882fde1ec32ffa78918&v=4 " alt="photo de Julia Assad">
                    </div>

                    <div class="about--description my-4">
                        <p>Je partage certaines ressources/cours/jeux que je découvre au fil de ma veille. La plupart des cours sont en Anglais.</p>
                    </div>
                    <div class="card mb-4 rounded-0">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">HTML</a>
                                        </li>
                                        <li>
                                            <a href="#">CSS</a>
                                        </li>
                                        <li>
                                            <a href="#">Javascript</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#">jQuery</a>
                                        </li>
                                        <li>
                                            <a href="#">Wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">PHP</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>


<?php require APPROOT . '/views/inc/footer.php';?>
