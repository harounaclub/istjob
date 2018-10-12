<!DOCTYPE html>
<html lang="en">


<head>
     <?php include("templates/tpl_head.php"); ?>
  </head>

<body class="title-image joblist style2">
   <div id="bloc_principale">
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
      <div class="container-fluid green-banner page-title bg-image">
      <div class="row section-title">
              <div class="container main-container">
                  <div class="col-lg-8 col-md-8 col-sm-8">
                    <h3 class="image-heading">Toutes les offres d'emplois directes ,CDD ,CDI ,etc ...</h3>
                    </div>
                   
                </div>
            </div>  
            <div class="row section-jobcategories">
               
            </div>  
                 
        </div>
      </div>
    <!-- Page Title-->
  
    <!-- Job Categories Filters -->
       <div class="jobs_filters">
                    <div class="container">
                         
                     

                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                                <div class="form-group">
                                    <input class="zone_saisi_emploi" type="text" class="form-control" placeholder="Saissisez l'emploi de vos rêves,Mot clé, titre de l'emploi ou competences, etc ...">
                                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                                </div>
                                <span>e.g. Responsable ressource humaine</span>
                            </div>
                        
                         
                         
                           
                            
                    </div>
         
          </div>
            </div>
    <!-- Job Categories Filters -->
    <!-- Job Results -->
      <div class="container main-container">
            <div class="col-lg-12">
              <div class="jobs-result"> 
                <div class="tab_filters">
                        <div class="col-lg-4">
                            <h5>Offres recentes</h5>
                            <h4>Categories <span> </span></h4>
                         </div>
                        
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 filters pull-right filter-category">
                            <ul class="nav nav-pills">
                                      <?php 

                                           if(isset($liste_5_categorie)){


                                             foreach($liste_5_categorie as $item_categorie){ ?>

                                             <li><a href="<?php base_url(); ?>corporate/emploi_par_categorie/<?php echo $item_categorie->id_categorie_pro; ?>"><?php echo $item_categorie->libelle_categorie; ?></a></li>

                                            <?php }

                                           }
                                          ?>
                                      
                                      <li class="all active"><a href="#">Tous</a></li>
                            </ul>
                        </div>
                 </div>
                        <!--Search Result 01-->

                        <div class="jobs list-style2">

                           <span id="current_job_result"></span>
                            
                          <div id="default_job_result">

                             <?php

                                if(isset($liste_offres)){

                                  $compt=0;
                                   foreach($liste_offres as $itemOffre){
                                   $compt=$compt+1;

                                   $id_offre=$itemOffre->id_offre;

                                    ?>
                                    <div class="filter-result 01">
                                <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="company-left-info pull-left">
                                        <img src="assets/images/company-logo.png" alt=""/>
                                    </div>
                                    <div class="desig">
                                        <a href="<?php echo base_url(); ?>corporate/details_emploi/<?php echo $id_offre; ?>"><h3><?php echo $itemOffre->intitule_offre; ?></h3></a>
                                        <h4>  <b style="color: blue; font-weight: bold;">Courte description :</b><span style="color: black;"> <?php echo strip_tags(substr($itemOffre->profil_poste, 0,200)); ?></span> ...</h4>
                                    </div>
                                    
                                     <div class="job-footer">
                                      <span class="label job-type job-fulltime ">
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
                                           <?php 

                                          if($this->corporate_model->liste_typeContrat_par_offre($id_offre)){

                                          $liste_id_typeContrat=$this->corporate_model->liste_typeContrat_par_offre($id_offre);

                                            foreach($liste_id_typeContrat as $itemli){

                                               $id_type_contrat=$itemli->id_type_contrat;

                                               $type_contrat=$this->corporate_model->get_libelle_offre_parTypeContrat($id_type_contrat);

                                               echo $type_contrat." , ";

                                            }


                                          }

                                           ?>  
                                      </span>
                                        <ul>
                                          <li><?php echo $itemOffre->lieu_travail; ?></li>
                                            <li> Date limite :<?php echo $itemOffre->date_fin_offre; ?></li>
                                            <li><?php echo $itemOffre->nb_experience; ?>  </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                          <!-- <div class="filter-result 01">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="company-left-info pull-left">
                                        <img src="assets/images/company-logo.png" alt=""/>
                                    </div>
                                    <div class="desig">
                                        <a href="<?php echo base_url(); ?>corporate/details_emploi/<?php echo $id_offre; ?>"><h3><?php echo $itemOffre->intitule_offre; ?></h3></a>
                                        
                                    </div>
                                    
                                    <div class="job-footer">
                                      <span class="label job-type job-partytime ">
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
                                           <?php 

                                          if($this->corporate_model->liste_typeContrat_par_offre($id_offre)){

                                          $liste_id_typeContrat=$this->corporate_model->liste_typeContrat_par_offre($id_offre);

                                            foreach($liste_id_typeContrat as $itemli){

                                               $id_type_contrat=$itemli->id_type_contrat;

                                               $type_contrat=$this->corporate_model->get_libelle_offre_parTypeContrat($id_type_contrat);

                                               echo $type_contrat." , ";

                                            }


                                          }

                                           ?>  
                                        </span>
                                        <ul>
                                          <li><?php echo $itemOffre->lieu_travail; ?></li>
                                            
                                            <li><?php echo $itemOffre->nb_experience; ?> an d'experience  </li>
                                        </ul>

                                    </div>

                                </div>
                                
                            </div> --> 

                            <?php }


                        }
                        ?>
                            <!--jobs result--> 
                           

              <div class="clearfix"></div>
                                        
                            </div>
                         </div> 
                         <!--Search Result 01-->
                    </div>
            </div>
         </div>
  <!-- Job Results -->
    
    <!--Blue Secions --> <div class="container-fluid green-banner">

       <?php include("templates/avezvous_question.php"); ?>
                
            </div>
    <!--blue Section -->
    
