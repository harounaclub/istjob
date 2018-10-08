                <!--------------------
START - Top Bar
-------------------->
                <div class="top-bar color-scheme-dark">
                    <!--------------------
START - Top Menu Controls
-------------------->
                    <div class="top-menu-controls">
                       
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
START - User avatar and menu in secondary top menu
-------------------->
                        <div class="logged-user-w">
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
                                        
                                        <li><a href="<?php echo base_url(); ?>candidat/logout"><i class="os-icon os-icon-signs-11"></i><span>Se déconnecter</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--------------------
END - User avatar and menu in secondary top menu
-------------------->
                    </div>
 
                </div>
                <!--------------------
END - Top Bar
-------------------->
                <!--------------------
START - Breadcrumbs
-------------------->
                
                <!--------------------
END - Breadcrumbs
-------------------->