<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:33 GMT -->

<head>
    <title>Espace candidat</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main4a76.css?version=4.3.0" rel="stylesheet">
</head>




 

<body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="index-2.html"><img alt="" src="<?php echo base_url(); ?>img/logo-big.png"></a>
            </div>
             <?php 
                    if(isset($message)){ 


            echo "<center><h5 style='color:blue;''>Votre inscription a été prise en compte <br>Nous vous avons transmis vos accès via votre email <span style='color:red;'>".$message."</span> </h5><center>";

                   }
            ?>


            <?php 
                    if(isset($error)){ 


            echo "<center> <h1 style='color:red;'>Login ou Mot de passe incorrecte !</h1> <center>";

                   }
            ?>

            
            <h4 class="auth-header">Espace candidat</h4>
    <?php echo form_open('candidat'); ?>

                <div class="form-group">
                    <label for="">Nom d'utilisateur</label>
                    <input class="form-control" placeholder="Enter  votre nom" type="text" name="email">
     <?php echo form_error('email','<font color="red">','</font>'); ?>
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="form-group">
                    <label for="">mot de passe</label>
                    <input class="form-control" placeholder="Enter votre mot de passe" type="password " name="pass">
    <?php echo form_error('pass','<font color="red">','</font>'); ?>
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w">
                    <button class="btn btn-primary">Connecter</button>
                    <div class="form-check-inline">
                       
                    </div>
                </div>
    <?php echo form_close(); ?>
        </div>
    </div>
</body>

</html>