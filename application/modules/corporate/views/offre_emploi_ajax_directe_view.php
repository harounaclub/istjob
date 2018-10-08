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