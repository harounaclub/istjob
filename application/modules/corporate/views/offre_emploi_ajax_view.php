 <?php

                        if(isset($list_recherche_offre)){

                          $compt=0;
                           foreach($list_recherche_offre as $itemOffre){
                           $compt=$compt+1;

                           $id_offre=$itemOffre->id_offre;

                            ?>

                            <div class="filter-result 01">
                                <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12 pull-left">
                                    <div class="company-left-info pull-left">
                                        <img src="assets/images/company-logo.png" alt="Photo" /> 
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
                        ?>