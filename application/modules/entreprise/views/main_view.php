<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:25:54 GMT -->

<head>
    <title>Entreprise</title>

    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="<?php echo base_url(); ?>apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url(); ?>http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main4a76.css?version=4.3.0" rel="stylesheet">
    
</head>

<body class="full-screen with-content-panel menu-position-side menu-side-left">
    <div class="all-wrapper with-side-panel solid-bg-all">
      
      
        <div class="layout-w">
            <!--------------------
START - Mobile Menu
-------------------->
            
            <!--------------------
END - Mobile Menu
-------------------->
    <?php include("templates/tpl_menu_left_mobile.php"); ?>
            <!--------------------
START - Main Menu
-------------------->
   <?php include("templates/tpl_menu_left.php"); ?>
            <!--------------------
END - Main Menu
-------------------->
            <div class="content-w">
 <?php include("templates/tpl_header.php"); ?>
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <label for="">niveaux d'etudes</label>
                                                <option value="Pending">Today</option>
                                                <option value="Active">Last Week </option>
                                                <option value="Cancelled">Last 30 Days</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Statistique générale</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            


                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Tous les candidats</div>
                                        <div class="value"><?php echo $nb_candidat; ?></div>
                                                    <div class="trending trending-up-basic"><span></span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Toutes les offres</div>
                                                    <div class="value"><?php echo $nb_entreprise; ?></div>
                                                    <div class="trending trending-down-basic"><span></span><i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">Tous les clients</div>
                                                    <div class="value"><?php echo $nb_offre; ?></div>
                                                    <div class="trending trending-down-basic"><span></span><i class="os-icon os-icon-arrow-down"></i></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Liste des 7 dernières offres </h6>
                                    <div class="element-box">
                                        <div class="table-responsive">
                                            <table class="table table-lightborder">
                                                <thead>
                                                    <tr>
                                                        <th>Libelle de l'offre</th>
                                                        <th >Status</th>
                                                        <th >Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php

                                                  if(isset($liste_offre_stat)){ 
                                                    
                                                     foreach ($liste_offre_stat as  $value){
                                                        
                                                        $id_offre=$value->id_offre;
                                                        $intitule_offre=$value->intitule_offre;

                                                        $taille_intitule=strlen($intitule_offre);


                                                        if($taille_intitule > 38){

                                                          $intitule_offre_reduit=substr($intitule_offre, 0,38)."...";  


                                                        }else{

                                                            $intitule_offre_reduit=$intitule_offre;


                                                        }
                                                        
                                                     


                                                    ?>

                                                  <tr>
                                                        <td class="nowrap"><?php echo $intitule_offre_reduit; ?> </td>
                                                       
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        </td>
                                                        <td class="text-right"><a href="<?php echo base_url(); ?>administrateur/details_offre/<?php echo $id_offre; ?>" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Voir</a></td>
                                                    </tr>


                                                  <?php }

                                                  }
                                                   ?>
                                                     
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    
                                    <div class="element-box-tp">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------------------
START - Color Scheme Toggler
-------------------->
                       
                        <!--------------------
END - Color Scheme Toggler
-------------------->
                        <!--------------------
START - Demo Customizer
-------------------->
                                
                       
                       
                        <!--------------------
END - Demo Customizer
-------------------->
                        <!--------------------
START - Chat Popup Box
-------------------->
                
                     
                        <!--------------------
END - Chat Popup Box
-------------------->
                    </div>
                    <!--------------------
START - Sidebar
-------------------->
                    <div class="content-panel">
                        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Liens rapides </h6>
                            <div class="element-box-tp">
                                <div class="el-buttons-list full-width">

                                    <a class="btn btn-white btn-sm" href="<?php echo base_url(); ?>administrateur/ajout_offre"><i class="os-icon os-icon-delivery-box-2"></i><span>Ajouter une offre</span></a>

                                    <a class="btn btn-white btn-sm" href="<?php echo base_url(); ?>administrateur/toutes_offres"><i class="os-icon os-icon-window-content"></i><span>Consulter mes offres</span></a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--------------------
