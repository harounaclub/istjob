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
                                    <div class="logged-user-role">entreprise</div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                                
                                <li>
                                    <a href="<?php echo base_url(); ?>entreprise/logout"><i class="os-icon os-icon-signs-11"></i><span>Se déconnecter</span></a>
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

                                     
                                    <li><a href="<?php echo base_url();?>entreprise/liste_candidat_offre_selectionne">candidat(s) selectionné(s) par offre</a></li>
                                    
                          
                            </ul>
                           
                               
                            </div>
                        </div>
                    </li>
                    <li class="sub-header"><span>PARAMETRES</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>profil</span></a>
                       
                    </li>

             
                </ul>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
