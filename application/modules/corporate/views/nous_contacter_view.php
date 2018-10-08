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
    
    <!--header section -->
    	<div class="container-fluid page-title">
			<div class="row blue-banner">
            	<div class="container main-container">
                	<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                		<h3 class="white-heading">Contacter nous</h3>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    	<h5>Ecriver nous via le formulaire suivant ou contacter par téléphone ou via les réseaux sociaux.</h5>
                    </div>
                </div>
            </div> 
        </div> 
  	 <!--header section -->
    
    
   <!-- full width section forms -->
    	<div class="container-fluid  contact_us">
        	<div class="row">
            	<div class="container main-container" id="form-style-2">
                	<div class="col-lg-9 col-lg-push-1">
                    	<span  name="contact_us">
                        	<div class="form-group">

                            <?php echo form_open('corporate/nous_contacter'); ?>


                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Nom:</label></div>
                            	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input type="text" name="nom">
                              <?php echo form_error('nom','<font color="red">','</font>'); ?>
                            </div>

                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Email:</label></div>
                            	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input type="email" name="email"/>
                              <?php echo form_error('email','<font color="red">','</font>'); ?>
                            </div>

                            </div>
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label>Message:</label></div>
                            	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><textarea rows="5" name="message"></textarea>
                                <?php echo form_error('message','<font color="red">','</font>'); ?>
                              </div>
                            </div>
                              <div class="form-group submit">
                              	
                            	<div class="col-lg-10 col-lg-push-2 col-md-10 col-md-push-2 col-sm-10 col-sm-push-2 col-xs-12"><input type="submit" name="submit" value="Envoyer message"/></div>
                            </div>
                        
                        </span>
                    </div>
                    <?php echo form_close(); ?> 
                </div>
            </div>
        </div>
    
   <!-- full width section forms -->
   
   <!-- full width section Map -->
   	<div class="container-fluid white-bg">
    	<div class="row">
        	<div class="container main-container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.8070266049917!2d-3.9921385495526596!3d5.292783996141417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1e95485a4613f%3A0x183337e36adeeab0!2sSARA-FINA+GROUP+INTER!5e0!3m2!1sfr!2sci!4v1534122454594" width="1170" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                   
                </div>
            </div>
        </div>
    </div>
   <!-- full width section Map-->
   
   <!-- full width section about us-->
 	
   <!-- full width section about us-->
 	
<!--Footer Area-->
   		
    <!--Footer Area--> 
    <!--Last Footer Area---->
    	<div class="container-fluid footer last-footer ">
        	<div class="row">
            <div class="container main-container">
            	<div class="col-lg-9 col-md-3 col-sm-9 col-xs-6" >
                	<p class="copyright">© template by DeximLabs.com All Rights Reserved.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                	<ul class="list-group">
                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
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

<!-- Mirrored from deximlabs.com/dexjobs/light/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 14:54:05 GMT -->
</html>