<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from deximlabs.com/dexjobs/light/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 14:52:32 GMT -->
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
			<div class="row green-banner">
            	<div class="container main-container">
                	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                		<h3 class="white-heading">Poster une offre d'emploi</h3>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 colxs-12 capital">
                    	<h5>Notre base de donnée vous donne accès à des milliers de candidats actives </h5>
                    </div>
                </div>
            </div> 
        </div> 
  	 <!--header section -->

    
   <!-- full width section forms -->
    	<div class="container-fluid  contact_us">
        	<span   id="form-style-2">
            	<div class="row user-information">
            	<div class="container main-container-home">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                              <label class="heading">Details de l'offre</label>

                            </div>

                        
                        

                        	<div class="form-group">


<?php echo form_open('corporate/poster_offre'); ?>
 
 
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label>Titre de l'offre d'emploi</label>
                           
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            		<input type="text" name="intitule_offre" placeholder="Entrer l'intitulé de l'offre" />
                                     <?php echo form_error('intitule_offre','<font color="red">','</font>'); ?>
                            	</div>
                            </div>

                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label>Situation géographique (optional)</label>
                            
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="lieu_travail" placeholder="ex. Abidjan"/>
                                    <?php echo form_error('lieu_travail','<font color="red">','</font>'); ?>
                            	</div>
                            </div>

                           <!--  <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label>type de contrat</label>
                                   
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="type_emplois" placeholder="CDD,CDI Stage,Interime..." />
                                    <?php echo form_error('type_emplois','<font color="red">','</font>'); ?>
                                </div>
                            </div> -->

                            <!-- <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            		<label>Niveau d'etude exige</label>
                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            		<input type="text" name="Niveaux" placeholder="ex : BAC,BAC+2,BAC+5,etc ..." />
                                    <?php echo form_error('Niveaux','<font color="red">','</font>'); ?>
                            	</div>
                            </div> -->
                         	  <div class="form-group">
                              	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label>Categorie de l'emploi</label>
                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <select class="form-control" name="categorie_pro">
                                        <option value="0">Selectionner une catégorie</option>

                                     <?php 
                                       if(isset($liste_cat_pro)){

                                        foreach ($liste_cat_pro as $catpro) { ?>

                                        <option value="<?php echo $catpro->id_categorie_pro; ?>"><?php echo $catpro->libelle_categorie; ?></option>
                                            
                                       <?php }

                                       }

                                     ?>
                                      
                                     
                                    </select>
                                    
                             	</div>
                                <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label>Description</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <textarea  name="description" placeholder="Donner la description exhaustive de l'offre d'emploi"></textarea>
                                    <?php echo form_error('description','<font color="red">','</font>'); ?>
                                </div>
                            </div>
                            

                             
                            <div class="form-group ">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="default">Maximun salaire /mois ou /heure (Fcfa) <br /><span>(optional)</span></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="salaire" placeholder="xxxxxx" />
                                     <?php echo form_error('salaire','<font color="red">','</font>'); ?>
                                </div>
                            </div>
                           
                           
                            
                     </div>
                </div>
            </div>
            <!-- User Data Row-->
            	
                <!-- Company Details-->
                <div class="row company-details">
                	<div class="container main-container-home">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        	 <div class="form-group">
                              <label class="heading">Details de la compagnie</label>

                            </div>
    

                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Nom de la compagnie</label>

                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="raison_social" placeholder="Saisir le nom de l'entreprise" />
                                    <?php echo form_error('raison_social','<font color="red">','</font>'); ?>
                                </div>
                            </div>


                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">N° du registre de commerce</label>

                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="rccm" placeholder="Saisir le numéro du registre de commerce" />
                                    <?php echo form_error('rccm','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Téléphone entreprise</label>

                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="telephone_entreprise" placeholder="Nous indiquer votre numéro de téléphone entreprise" />
                                    <?php echo form_error('telephone_entreprise','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Email entreprise</label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="email_entreprise" placeholder="Saisir ici votre mail d'entreprise" />
                                    <?php echo form_error('email_entreprise','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Localisation</label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="localisation_entreprise" placeholder="Indiquer la localisation de votre entreprise" />
                                    <?php echo form_error('localisation_entreprise','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="default">Site internet <br /><span>(optional)</span></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="site_internet" placeholder="Nous indiquer le site internet de votre entreprise" />
                                    <?php echo form_error('site_internet','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                          <div class="form-group">
                              <label class="heading">Details sur le responsable d'entreprise</label>

                            </div>

                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Nom du responsable</label>

                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="nom_responsable" placeholder="Nous indiquer le nom du responsable" />
                                    <?php echo form_error('nom_responsable','<font color="red">','</font>'); ?>
                                </div>
                            </div>
                             <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label class="">Prenom(s) du responsable</label>

                                    
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="prenoms_responsable" placeholder="Nous indiquer le prenom du responsable" />
                                    <?php echo form_error('prenoms_responsable','<font color="red">','</font>'); ?>
                            	</div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Email du responsable</label>

                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="email_responsable" placeholder="Nous indiquer l'email du responsable" />
                                    <?php echo form_error('email_responsable','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="">Téléphone du responsable</label>

                                    
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="telephone_responsable" placeholder="Nous indiquer le numéro de téléphone du responsable" />
                                    <?php echo form_error('telephone_responsable','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                            

                            

                            <div class="form-group">
                              <label class="heading">Details sur l'agent recruteur interne</label>

                            </div>
                           
                            <div class="form-group">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                	<label class="default">Nom agent recruteur interne <br /><span>(optional)</span></label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="nom_recruteur_interne" placeholder="Nous indiquer le nom de l'agent recruteur interne" />
                                    <?php echo form_error('nom_recruteur_interne','<font color="red">','</font>'); ?>
                            	</div>
                            </div>

                             <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="default">Prenom(s) agent recruteur interne <br /><span>(optional)</span></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="prenoms_recruteur_interne" placeholder="Nous indiquer le prenom de l'agent recruteur interne" />
                                    <?php echo form_error('prenoms_recruteur_interne','<font color="red">','</font>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 zero-padding-left">
                                    <label class="default">Téléphone de l'agent recruteur<br /><span>(optional)</span></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="telephone_recruteur_interne" placeholder="Nous indiquer le téléphone de l'agent recruteur interne" />
                                    <?php echo form_error('telephone_recruteur_interne  email_recruteur_interne','<font color="red">','</font>'); ?>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 zero-padding-left">
                                    <label class="default">Email de l'agent recruteur<br /><span>(optional)</span></label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="email_recruteur_interne" placeholder="Nous indiquer l'email de l'agent recruteur interne"/>
                                    <?php echo form_error('email_recruteur_interne','<font color="red">','</font>'); ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                             <div class="form-group ">
                            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 zero-padding-left">
                                	<label class="default">Titre ou fonction de l'agent recruteur<br /><span>(optional)</span></label>
                            	</div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                	<input type="text" name="titre_recruteur_interne" placeholder="ous indiquer le titre de l'agent recruteur interne" />
                                    <?php echo form_error('titre_recruteur_interne','<font color="red">','</font>'); ?>
                            	</div>
                            </div>
                           

                            
                            <div class="clearfix"></div>
                             
                             
                            <div class="clearfix"></div>
                            
                            <div class="clearfix"></div>
                            
                             <div class="clearfix"></div>
                            <div class="form-group file-type image_uplaod ">
                             	<label class=""><img id="blah" src="#" alt="your image" /><a href="#" id="removeimg">[remove ]</a></label>
                            </div>
                            
                           

                            
                        </div>
                    </div>	
                </div>
             </span>
        </div>
   <!-- full width section forms -->
   
   <!-- Blue Area -->
   	<div class="container-fluid green-banner job-page">
    	<div class="row">
        	<div class="container main-container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center white-text">
                	<p>

                    Verifier s'il vous plait les informations saisies, une fois la vérifications effectuées ,cliquer sur valider, un de nos agents vous contactera d'ici peu.

                  </p>
                	<button type="submit"  >Valider</button>
                </div>
            </div>
        </div>
    </div>

     <?php echo form_close(); ?> 
   
   <!-- Blue Area -->
<!--Footer Area-->
      
    <?php include("templates/tpl_footer.php"); ?>

    <!--Footer Area--> 
    <!--Last Footer Area---->
    
     <?php include("templates/tpl_copyright.php"); ?>

    <!--Last Footer Area----> 

    <!-- Scripts
================================================== -->
   
    <!--  jQuery 1.7+  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
     <!--Select 2-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
    <!-- Html Editor -->
    <script src="<?php echo base_url(); ?>assets/tinymce/tinymce.min.js"></script>
    <script>
		 tinymce.init({
		  selector: '.textarea',
		   templates: "modern",
		  menubar: false,
		 
		  toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | fontselect | bullist numlist outdent indent | link image',
		});
	</script>
	<!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/parallax.js-1.4.2/parallax.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
   	<!-- Include js plugin -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/owlslider/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script> 
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/counter/jquery.counterup.min.js"></script> 
    <!--Site JS-->
    <script src="<?php echo base_url(); ?>assets/js/webjs.js"></script>
    
    
    
    <!-- Scripts
================================================== -->
        
</body>


</html>