END - Sidebar
-------------------->
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/util.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/button.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>js/demo_customizer4a76.js?version=4.3.0"></script>
    <script src="<?php echo base_url(); ?>js/main4a76.js?version=4.3.0"></script>
    <script>
        $( document ).ready(function() {

               $("#exp1").hide();

               var nb_experience=0;
               localStorage.setItem("nb_experience", nb_experience);
               var nulle="";

                $("#date_debut").val(nulle);
                $("#date_fin").val(nulle);




                $("#date_debut_dp").val(nulle);
                $("#date_fin_dp").val(nulle);

                $("#lib_diplome").val(nulle);
              
                $("#commentaire").val(nulle);


                    });

    
//choix experience pro
    $( "#enr" ).click(function(e) {
                    e.preventDefault();




                    var date_debut=$("#date_debut").val();
                    var date_fin=$("#date_fin").val();
                    var commentaire=$("#commentaire").val();
                     var commentaire_reduit=(commentaire.substr(0, 25))+' ...';


                     var nulle="";

                    $( '<div id="exp1" class="alert alert-success col-sm-12" role="alert"><strong># </strong> '+date_debut+' -' +date_fin+' '+commentaire_reduit+' <button class="btn btn-danger" type="submit"> X </button></div>' ).appendTo( $( "#mess_experience_pro" ) );

                    $("#date_debut").val(nulle);
                    $("#date_fin").val(nulle);
                    $("#commentaire").val(nulle);


                    
                });

    $( "#date_debut" ).change(function() {

        var date_d_change=$( "#date_debut" ).val();
        var jour=(date_d_change.substr(3, 2));
        var mois=(date_d_change.substr(0,2));
        var annee=(date_d_change.substr(6, 4));

        var date_normal=jour+'/'+mois+'/'+annee;
        $("#date_debut").val(date_normal);

     
    });

    $( "#date_fin" ).change(function() {

        var date_f_change=$( "#date_fin" ).val();
        var jour=(date_f_change.substr(3, 2));
        var mois=(date_f_change.substr(0,2));
        var annee=(date_f_change.substr(6, 4));

        var date_normal=jour+'/'+mois+'/'+annee;
        $("#date_fin").val(date_normal);

     
    });

//champs diplome





$( "#enr_dp" ).click(function(e) {
                    e.preventDefault();




                    var date_debut=$("#date_debut_dp").val();
                    var date_fin=$("#date_fin_dp").val();
                    var lib_diplome=$("#lib_diplome").val();
                     var lib_diplome_reduit=(lib_diplome.substr(0, 25))+' ...';


                     var nulle="";

                    $( '<div id="exp1" class="alert alert-success col-sm-12" role="alert"><strong># </strong> '+date_debut+' -' +date_fin+' '+lib_diplome_reduit+' <button class="btn btn-danger" type="submit"> X </button></div>' ).appendTo( $( "#mess_diplome" ) );

                    $("#date_debut_dp").val(nulle);
                    $("#date_fin_dp").val(nulle);
                    $("#lib_diplome").val(nulle);


                    
                });

    $( "#date_debut_dp" ).change(function() {

        var date_d_change=$( "#date_debut_dp" ).val();
        var jour=(date_d_change.substr(3, 2));
        var mois=(date_d_change.substr(0,2));
        var annee=(date_d_change.substr(6, 4));

        var date_normal=jour+'/'+mois+'/'+annee;
        $("#date_debut_dp").val(date_normal);

     
    });

    $( "#date_fin_dp" ).change(function() {

        var date_f_change=$( "#date_fin_dp" ).val();
        var jour=(date_f_change.substr(3, 2));
        var mois=(date_f_change.substr(0,2));
        var annee=(date_f_change.substr(6, 4));

        var date_normal=jour+'/'+mois+'/'+annee;
        $("#date_fin_dp").val(date_normal);

     
    });
  

    

    

    </script>
</body>

</html>