<!DOCTYPE html>
<html lang="en">


<head>
    <?php include("templates/tpl_head.php"); ?>
  </head>

<body>
	<!-- Header Image Or May be Slider-->
   <br><br><br><br>
    	<div id="header" class="container-fluid pages">
              <div class="row">
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <?php include("templates/tpl_menutop.php"); ?>
                 </div>
                 
                
            </div>
       	</div>
	<!-- Header Image Or May be Slider-->
     
    <!-- Page Title-->

    <?php
        if(isset($info_offre)){

           foreach($info_offre as $it_offre){ ?>


         
    	<div class="container-fluid page-title">
			<div class="row green-banner">
            	<div class="container main-container">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                		<h3 class="white-heading"><?php echo $it_offre->intitule_offre; ?></h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right" >
                		<div class="favourite"><i class="fa fa-star-o"></i><span>Date de publication : <?php echo $it_offre->date_debut_offre; ?></span></div>
                    </div>
                </div>
            </div> 
            
            <div class="row dashboard">
            	<div class="container main-container gery-bg">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  no-padding user-data">
                        <div class="seprator ">
                            <div class="no-padding user-image"><img src="assets/images/job-admin.png" alt=""/></div>
                            <div class="user-tag">Poste <span><?php echo $it_offre->intitule_offre; ?></span></div>
                            <div class="job-status"><span class="label job-type job-partytime">
                               <?php 

                                          if($this->corporate_model->liste_niveauEtude_par_offre($id_offre)){

                                          $liste_id_niveau=$this->corporate_model->liste_niveauEtude_par_offre($id_offre);

                                            foreach($liste_id_niveau as $itemli){

                                               $id_niveau_etude=$itemli->id_niveau_etude;

                                               $niveau=$this->corporate_model->get_libelle_offre($id_niveau_etude);

                                               echo $niveau." , ";

                                            }


                                          }

                                           ?>
                            </span></div>
                        </div>
                        <div class="seprator">
                            <div class="user-tag"><label>Nombre d'annee d'experience<span><?php

                              $nb_annee_exp=$it_offre->nb_experience; 
                              if($nb_annee_exp == 0){

                               echo "Non specifé";
                              }else{

                                echo $it_offre->nb_experience; 
                              }
                             
                             ?></span></label></div>
                       	</div>
                         <div class="seprator">
                            <div class="user-tag"><label>Date limite<span><?php echo $it_offre->date_fin_offre; ?></span></label></div>
                       	</div>
                         <div class="seprator">
                            <div class="user-tag"><label>Localisation<span>
                              <?php 

                              $lieu_travail=$it_offre->lieu_travail;
                              if($lieu_travail ==""){

                                echo "Non specifé";
                              }else{

                                echo $it_offre->lieu_travail; 
                              }


                              
                              ?>
                                
                              </span></label></div>
                       	</div>
                	</div>
            </div>
            </div>        
        </div>
    <!--Page Title-->
    
    <!-- Job Data -->
  		<div class="container-fluid jpd-data white-bg">
        	<div class="row">
            	<div class="container main-container-job">
                	<div class="col-lg-9 col-md-9 col-sm-8">
                    	<div class="post-image">
                        	<img src="assets/images/job-image.png" alt=""/>
                        </div>
                        <div class="content">
                        	<h3>Description du profil du poste</h3>
                            <p><?php echo $it_offre->profil_poste; ?>.</p>
                       
                        <h2>Mission:</h2>
                        <?php echo $it_offre->mission; ?>
                       <?php 
                              $dossier=$it_offre->dossier_candidature; 

                              if($dossier != ""){ ?>
                               <h3>Dossier de candidature :</h3>
                        <?php echo $it_offre->dossier_candidature; ?>


                             <?php }

                       ?>
                       
                        <?php
                           $desc_autre=$it_offre->description_offre; 
                           if($desc_autre != ""){ ?>

                            <h3> Autre description de l'offre</h3>
                        <?php echo $it_offre->description_offre; ?>


                           <?php }
                         ?>
                       
                        
                        
                         
                         </div>

                         
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						<div class="widget w1">
                        	<ul>
                            	<li>
                                	<a href="#" data-toggle="modal" data-target="#myModal"><span class="label job-type apply-job">POSTULER</span></a>
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <!-- Popup Model-->
                                           <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h3 class="modal-title">Postuler pour cette offre<span><?php echo $it_offre->intitule_offre; ?></span></h3>
                                                    </div>
                                                    <div class="modal-body">

                                                  <?php echo form_open('corporate/inscription_candidat'); ?>



                                                      
                                                       <div class="form-group">
                                                            <label>E-mail</label>
                                                            
                                                             <input type="hidden" name="id_offre" value="<?php echo $id_offre; ?>" />
                                                            <input type="email" name="email"/>
                                                            <?php echo form_error('email','<font color="red">','</font>'); ?>
                                                       </div>
                                                       <div class="form-group">
                                                            <label>Mot de passe</label>
                                                            <input type="password" name="pass"/>
                                                            <?php echo form_error('pass','<font color="red">','</font>'); ?>
                                                       </div>

                                                       <div class="form-group">
                                                            <label> Confirmer le mot de passe</label>
                                                            <input type="password" name="repass"/>
                                                            <?php echo form_error('repass','<font color="red">','</font>'); ?>
                                                       </div>
                                                       
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <span class="label job-type apply-job">
                                                          <input id="lien_postuler" type="submit" value="S'inscrire">

                                                        </span>

                                                        <span id="mess_patienter" class="label job-type submit-resume">Veuiller patienter svp ...</span>

                                                        <?php echo form_close(); ?>
                                                        <i>OU</i>
                                                        <a href="<?php echo base_url();?>candidat"><span class="label job-type submit-resume">Se connecter</span></a>
                                                       
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                         <!-- Popup Model-->
                               		
                                     
                                </li>
                            	<li><img src="assets/images/widget1image.png" alt=""/></li>
                            </ul>
                                                  
                        </div>
                          <!-- Modal -->
  
                        <div class="widget w2">
                        	<div class="subscribe">
                                <form>
                                <h3>Obtenir des offres similaires via email</h3>
                                    <div class="form-group">
                                        <input type="email" placeholder="Entrer votre email" name="email"/>
                                        <button type="submit" class="btn btn-print bg-blue">Me motifier </button>
                                    </div>
                                </form>
                                <a href="#"><i class="fa fa-print" aria-hidden="true"></i>Print Job</a>
                            </div>
                            
                        </div>
                        
                                            
                    </div>
                </div>
            </div>
        
        </div>

         <?php }


        }
     ?>
    <!--Job Data-->
    
    <!-- ob Recoended-->
 	
    <!--Job Recoended-->
    
    <!--Blue Secions --> 
    <div class="container-fluid green-banner" style="background:#12cd6a">
                <div class="row">
                    <div class="container main-container v-middle" id="style-2">
                        <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12  ">
                            <h3 class="white-heading">Avez-vous une question ?<span class="call-us">envoyez-nous un email ou  <strong>appeler au (+225) 21 25 27 01 / 21 25 17 26</strong></span></h3>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url(); ?>corporate/nous_contacter" class="btn btn-getstarted bg-red">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
    <!--blue Section -->
    
<!--Footer Area-->
   		<?php include("templates/tpl_footer.php"); ?>
    <!--Footer Area--> 
    <!--Last Footer Area---->
    <?php include("templates/tpl_copyright.php"); ?>
    <!--Last Footer Area----> 
 <?php include("templates/tpl_js.php"); ?>
    <!-- Scripts
================================================== -->

<script type="text/javascript">
  $(function() {
    console.log( "ready!" );
    $( "#mess_patienter" ).hide();
});


$( "#lien_postuler" ).click(function() {
  
  $( "#lien_postuler" ).hide();
  $( "#mess_patienter" ).show();

});
</script>
        
</body>


</html>