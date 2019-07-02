<?php

// Message Vars

$msg = '';
$msgClass = '';

// Check for Submit

// Here we put submit as it's looking at the form name="submit"
if(filter_has_var(INPUT_POST, 'submit')){
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Check Required Fields
    
    if(!empty($email) && !empty($name) && !empty($message)){
        // PASSED
        
        // Check Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } else {
            // Passed
           
          
            // Recipien Email
            $toEmail = 'juliasajah85@gmail.com';
            $subject = 'Contact Request From ' .$name;
            $body =  "<h2>Contact Request</h2>
                     <h4>Name</h4>
                     <p>$name</p>
                     <h4>Email</h4><p>$email</p>
                     <h4>Message</h4><p>$message</p>";
            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional Headers
            $headers .= "From: " .$name. "<" .$email. ">" . "\r\n";
            
            if(mail($toEmail, $subject, $body, $headers)){
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your email was not sent';
                $msgClass = 'alert-alert';
            }
        }
    }else{
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}

    

?>

<?php require APPROOT . '/views/inc/header.php';?>

<?php require APPROOT . '/views/inc/sidenav.php';?>


<div id="main" class="main-container">

    <!-- Header -->
    <header id="header" class="header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h1>Julia Assad</h1>
                    <h2 class="h4 mb-3">Développeuse Web Junior</h2>
                    <p>Ayant une passion pour l'informatique, j'ai choisi de faire une reconversion professionelle en
                        2016. Je me suis d'abord formée en autodidacte puis j'ai suivi le parcours 'Développeur Web
                        Junior' chez Openclassrooms</p>
                    <div class="my-4 d-flex justify-content-between align-items-center">
                        <a href="#projects"
                            class="project-button btn btn-outline-dark shadow-none rounded-0">Projets</a>
                        <hr class="hr-line">
                        <a href="<?php echo URLROOT;?>/Blog"
                            class="blog-button btn btn-outline-dark shadow-none rounded-0">Blog</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="header--social-icons">
                        <li><a href="https://www.facebook.com/julia.assadchevreux" target="_blank"><i
                                    class="header--social-icons-facebook fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/julia-assad/" target="_blank"><i
                                    class="header--social-icons-linkedin fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/jmassads" target="_blank"><i
                                    class="header--social-icons-twitter fab fa-twitter"></i></a></li>
                        <li><a href="https://github.com/Jmassads" target="_blank"><i
                                    class="header--social-icons-github fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section id="projects" class="section projects">
        <div class="container-fluid">
            <h2 class="headline--red-dot">Projets</h2>
            <div class="row justify-content-center">
                <?php foreach($data['projects'] as $project):?>
                <div class="col-md-6 col-lg-4">
                    <div class="project">
                        <div class="project--image">
                            <picture>
                                <source srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_sm_image;?>"
                                    media="(min-width:768px)">
                                <img class="img-fluid"
                                    srcset="<?php echo URLROOT;?>/uploads/<?php echo $project->project_lg_image;?>"
                                    alt="<?php echo $project->project_name;?>" class="large-hero__image">
                                <a href="<?php echo URLROOT;?>/Portfolio/projets/<?php echo $project->project_slug;?>"><span
                                        class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Voir le projet</span></a>
                            </picture>
                        </div>
                        <h3 class="project--title h6"><?php echo $project->project_name;?></h3>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="d-flex justify-content-end">
                <a href="<?php echo URLROOT;?>/Portfolio"
                    class="blog-button btn btn-outline-dark shadow-none rounded-0">Tous mes projets</a>
            </div>
        </div>
    </section>

    <section id="about" class="section about">
        <div class="container-fluid">
            <h2 class="headline--red-dot">Qui suis-je?</h2>
            <p class="about--description">
                J'ai obtenu mon diplôme en management de système d'information en 2009 aux États Unis. Je suis rentrée
                en France en 2012 et j'ai passé plusieurs années à travailler dans l'hôtellerie. En 2016, le
                développement web est devenu une réelle passion pour moi et j'ai décidé de me former chez
                Openclassrooms.</p>
            <div class="row">
            <div class="col-sm-6">
            <div class="timer-container mb-3">
            <div class="timer"></div>
            </div>
            </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="files/julia_assad_cv.pdf" download
                    class="blog-button btn btn-outline-dark shadow-none rounded-0"> <i class="fas fa-download"></i>
                    Curriculum vitae</a>
            </div>
        </div>
    </section>

    <section id="skills" class="section skills">
        <div class="container-fluid">
            <div class="py-4">
                <h2 class="headline--red-dot">Compétences</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <h3 class="h5"><img class="img-fluid" src="img/front.png" width="45" height="45"
                                    alt="front-end icon">
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
                            <h3 class="h5"><img class="img-fluid" src="img/back.png" width="35" height="35"
                                    alt="back-end icon">
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
                            <h3 class="h5"><img class="img-fluid" src="img/command-line.png" width="45" height="45"
                                    alt="database icon"> Autres</h3>
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

    <section id=contact class="contact pb-4">
        <div class=container>
            <div class=head-section>
                <h2 class="headline--red-dot">Contact</h2>
            </div>
            <div class=row>
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
                    <?php if($msg != ''): ?>
                    <div class="alert_msg alert <?php echo $msgClass;?>">
                        <?php echo $msg;?>
                    </div>
                    <?php endif; ?>
                    <form method="post" action="index.php#contact">
                        <div class="row">
                        <div class="col-12">
                        <h3 class="h4 mt-3">N'hésitez pas à me contacter pour plus d'informations</h3></div>
                        </div>
                        <div class="row box-form">
                            
                            <div class="col-12 col-lg-6">

                                <input type="text" name="name" class="form-control" placeholder="Votre nom*"
                                    value="<?php echo isset($name) ? $name : '';?>">
                            </div>
                            <div class="col-12 col-lg-6">

                                <input type="text" name="email" class="form-control" placeholder="Votre email*"
                                    value="<?php echo isset($email) ? $email : '';?>">
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

    <button id="myBtn" title="Go to top"><span class="lnr lnr-chevron-up"></span></button>

    <?php require APPROOT . '/views/inc/homepage-footer.php';?>