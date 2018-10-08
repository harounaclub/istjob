<div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="index-2.html"><img src="img/logo.png"><span>ISTJOB</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="<?php echo base_url(); ?>img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"><?php 

                            $nom_prenom=$this->session->userdata('nom_prenom');
                            if(isset($nom_prenom)) echo $nom_prenom; 
                                ?></div>
                            <div class="logged-user-role">entreprise</div>
                        </div>
                    </div>
                    <!--------------------
START - Mobile Menu List
-------------------->
                    <ul class="main-menu">
                    <li class="sub-header"><span>Général</span></li>
                    <li class="selected">
                        <a href="<?php echo base_url(); ?>entreprise/tableau_bords">
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

                                    <li><a href="<?php echo base_url();?>entreprise/ajout_offre">Ajouter une offre d'emploi</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>entreprise/toutes_offres">Toutes les offres d'emploi</a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">
                                     

                                     <li><a href="<?php echo base_url();?>entreprise/offre_encours">Offre(s) d'emploi en cours ...</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>entreprise/offre_annulee">Offre(s) d'emploi annulées</a></li>
                                    
                          
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

                                     <li><a href="<?php echo base_url();?>entreprise/tous_inscrits">Tous les inscrits</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>entreprise/tous_postulant">Tous les postulants</a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>entreprise/candidat_par_offre"> candidat(s) par offre</a></li>
                                   
                                    <li><a href="<?php echo base_url();?>entreprise/liste_candidat_offre_selectionne">candidat(s) selectionné(s) par offre</a></li>
                                    
                          
                            </ul>
                            <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>entreprise/interview_entreprise">Interview candidat par offre </a></li>
                                   
                                    <li><a href="<?php echo base_url();?>entreprise/enrollement_view">candidat(s) retenus par offre</a></li>
                                    
                          
                            </ul>
                               
                            </div>
                        </div>
                    </li>

                    <li class="sub-header"><span>PARAMETRES</span></li>
           

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
                                   
                                    <li><a href="<?php echo base_url();?>entreprise/ajout_utlisateur"> Ajouter  un utilisateur  </a></li>
                                    

                                </ul>
                                 <ul class="sub-menu">

                                     <li><a href="<?php echo base_url();?>entreprise/liste_utlisateur">Liste des utilisateurs</a></li>
                            
                            </ul>
                          
                            </div>
                        </div>
                    </li>
                  

                </ul>

                </div>
            </div>