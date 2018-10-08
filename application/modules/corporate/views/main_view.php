<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IST JOB</title>
    <link rel="icon" href="assets/images/favicon.png">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--Custom template CSS-->
     <link href="style.css" rel="stylesheet">
     <!--Custom template CSS Responsive-->
     <link href="assets/webcss/site-responsive.css" rel="stylesheet">
       <!--Animated CSS -->
     <link href="assets/webcss/animate.css" rel="stylesheet">
     <!--Owsome Fonts -->
     <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="assets/owlslider/owl-carousel/owl.carousel.css">
     
    <!-- Default template -->
    <link rel="stylesheet" href="assets/owlslider/owl-carousel/owl.template.css">


  </head>
    <body>
      <div id="loadessr"><div id="loader"></div></div>
   	<!-- Header Image Or May be Slider-->
		  <div id="header" class="container-fluid home">
              <div class="row">
                <div id="bloc_principale">
                <div class="header_banner">
                       <div class="slides">
                          <div class="slider_items parallax-window"  data-parallax="scroll" data-image-src="assets/images/bgheader.png"></div>
                       </div>

                       


                 </div>
             <!-- Header Image Or May be Slider-->

             
                <div class="top_header">
                    
                     <?php include("templates/tpl_menutop.php"); ?>
                                    
                    <div class="container slogan">
                        <div class="col-lg-12">
                          <h1 class="animated fadeInDown">Booster votre carrière ?</h1>
                            <h3><span>Rejoignez-nous </span>& Explorer nos offre(s) d'emploi(s), de stage et autres ...</h3>
                            <br><br><br><br><br><br><br>
                          <a href="<?php echo base_url(); ?>corporate/toutes_les_offres">Nous avons <span><?php if(isset($nb_offre)) echo $nb_offre; ?></span> offres d'emploi pour vous !</a>
                        </div>
                    
                    </div>
                    
                 </div>
            </div>
                 
            <div class="jobs_filters">
                    <div class="container">
                          <form class="" action="http://deximlabs.com/dexjobs/dark/index.html">
                     

                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                                <div class="form-group">
                                    <input class="zone_saisi_emploi" type="text" class="form-control" placeholder="Saissisez l'emploi de vos rêves,Mot clé, titre de l'emploi ou competences, etc ...">
                                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                                </div>
                                <span>e.g. Responsable ressource humaine</span>
                            </div>
                        
                         
                         
                           
                            </form>
                    </div>
         
          </div>
            </div>
       	</div>
    <!-- Header Section -->
	<!--maine container Section -->
         <div class="container main-container-home">
           
           <div class="jobs_results">
                <!--Filters Category -->
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
                <!-- Filters Category --> 

                  <div class="jobs-result"> 
                        <!--Search Result 01-->
                        <div class="col-lg-12">

                          <div id="vide">
                            <center>
                            <h1>Aucun resultat ne correspondant à votre recherche</h1>
                          </center>
                          </div>
                           <span id="current_job_result"></span>
                            <span id="default_job_result">   

                        <?php

                        if(isset($liste_6_dernieres_offre)){

                          $compt=0;
                           foreach($liste_6_dernieres_offre as $itemOffre){
                           $compt=$compt+1;

                           $id_offre=$itemOffre->id_offre;

                            ?>

                            <div class="filter-result 01">

                              <div class="col-lg-2 pull-left">

                                <div class="company-left-info pull-left">
                                        <img src="assets/images/company-logo.png" alt="Photo" width="100px" /> 
                                  </div>
                                
                              </div>
                                <div class="col-lg-8 col-md-7 col-sm-9 col-xs-12 pull-left">
                                    
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

                                           ?><b style="color: black; font-weight: bold;">Nbre d'année d'expérience :</b> <?php echo $itemOffre->nb_experience; ?>,&nbsp; <b style="color: black; font-weight: bold;">date limite :</b> <?php echo $itemOffre->date_fin_offre; ?>,&nbsp;<b style="color: black; font-weight: bold;">lieu de travail :</b> <?php echo $itemOffre->lieu_travail; ?> 
                                        </h4>
                                        <h4> 
                                          <br>
                                          <b style="color: blue; font-weight: bold;">Courte description :</b><span style="color: black;"> <?php echo strip_tags(substr($itemOffre->profil_poste, 0,200)); ?></span> ... 
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-5 col-sm-8 col-xs-12 pull-right">
                                    <div class="pull-right location">
                                        <p>IST job</p>
                                    </div>
                                    <div class="data-job">
                                    
                                        <span class="label job-type job-contract ">
                                          
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
                                    </div>
                                    
                                </div>
                            </div> 


                          <?php }


                        }
                        ?>
                        
                            <!--jobs result--> 
                            
                            <!--jobs result--> 
                           
                            <!--jobs result--> 
                           
                            <!--jobs result--> 
                          
              <div class="clearfix"></div>
                            <div class="col-lg-12">
                            <a href="<?php echo base_url(); ?>corporate/toutes_les_offres" class="btn btn-default"  id="load_more"  aria-haspopup="true" aria-expanded="false">   Voir plus d'offres 
                                        </a>     </div> 
              </span>               
                            
                         </div> 
                         <!--Search Result 01-->
                    </div>
           </div>
        
        </div>
    <!--main container Section -->  
    <!---full width sectio fulid-->
    	<div class="container-fluid bluesection">
        	<div class="row">
        	<div class="container main-container">
            	<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 blue-halef">
                	<h3>ISTJOB</h3>
                    <p>Votre partenaire leader dans le domaine de l'emploi ,tous secteur confondus.</p>
                    
                </div>
                
            </div>
            
            <div class="container main-container countjobs" id="cjobs">
            	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                	   <ul id="counter">
                       		<li><div class="count"><div class="num">15</div>k</div><span>Offres d'emplois</span></li>
                            <li><div class="count"><div class="num">4982</div></div><span>Candidats</span></li>
                            
                            <li><div class="count"><div class="num">95</div>%</div><span>Client entreprise satisfait</span></li>
                       </ul>                 
                </div>
                
            </div>
        </div>
        </div>
    <!---full width sectio fulid-->
    <!--Plan and Prices Tags-->
    	
    <!-- Plan and Prices Tags-->
    <!--Recent Post-->

    <!--Recent Post-->
    <!-- Green Banner-->
    	<div class="container-fluid green-banner">
        <br>
        	<div class="row">
            <div class="container main-container v-middle">
            	<div class="col-lg-10 col-md-8 col-sm-8 col-xs-12 ">
                	<h3 class="white-heading">Besoin de personnel <span>cliquer ici pour</span> </h3>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-left">
                	<a href="<?php echo base_url(); ?>corporate/poster_offre" class="btn btn-getstarted bg-red">Publier une offre</a>
                </div>
            </div>
            </div>
        </div>
    <!-- Green Banner-->
    <!-- Testimionals Slider-->
    	<div class="container-fluid testimionals" style="background:url(assets/images/testbg.png);">
			<div class="row">
            <div class="container main-container">
            	<div class="col-lg-12">
                    <div id="testio" class="owl-carousel owl-template">
                      <!--Slides-->
                      <div class="item">
                      		<img src="assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Harouna Traore</h5>
                                <span>Chef d'entreprise,expert du web et du mobile</span>
                                <p>ISTJOB propose une approche simple et efficace pour le processus de recrutement.</p>
                            </div>
                       </div>

                       <div class="item">
                          <img src="assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                              <h5>Kone Boualamane</h5>
                                <span>Chef d'entreprise,expert du web et du mobile</span>
                                <p>ISTJOB propose une approche simple et efficace pour le processus de recrutement.</p>
                            </div>
                       </div>
                      
                     
                     
                    </div>
                </div>
            </div>     
        </div>
        </div>
    <!-- Testimionals Slider-->
    <!-- Clients Slider-->
    	<div class="container-fluid clients">
        <div class="row">
            <div class="container main-container">
                    <div class="col-lg-12">
                        <ul>
                            <li><img src="assets/images/client1.png" alt="Photo" /> </li>
                            <li><img src="assets/images/client2.png" alt="Photo" /> </li>
                            <li><img src="assets/images/client3.png" alt="Photo" /> </li>
                            <li><img src="assets/images/client4.png" alt="Photo" /> </li>
                            <li><img src="assets/images/client1.png" alt="Photo" /> </li>
                        </ul>
					</div>
                </div>
			</div>
        </div>
	<!-- Client Slider-->  
