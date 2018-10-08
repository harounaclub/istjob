            <div class="menu-w menu-activated-on-hover menu-has-selected-link selected-menu-color-light color-scheme-dark color-style-default sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over">
                <div class="logo-w">
                    <a class="logo" href="index-2.html">
                        <div class="logo-element"></div>
                        <div class="logo-label">ISTJOB candidat</div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <?php

                                    $id_candidat=$this->session->userdata('id_admin');
                                    $img_candidat=$this->candidat_model->get_image_candidat($id_candidat);

                                    if($img_candidat == ""){ ?>

                                      <img alt="" src="<?php echo base_url(); ?>uploads/candidat/vide.png">

                                    <?php }else{ ?>

                                      <img alt="" src="<?php echo base_url(); ?>uploads/candidat/<?php echo $img_candidat;?>">

                                     <?php }

                                     ?>
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"><?php
                                         $nom_prenom=$this->session->userdata('nom_prenom');
                                        if(isset($nom_prenom)) echo $nom_prenom; 
                                        ?></div>
                            <div class="logged-user-role">Candidat</div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w">
                                  <?php

                                    $id_candidat=$this->session->userdata('id_admin');
                                    $img_candidat=$this->candidat_model->get_image_candidat($id_candidat);

                                    if($img_candidat == ""){ ?>

                                      <img alt="" src="<?php echo base_url(); ?>uploads/candidat/vide.png">

                                    <?php }else{ ?>

                                      <img alt="" src="<?php echo base_url(); ?>uploads/candidat/<?php echo $img_candidat;?>">

                                     <?php }

                                     ?>
                                </div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name"><?php
                                         $nom_prenom=$this->session->userdata('nom_prenom');
                                        if(isset($nom_prenom)) echo $nom_prenom; 
                                        ?></div>
                                    <div class="logged-user-role">Candidat</div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                            
                                <li>
                                    <a href="<?php echo base_url(); ?>candidat/logout"><i class="os-icon os-icon-signs-11"></i><span>Se déconnecter</span></a>
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
                        <a href="<?php echo base_url(); ?>candidat/tableau_bords">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Tableau de bords</span></a>
                        
                    </li>
                  
                    <li class="sub-header"><span>Offres d'emplois</span></li>
                    <li >
                        <a href="<?php echo base_url(); ?>candidat/tous_offres">
                            <div class="icon-w">
                                <div class="os-icon os-icon-package"></div>
                            </div><span>Toutes les offres ... </span></a>
                      
                    </li>
                    <li class=" ">
                        <a href="<?php echo base_url(); ?>candidat/mes_offres">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div><span>Mes offres d'emploi</span></a>
                        
                    </li>
                   
                    <li class="sub-header"><span>Mon CV en ligne</span></li>
                    <li >
                        <a href="<?php echo base_url(); ?>candidat/information_general">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Informations générales</span></a>
                      
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>candidat/experience_professionnelles">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Experiences professionnelles</span></a>
                       
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>candidat/mes_diplomes">
                            <div class="icon-w">
                                <div class="os-icon os-icon-edit-32"></div>
                            </div><span>Mes diplômes</span></a>
                       
                    </li>

                    <li >
                        <a href="<?php echo base_url(); ?>candidat/experience_extra_professionnelle">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Experiences extra professionnelles</span></a>
                       
                    </li>
                  
                  <li >
                        <a href=<?php echo base_url(); ?>candidat/loisir_direct>
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Hobbies et loisirs</span></a>
                       
                    </li>

                    <li >
                        <a href="<?php echo base_url(); ?>candidat/langue_direct">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Mes langues lus,ecris et parlés</span></a>
                       
                    </li>
                    <li class="sub-header"><span>Paramètres</span></li>
                    <li class="selected">
                        <a href="<?php echo base_url(); ?>candidat/monprofil">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>mon profil</span></a>
                        
                    </li>
                </ul>

                <br><br><br><br><br><br><br>
                
            </div>