<!--Footer Area-->
      
    <!--Footer Area--> 
    <!--Last Footer Area---->
     <?php include("templates/tpl_footer.php"); ?>

   
     <?php include("templates/tpl_copyright.php"); ?>
    <!--Last Footer Area----> 
    
        <!-- Scripts
================================================== -->
    <!--  jQuery 1.7+  -->
     <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    
     <!--Select 2-->
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <!-- Html Editor -->
    <script src="assets/tinymce/tinymce.min.js"></script>
  <!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="assets/parallax.js-1.4.2/parallax.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Include js plugin -->
    <script type="text/javascript" src="assets/owlslider/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script> 
    <script type="text/javascript" src="assets/counter/jquery.counterup.min.js"></script> 
    <!--Site JS-->
     <script src="assets/js/webjs.js"></script>

    <script type="text/javascript">

     
      $( document ).ready(function() {

       $("#bloc_principale").show();

       
        
          console.log( "ready!" );
      });
      

      $('.zone_saisi_emploi').on('input', function(){


      var recherche_item=$('.zone_saisi_emploi').val();
      var longueur_recherche=$('.zone_saisi_emploi').val().length;


      

      
      if(longueur_recherche === 0){

       // $( "#zone_rech_im" ).empty();
        $("#bloc_principale").show();
        $("#default_job_result").show();
        $( "#current_job_result" ).empty();
        $( "#current_job_result" ).hide();
        
        $("html, body").animate({ scrollTop: 0 }, "slow");

      }else{

        $("#bloc_principale").hide();
        
         $("#default_job_result").hide();
        

        $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>corporate/ajax_recherche_offre_emploi_directe',
                                           dataType:'html',
                                           data: {
                                               
                                               recherche_item:recherche_item,
                                              
                                               
                                    
                                           },
                                           success: function(response) {

                                              //zone_rech_im
                                              

                                              if(response =="" || response ==0){

                                               console.log("espace vide");
                                                 $( "#current_job_result" ).empty();
                                                $( "#current_job_result" ).hide();

                                                $("#default_job_result").show();
                                                


                                              }else{
                                                
                                                  console.log("espace non vide");
                                                
                                                $("#default_job_result").hide();

                                                $( "#current_job_result" ).empty();
                                                 $( "#current_job_result" ).show();

                                                $( "#current_job_result" ).append( response );


                                              }
                                              
                                               
                                               console.log(response);

                                               
                                               

                                              

                                           },
                                            complete: function(){
                                                
                                               
                                               
                                            },
                                            beforeSend: function(){
                                                
                                                
                                              

                                            },
                                           error: function (xhr, ajaxOptions, thrownError) {
                                               alert(xhr.status);
                                               alert(thrownError);
                                           }

              });

      }


      
     


    });
</script>
        
</body>


</html>