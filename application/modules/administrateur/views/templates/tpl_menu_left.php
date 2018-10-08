            <div class="menu-w menu-activated-on-hover menu-has-selected-link selected-menu-color-light color-scheme-dark color-style-bright sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over">
                <div class="logo-w">
                    <a class="logo" href="index-2.html">
                        <div class="logo-element"></div>
                        <div class="logo-label">ISTJOB Admin</div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="<?php echo base_url(); ?>img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"> <?php
                                         $nom_prenom=$this->session->userdata('nom_prenom');
                                        if(isset($nom_prenom)) echo $nom_prenom; 
                                        ?></div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="" src="<?php echo base_url(); ?>img/avatar1.jpg"></div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">
                                        <?php
                                         $nom_prenom=$this->session->userdata('nom_prenom');
                                        if(isset($nom_prenom)) echo $nom_prenom; 
                                        ?>
                                    </div>
                                    <div class="logged-user-role">Administrateur</div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                                
                                <li>
                                    <a href="<?php echo base_url(); ?>administrateur/logout"><i class="os-icon os-icon-signs-11"></i><span>Se déconnecter</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-actions">
                    <!--------------------
START - Messages Link in secondary top menu
-------------------->
                    
                    <!--------------------
END - Messages Link in secondary top menu
-------------------->
                    <!--------------------
START - Settings Link in secondary top menu
-------------------->
                   
                    <!--------------------
END - Settings Link in secondary top menu
-------------------->
                    <!--------------------
START - Messages Link in secondary top menu
-------------------->
                  
                    <!--------------------
END - Messages Link in secondary top menu
-------------------->
                </div>
                
                <h1 class="menu-page-header">Page Header</h1>
                <ul class="main-menu">
                    <li class="sub-header"><span>Général</span></li>
                    <li class="selected">
                        <a href="<?php echo base_url(); ?>administrateur/tableau_bords">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Tableau de bords</span></a>
                        
                    </li>
                    <li class="sub-header"><span>Offre(s) d'emplois</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestions des offres d'emplois</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des offres d'emplois</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">

                                    <li><a href="<?php echo base_url();?>administrateur/ajout_offre">Ajouter une offre d'emploi</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/toutes_offres">Toutes les offres d'emploi</a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">
                                     

                                     <li><a href="<?php echo base_url();?>administrateur/offre_encours">Offre(s) d'emploi en cours ...</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/offre_annulee">Offre(s) d'emploi annulées</a></li>

                                    <li><a href="<?php echo base_url();?>administrateur/liste_offres_postee">Liste des offres d'emplois postées</a></li>
                                    
                          
                            </ul>


                               
                            </div>
                        </div>
                    </li>

                    

                    <li class="sub-header"><span>Candidatures</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestions des candidatures</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des candiddats</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/liste_candidats">Tous les candidats</a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/candidat_offre">candidat(s)  par offre(s)</a></li>
                                   
                                    <!-- <li><a href="<?php echo base_url();?>administrateur/trie_administrateur">Creer une selection de candidat</a></li> -->
                                    
                          
                            </ul>


                               
                            </div>
                        </div>
                    </li>



                    <li class="sub-header"><span>RECRUTEMENTS</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestions recrutements</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des recrutement</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/tous_inscrits">Tous les inscrits</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/tous_postulant">Tous les postulants</a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/candidat_par_offre"> candidat(s) par offre</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/liste_candidat_offre_selectionne">candidat(s) selectionné(s) par offre</a></li>
                                    
                          
                            </ul>
                            <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/interview_administrateur">Interview candidat par offre </a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/enrollement_view">candidat(s) retenus par offre</a></li>
                                    
                          
                            </ul>


                               
                            </div>
                        </div>
                    </li>

                    <li class="sub-header"><span>INTERVIEWS</span></li>
                    <li class="">
                        <a href="<?php echo base_url();?>administrateur/ajout_interview">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Créer une interview</span></a>
                        
                    </li>



                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Listes des Interviews</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des Interviews</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/interwiew_attente">Interviews en attente  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/interwiew_execute">Interviews en executées  </a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/interwiew_annule">Interviews en annulées </a></li>
                                    
                          
                            </ul>
                  
                            </div>
                        </div>
                    </li>

                   <!--  <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Creer un postulant</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des postulants</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_postulant"> Ajouter  un postulant  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_postulant">Liste des postulants</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/liste_postulant_interview"> Liste des postulants par interview</a></li>
                                    
                          
                            </ul>
                            


                               
                            </div>
                        </div>
                    </li> -->

                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Rapport</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des Rapports</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/rapport_interview_en_attente">Liste des Rapports</a></li>
                            
                            </ul>
                          
                            </div>
                        </div>
                    </li>
                  
              




                     <li class="sub-header"><span>CLIENTS</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestions des Clients</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des Clients</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_client">Ajouter un client</a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_client">Liste des clients</a></li>
                                   
                                    
                                    
                          
                            </ul>


                               
                            </div>
                        </div>
                    </li>

                    <li class="sub-header"><span>Site internet</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestions site internet</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion site internet </div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/informationGenerale"> Informations générales  </a></li>
                                 </ul>
                            <ul class="sub-menu">
                                      <li><a href="<?php echo base_url();?>administrateur/quiSommeNous">Qui est istjobs ?</a></li>

                                     <li><a href="<?php echo base_url();?>administrateur/queFaisonsNous">Que faisons nous ?  </a></li>
                                 </ul>
                            <ul class="sub-menu">
                                      <li><a href="<?php echo base_url();?>administrateur/listeTemoignage"> Temoignages  </a></li>

                                      <li><a href="<?php echo base_url();?>administrateur/listeContacterNous">Liste contacter nous </a></li>
                               </ul>
                            </div>
                        </div>
                    </li>

                    




                    <li class="sub-header"><span>PARAMETRES</span></li>
                    


                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Niveaux d'etudes </span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des niveaux</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_niveaux">Ajouter un niveau  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_niveaux">Listes des niveaux  </a></li>
                                   
                                   
                                    
                          
                            </ul>
                  
                            </div>
                        </div>
                    </li>

                   <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Categories professionnelles</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des categories professionnelles</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_categorie_professionnelle"> Ajouter une categories professionnelle  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_categorie_professionnelle">Liste des categories professionnelles</a></li>
                 
                          
                            </ul>
                            


                               
                            </div>
                        </div>
                    </li>


                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Type de contrat</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des Types de contrat</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_type_contract"> Ajouter un types de contrat  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_type_contract">Liste des types de contrat</a></li>
                 
                          
                            </ul>
                            


                               
                            </div>
                        </div>
                    </li>

                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Diplômes</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des diplômes</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_dipome"> Ajouter  un diplômes  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_diplome">Liste des diplômes</a></li>
                            
                            </ul>
                          
                            </div>
                        </div>
                    </li>

                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Utilisateurs</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu gestion des utilisateurs</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administrateur/ajout_utlisateur"> Ajouter  un utilisateur  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>administrateur/liste_utlisateur">Liste des utilisateurs</a></li>
                            
                            </ul>
                          
                            </div>
                        </div>
                    </li>
                  





                </ul>
                
            </div>