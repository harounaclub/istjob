<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Istjobs page en construction</title>
    <meta name="description" content="Babideals - page en construction">
    <meta name="author" content="ISP-CI">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.html" />

    <!-- FONT -->
    <link href='<?php echo base_url(); ?>assets/comingsoon/fonts.googleapis.com/cssfdd1.css?family=Poppins:200,300,600,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/comingsoon/fonts.googleapis.com/cssddcd.css?family=Playfair+Display:700i" rel="stylesheet">

    <!-- ICON FONTS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/comingsoon/css/font-awesome.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/comingsoon/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/comingsoon/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/comingsoon/css/style.css">
   
</head>

<body class="background_black">
    <div class="loader_bg"><div class="loader"></div></div>
    <div class="bg_image img_011"></div>
    <div id="cloud-animation">
        <img src="<?php echo base_url(); ?>assets/comingsoon/img/cloud-1.png" alt="" id="cloud1">
        <img src="<?php echo base_url(); ?>assets/comingsoon/img/cloud-2.png" alt="" id="cloud2">
        <img src="<?php echo base_url(); ?>assets/comingsoon/img/cloud-3.png" alt="" id="cloud3">
        <img src="<?php echo base_url(); ?>assets/comingsoon/img/cloud-4.png" alt="" id="cloud4">
    </div>
    <div id="particles-js"></div>
    <header>
        <div class="brand">
            <!--
            <img src="<?php echo base_url(); ?>assets/comingsoon/img/logo-white.png" class="img-responsive" alt="Laaris.com">
            -->
        </div>
        <div class="menu">
            <div class="menu-icon"><span></span></div>
        </div>
    </header>
    <div class="wrapper text-center d_table">
        <div class="d_table_v color_white one">
            <h4 class="font_semibold">Istjobs ,votre plateforme de recrutement</h4>
            <h1 class="title"><span class="serif big_2">Bientôt disponible</span></h1>
            <h1 id='' class="title"></h1>
            <div class="space_5"></div>
            <div class="countdown">
                <ul class="color_white" id="countdown"></ul>
            </div>
            <div class="space_10"></div>
            
            <!--
            <div class="subscribe">
                <form class="subscribe_form tr text-center" action="#" method="POST">
                    <div class="form-group">
                        <div class="controls">
                            <label for="mail-subscribe" class="serif">Subscribe to be notified!</label>
                            <br>
                            <input type="text" id="mail-subscribe" name="email" placeholder="Enter your email"
                                   onfocus="this.placeholder = 'Enter your email'"
                                   onblur="this.placeholder = 'Enter your email'"
                                   class="form-control color_white email"/>
                            <button class="submit btn" type="submit" value="submit">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            -->
        </div>
        
        <!--
        <ul class="social_list list-inline one">
            <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
        
        -->
        <div class="info hide">
            <div class="about">
                <h2 class="title">A propos de ISTJOB</h2>
                <br>
                <p>
                    Istjob est votre plateforme leader dans la recrutement en Côte-d'ivoire.
                </p>
            </div>
            <div class="space_5"></div>
            <!--
            <ul class="social_list r list-inline">
                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
            
            <div class="space_10"></div>
            <div class="contact">
                <h2 class="title">Get in touch</h2>
                <br>
                <form id="contact-form" class="fadeInUpBig anim" method="post" action="#">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control color_white"
                                           placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control color_white"
                                           placeholder="Your email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" class="form-control color_white"
                                           placeholder="Write the subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control color_white"
                                                      placeholder="Write message..." rows="4" required="required"
                                                      data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-send" value="Send message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            -->
        </div>
        <footer class="one">
            Copyright © 2017   | 
        </footer>
    </div>

<!-- JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/validator.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/contact.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/particles.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/particles_3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/countdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/comingsoon/js/script.js"></script>
</body>

<!-- Mirrored from laaris.com/coming-soon-12/new-image-c.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2018 00:54:05 GMT -->
</html>
