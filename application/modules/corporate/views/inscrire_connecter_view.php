<!DOCTYPE html>
<html lang="en">

  <head>

   <?php include("templates/tpl_head.php"); ?>
     
   
  </head>

<body class="title-image">
      <br><br><br><br>
	<!-- Header Image Or May be Slider-->
    	<div id="header" class="container-fluid pages">
              <div class="row">
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                   
                         <?php include("templates/tpl_menutop.php"); ?>
                   
                 </div>
                 
                
            </div>
       	</div>
	<!-- Header Image Or May be Slider-->
    
    <div class="container-fluid login_register header_area deximJobs_tabs">
    	<div class="row">
            <div class="container main-container-home">
                    <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-pills ">
                            <li class="active"><a data-toggle="tab" href="#register-account">S'inscrire</a></li>
                            <li><a href="<?php echo base_url(); ?>candidat" target="_blank">Se connecter</a></li>
                           
                        </ul>

                    <div class="tab-content">
                        <div id="register-account" class="tab-pane fade in active white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	
                                        <span  class="contact_us">
                                           <?php echo form_open('corporate/inscription_candidat'); ?>


 

                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" name="email">
                                                <?php echo form_error('email','<font color="red">','</font>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name="pass" id="password"/>
                                                <?php echo form_error('pass','<font color="red">','</font>'); ?>
                                            </div>
                                             <div class="form-group">
                                                <label>Confirmer mot de passe</label>
                                                <input type="password" name="repass" id="cpassword"/>
                                                <?php echo form_error('repass','<font color="red">','</font>'); ?>
                                            </div>
                                   
                                          
                                    
                                            <div class="form-group submit">
                                                <label>Submit</label>
                                                <input type="submit" name="submit" value="S'inscrire" class="register">
                                                <a href="#" class="lost_password">Mot de passe oublié ?</a>
                                            </div>

                                 </span>
                                 <?php echo form_close(); ?>
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Pourquoi avoir un compte sur ISTjobs? </h3>
                                    <ul>
                                    	<li><p><i class="fa fa-clock-o"></i>Demande plus rapide à vos offres, plus bésoins d'importer vos documents à chaque offre, une seule fois suffit.</p></li>
										<li><p><i class="fa fa-child"></i>Cibler efficacement les employeurs
Vous pouvez partager votre profil.</p></li>

										<li><p><i class="fa fa-check-circle-o"></i>A chaque nouvelle offre correspondante à votre profil,
Nous vous le proposerons par e-mail</p></li>
                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>
                        <div id="login" class="tab-pane fade in  white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<p>Se connecter sur votre espace recrutement.</p>

                                <?php echo form_open('corporate/se_connecter_candidat'); ?>
 


                                <span  class="contact_us">
                        	<div class="form-group">
                            	<label>email</label>
                            	<input type="email" name="email">
                                <?php echo form_error('email','<font color="red">','</font>'); ?>
                            </div>
                           
                            <div class="form-group">
                            	<label>Mot de passe</label>
                            	<input type="password" name="pass" />
                                <?php echo form_error('pass','<font color="red">','</font>'); ?>
                            </div>
                                                        
                            <div class="form-group submit">
                            	<label>Submit</label>
                            	<div class="cbox">
                                	<input type="checkbox" name="checkbox"/>
                                	<span>Se souvenir de</span>
                               </div>
                            </div>
                            <div class="form-group submit">
                            	<label>Submit</label>
                            	<input type="submit" name="submit" value="Se connecter" class="signin" id="signin">
                                <a href="lost-password.html" class="lost_password">Mot de passe oublié ?</a>
                            </div>
                           
                        
                        	</span>
                            <?php echo form_close(); ?>

                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Vous n'avez pas de compte?</h3>
                                    <ul>
                                    	<li>
                                        <p> Si vous souhaitez en savoir plus sur la façon dont Jobsite peut vous aider à répondre à vos besoins de recrutement, veuillez remplir ce formulaire..</p></li>
										
										<li>
                                        <a href="#" class="label job-type register">s'inscrire</a>
                                        
                                        </li>
                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>
                       
                    </div>
                        
                        
                    </div>
                    
			</div>
       </div>
    </div> 
	
  	 
<!--Footer Area-->
      
    <?php include("templates/tpl_footer.php"); ?>

    <!--Footer Area--> 
    <!--Last Footer Area---->
    
     <?php include("templates/tpl_copyright.php"); ?>

    <!--Last Footer Area----> 
   
<?php include("templates/tpl_js.php"); ?>

  <!-- Scripts
================================================== -->
        
</body>

<!-- Mirrored from deximlabs.com/dexjobs/light/login_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 14:52:33 GMT -->
</html>