<!--Footer Area-->
   		
    <?php include("templates/tpl_footer.php"); ?>

   
     <?php include("templates/tpl_copyright.php"); ?>

    <!--Last Footer Area----> 

<!-- Scripts
================================================== -->
  	<!--  jQuery 1.7+  -->
     <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
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

     <script>

      $(window).load(function() {

         $("#loadessr").fadeOut();

      });

            
      $( document ).ready(function() {

        $("#bloc_principale").show();
        $("#vide").hide();
        
          console.log( "ready!" );

            $("#testio").owlCarousel({
 
              autoPlay: 3000, //Set AutoPlay to 3 seconds
         
              items : 4,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3]
         
          });
      });
      

      $('.zone_saisi_emploi').on('input', function(){


      var recherche_item=$('.zone_saisi_emploi').val();
      var longueur_recherche=$('.zone_saisi_emploi').val().length;

      
      if(longueur_recherche === 0){

       // $( "#zone_rech_im" ).empty();
        $("#bloc_principale").show();
        $("#default_job_result").show();
        $("#vide").hide();
       
        $("html, body").animate({ scrollTop: 0 }, "slow");

      }else{

        $("#bloc_principale").hide();
        $( "#default_job_result" ).empty();
         $("#default_job_result").hide();
        

        $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>corporate/ajax_recherche_offre',
                                           dataType:'html',
                                           data: {
                                               
                                               recherche_item:recherche_item,
                                              
                                               
                                    
                                           },
                                           success: function(response) {

                                              //zone_rech_im


                                              console.log(response);


                                              if(response ==""){

                                                $("#vide").show();

                                                $("#default_job_result").show();
                                                 $( "#current_job_result" ).empty();
                                                $( "#current_job_result" ).hide();


                                              }else{
                                                $("#vide").hide();

                                                 $( "#default_job_result" ).empty();

                                                $("#default_job_result").hide();

                                                $( "#current_job_result" ).empty();

                                                $( "#current_job_result" ).append( response );


                                              }
                                              
                                               
                                               //console.log(response);

                                               
                                               

                                              

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