<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from deximlabs.com/dexjobs/light/browse-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 14:55:23 GMT -->
<head>
    <?php include("templates/tpl_head.php"); ?>
     
  </head>

<body class="title-image joblist">

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
     
    <!-- Page Title-->
    	<div class="container-fluid blue-banner page-title bg-image">
			<div class="row section-title">
            	<div class="container main-container">
                	<div class="col-lg-8 col-md-8 col-sm-8">
                		<h3 class="image-heading">Tous les offres pour <span style="color: blue;"> <?php echo $categorie_professionnelle; ?> </span></h3>
                    </div>
                    
                </div>
            </div>  
            <div class="row section-jobcategories">
                <div class="container main-container">
                	
                </div>
            </div>  
                 
        </div>
    <!-- Page Title-->
  
  	<!-- Job Categories Filters -->
       
  	<!-- Job Categories Filters -->
    <!-- Job Results -->
    	<div class="container main-container">
          	<div class="jobs-result"> 
                <div class="col-lg-12">
                        
                    
                    </div>
                        <!--Search Result 01-->
                        <div class="col-lg-12">
                        <?php


                        if(isset($liste_id_offre)){

                              foreach($liste_id_offre as $liste){
                                 
                                 $id_offre=$liste;

                                 $infos_offre=$this->corporate_model->offre_par_id($id_offre);

                                 foreach($infos_offre as $itemOffre){ ?>


                            <div class="filter-result 01">
                                <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12 pull-left">
                                    <div class="company-left-info pull-left">
                                        <img src="<?php echo base_url(); ?>assets/images/company-logo.png" alt="Photo" /> 
                                    </div>
                                    <div class="desig">
                                        <a href="<?php echo base_url(); ?>corporate/details_emploi/<?php echo $id_offre; ?>"><h3><?php echo $itemOffre->intitule_offre; ?> </h3></a>
                                        <h4>
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
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5 col-sm-8 col-xs-12 pull-right">
                                    <div class="pull-right location">
                                        <p>IST job</p>
                                    </div>
                                    <div class="data-job">
                                    
                                        <span class="label job-type job-contract ">Contrat</span>
                                    </div>
                                    
                                </div>
                            </div> 



                                 <?php }

                             
                              }


                        }

                       
                        ?> 

                        <?php

                        if($compter_offre ==0){ 


                        echo "<center><h1>Aucune offre disponible pour la catégorie professionnelle </h1></center>";


                        }
                        ?>             
                            
                         </div> 
                         <!--Search Result 01-->
                    </div>
         </div>
	<!-- Job Results -->
    
    <!--Blue Secions --> <div class="container-fluid green-banner">
              <?php include("templates/avezvous_question.php"); ?>
            </div>
    <!--Footer Area-->
      
    <?php include("templates/tpl_footer.php"); ?>

    <!--Footer Area--> 
    <!--Last Footer Area---->
    
     <?php include("templates/tpl_copyright.php"); ?>

    <!--Last Footer Area----> 
   
<?php include("templates/tpl_js.php"); ?>


        

        
</body>


</html>