<!DOCTYPE html>
<html>


<head>
    <title>ISTjob Ajout une offre</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo base_url(); ?>favicon.png" rel="shortcut icon">
    <link href="<?php echo base_url(); ?>apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url(); ?>http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/main4a76.css?version=4.3.0" rel="stylesheet">
     <link href="<?php echo base_url(); ?>medium-editor/css/medium-editor.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>summernote/css/summernote-bs4.css" rel="stylesheet">
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="element-search">
                    <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
                    <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
                    </input>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-box"></div>
                        </div>
                        <div class="ssg-name">Projects</div>
                        <div class="ssg-info">24 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-boxed">
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/company6.png)"></div>
                                <div class="item-name">Integ<span>ration</span> with API</div>
                            </a>
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/company7.png)"></div>
                                <div class="item-name">Deve<span>lopm</span>ent Project</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-users"></div>
                        </div>
                        <div class="ssg-name">Customers</div>
                        <div class="ssg-info">12 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-list">
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
                                <div class="item-name">John Ma<span>yer</span>s</div>
                            </a>
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
                                <div class="item-name">Th<span>omas</span> Mullier</div>
                            </a>
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
                                <div class="item-name">Kim C<span>olli</span>ns</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-folder"></div>
                        </div>
                        <div class="ssg-name">Files</div>
                        <div class="ssg-info">17 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-blocks">
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
                                <div class="item-name">Work<span>Not</span>e.txt</div>
                            </a>
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                                <div class="item-name">V<span>ideo</span>.avi</div>
                            </a>
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-database"></i></div>
                                <div class="item-name">User<span>Tabl</span>e.sql</div>
                            </a>
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                                <div class="item-name">wed<span>din</span>g.jpg</div>
                            </a>
                        </div>
                        <div class="ssg-nothing-found">
                            <div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div><span>No files were found. Try changing your query...</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-w">
            <!--------------------
START - Mobile Menu
-------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="index-2.html"><img src="<?php echo base_url(); ?>img/logo.png"><span>Clean Admin</span></a>
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
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                    </div>
                    <!--------------------
START - Mobile Menu List
-------------------->
                    <ul class="main-menu">
                        <li class="has-sub-menu">
                            <a href="index-2.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layout"></div>
                                </div><span>Dashboard</span></a>
                            <ul class="sub-menu">
                                <li><a href="index-2.html">Dashboard 1</a></li>
                                <li><a href="apps_support_dashboard.html">Dashboard 2 <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_projects.html">Dashboard 3</a></li>
                                <li><a href="apps_bank.html">Dashboard 4 <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="layouts_menu_top_image.html">Dashboard 5</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="layouts_menu_top_image.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layers"></div>
                                </div><span>Menu Styles</span></a>
                            <ul class="sub-menu">
                                <li><a href="layouts_menu_side_full.html">Side Menu Light</a></li>
                                <li><a href="layouts_menu_side_full_dark.html">Side Menu Dark</a></li>
                                <li><a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_pipeline.html">Side &amp; Top Dark</a></li>
                                <li><a href="apps_projects.html">Side &amp; Top</a></li>
                                <li><a href="layouts_menu_side_mini.html">Mini Side Menu</a></li>
                                <li><a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a></li>
                                <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                                <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                                <li><a href="layouts_menu_right.html">Right Menu</a></li>
                                <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                                <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                                <li><a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a></li>
                                <li><a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a></li>
                                <li><a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a></li>
                                <li><a href="layouts_menu_side_compact_click.html">Menu Inside Click</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="apps_bank.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-package"></div>
                                </div><span>Applications</span></a>
                            <ul class="sub-menu">
                                <li><a href="apps_email.html">Email Application</a></li>
                                <li><a href="apps_support_dashboard.html">Support Dashboard <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_support_index.html">Tickets Index <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_projects.html">Projects List</a></li>
                                <li><a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_full_chat.html">Chat Application</a></li>
                                <li><a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="misc_chat.html">Popup Chat</a></li>
                                <li><a href="apps_pipeline.html">CRM Pipeline</a></li>
                                <li><a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="misc_calendar.html">Calendar</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-file-text"></div>
                                </div><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="misc_invoice.html">Invoice</a></li>
                                <li><a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="misc_charts.html">Charts</a></li>
                                <li><a href="auth_login.html">Login</a></li>
                                <li><a href="auth_register.html">Register</a></li>
                                <li><a href="auth_lock.html">Lock Screen</a></li>
                                <li><a href="misc_pricing_plans.html">Pricing Plans</a></li>
                                <li><a href="misc_error_404.html">Error 404</a></li>
                                <li><a href="misc_error_500.html">Error 500</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-life-buoy"></div>
                                </div><span>UI Kit</span></a>
                            <ul class="sub-menu">
                                <li><a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="uikit_alerts.html">Alerts</a></li>
                                <li><a href="uikit_grid.html">Grid</a></li>
                                <li><a href="uikit_progress.html">Progress</a></li>
                                <li><a href="uikit_popovers.html">Popover</a></li>
                                <li><a href="uikit_tooltips.html">Tooltips</a></li>
                                <li><a href="uikit_buttons.html">Buttons</a></li>
                                <li><a href="uikit_dropdowns.html">Dropdowns</a></li>
                                <li><a href="uikit_typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-mail"></div>
                                </div><span>Emails</span></a>
                            <ul class="sub-menu">
                                <li><a href="emails_welcome.html">Welcome Email</a></li>
                                <li><a href="emails_order.html">Order Confirmation</a></li>
                                <li><a href="emails_payment_due.html">Payment Due</a></li>
                                <li><a href="emails_forgot.html">Forgot Password</a></li>
                                <li><a href="emails_activate.html">Activate Account</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div><span>Users</span></a>
                            <ul class="sub-menu">
                                <li><a href="users_profile_big.html">Big Profile</a></li>
                                <li><a href="users_profile_small.html">Compact Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-edit-32"></div>
                                </div><span>Forms</span></a>
                            <ul class="sub-menu">
                                <li><a href="forms_regular.html">Regular Forms</a></li>
                                <li><a href="forms_validation.html">Form Validation</a></li>
                                <li><a href="forms_wizard.html">Form Wizard</a></li>
                                <li><a href="forms_uploads.html">File Uploads</a></li>
                                <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-grid"></div>
                                </div><span>Tables</span></a>
                            <ul class="sub-menu">
                                <li><a href="tables_regular.html">Regular Tables</a></li>
                                <li><a href="tables_datatables.html">Data Tables</a></li>
                                <li><a href="tables_editable.html">Editable Tables</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-zap"></div>
                                </div><span>Icons</span></a>
                            <ul class="sub-menu">
                                <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                                <li><a href="icon_fonts_feather.html">Feather Icons</a></li>
                                <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                                <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                                <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                                <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                                <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                                <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                                <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                                <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                                <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                                <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                                <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                                <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                                <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                                <li><a href="icon_fonts_light_admin.html">Light Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--------------------
END - Mobile Menu List
-------------------->
                    <div class="mobile-menu-magic">
                        <h4>Light Admin</h4>
                        <p>Clean Bootstrap 4 Template</p>
                        <div class="btn-w"><a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a></div>
                    </div>
                </div>
            </div>
            <!--------------------
END - Mobile Menu
-------------------->
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
                        <div class="element-wrapper">
                            
                            <div class="element-box">
                                <h5 class="form-header">Ajouter une offre d'emploi</h5>
                                <div class="form-desc">
                                    <span> les champs avec <span style="color: red;">(*)</span> sont obligatoires</span>    
                                </div>

                                


                                    
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <form id="formValidate">
                    

                      
                  

                                            <div class="form-group">
                                              
                                                <label for="">Selectionner une entreprise <span style="color: red;">(*)</span></label>
                                                <select class="form-control" id="id_entreprise">

                                                    <?php 
                                                      if(isset($liste_entreprise)){

                                                        foreach ($liste_entreprise as $entreprise) { ?>

                                                        <option value="<?php echo $entreprise->id_entreprise; ?>"><?php echo $entreprise->raison_social; ?></option>
                                                           
                                                       <?php }
                                                      }



                                                    ?>
                                                    
                                                   
                                                </select>
                                            </div>
                       
                                        
                                            <div class="form-group">
                                                <label for=""> Intitulé de l'offre <span style="color: red;">(*)</span></label>
                                                <input class="form-control" data-error="Veuillez renseigner l'intitulé" placeholder="Intitulé de l'offre:" id="intitule_offre" type="text" required="required">
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""> Libelle de l'offre <span style="color: red;">(*)</span></label>
                                                        <input class="form-control" data-minlength="6" placeholder="Libelle de l'offre:" id="libelle_offre" type="text" required="required">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Metier <span style="color: red;">(*)</span></label>
                                                        <input class="form-control" data-match-error="Passwords don't match" placeholder="Metier " id="metiers" type="text">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                 <div class="form-group">
                                                      <label for=""> Niveau(x) d'etude(s) <span style="color: red;">(*)</span></label>
                                                      <select class="form-control select2" id="niveaux" multiple="true" required="required">
                                                          <?php 


                                                              if(isset($liste_niveau)){

                                                                foreach ($liste_niveau as $niveau) { ?>

                                                                <option value="<?php echo $niveau->id_niveaux_etude; ?>"><?php echo $niveau->libelle_niveaux_etude; ?></option>
                                                                   
                                                               <?php }
                                                              }



                                                        ?>
                                                      </select>
                                                  </div>
                                          </div>
                                            <div class="col-sm-6">
                                                  <div class="form-group">
                                              
                                                <label for="">Nb.années Experiences <span style="color: red;">(*)</span></label>
                                                <select class="form-control" id="nb_experience">

                                                   

                                                    <option value="Aucune expérience">Aucune expérience</option>
                                                     <option value="1 an d'expérience">1 an</option>

                                                     <?php 

                                                     for ($i=2; $i <=30 ; $i++) { ?>

                                                        <option value="<?php echo $i; ?> ans d'expériences"><?php echo $i; ?> ans</option>


                                                    <?php
                                                         
                                                     }

                                                     ?>
                                             
                                             
                                                    
                                                   
                                                </select>
                                            </div>
                                              </div>
                                             </div>
                                             </div>

                                             <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Date Début </label>
                                                            
                                                            <input class="single-daterange form-control" id="date_debut_offre" type="text" placeholder="Date debut" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Date Fin <span style="color: red;">(*)</span></label>
                                                            <input class="single-daterange form-control" placeholder="Date fin" type="text" id="date_fin_offre">
                                                        </div>
                                                    </div>

                                                </div>
                                                     <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""> Durée D'Offre:</label>
                                                        <input class="form-control" data-minlength="6" placeholder="Durée D'Offre:" id="dure_offre" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Lieu d'Habitation</label>
                                                        <input class="form-control" data-match-error="Passwords don't match" placeholder="Lieu D'Habitation : " id="lieu_habitation" type="text">
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""></label>
                                                       

                                                        <label for="">Lieu de travail <span style="color: red;">(*)</span></label>
                                                        <select class="form-control" id="lieu_travail">

                                                            
                                                             <option value="Côte-d'Ivoire">Côte-d'Ivoire </option>

                                                                    <option value="Afghanistan">Afghanistan </option>
                                                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                                                    <option value="Albanie">Albanie </option>
                                                                    <option value="Algerie">Algerie </option>
                                                                    <option value="Allemagne">Allemagne </option>
                                                                    <option value="Andorre">Andorre </option>
                                                                    <option value="Angola">Angola </option>
                                                                    <option value="Anguilla">Anguilla </option>
                                                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                                    <option value="Argentine">Argentine </option>
                                                                    <option value="Armenie">Armenie </option>
                                                                    <option value="Australie">Australie </option>
                                                                    <option value="Autriche">Autriche </option>
                                                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                                                    <option value="Bahamas">Bahamas </option>
                                                                    <option value="Bangladesh">Bangladesh </option>
                                                                    <option value="Barbade">Barbade </option>
                                                                    <option value="Bahrein">Bahrein </option>
                                                                    <option value="Belgique">Belgique </option>
                                                                    <option value="Belize">Belize </option>
                                                                    <option value="Benin">Benin </option>
                                                                    <option value="Bermudes">Bermudes </option>
                                                                    <option value="Bielorussie">Bielorussie </option>
                                                                    <option value="Bolivie">Bolivie </option>
                                                                    <option value="Botswana">Botswana </option>
                                                                    <option value="Bhoutan">Bhoutan </option>
                                                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                                    <option value="Bresil">Bresil </option>
                                                                    <option value="Brunei">Brunei </option>
                                                                    <option value="Bulgarie">Bulgarie </option>
                                                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                                                    <option value="Burundi">Burundi </option>

                                                                    <option value="Caiman">Caiman </option>
                                                                    <option value="Cambodge">Cambodge </option>
                                                                    <option value="Cameroun">Cameroun </option>
                                                                    <option value="Canada">Canada </option>
                                                                    <option value="Canaries">Canaries </option>
                                                                    <option value="Cap_vert">Cap_Vert </option>
                                                                    <option value="Chili">Chili </option>
                                                                    <option value="Chine">Chine </option>
                                                                    <option value="Chypre">Chypre </option>
                                                                    <option value="Colombie">Colombie </option>
                                                                    <option value="Comores">Colombie </option>
                                                                    <option value="Congo">Congo </option>
                                                                    <option value="Congo_democratique">Congo_democratique </option>
                                                                    <option value="Cook">Cook </option>
                                                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                                    <option value="Costa_Rica">Costa_Rica </option>
                                                                   
                                                                    <option value="Croatie">Croatie </option>
                                                                    <option value="Cuba">Cuba </option>

                                                                    <option value="Danemark">Danemark </option>
                                                                    <option value="Djibouti">Djibouti </option>
                                                                    <option value="Dominique">Dominique </option>

                                                                    <option value="Egypte">Egypte </option>
                                                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                                    <option value="Equateur">Equateur </option>
                                                                    <option value="Erythree">Erythree </option>
                                                                    <option value="Espagne">Espagne </option>
                                                                    <option value="Estonie">Estonie </option>
                                                                    <option value="Etats_Unis">Etats_Unis </option>
                                                                    <option value="Ethiopie">Ethiopie </option>

                                                                    <option value="Falkland">Falkland </option>
                                                                    <option value="Feroe">Feroe </option>
                                                                    <option value="Fidji">Fidji </option>
                                                                    <option value="Finlande">Finlande </option>
                                                                    <option value="France">France </option>

                                                                    <option value="Gabon">Gabon </option>
                                                                    <option value="Gambie">Gambie </option>
                                                                    <option value="Georgie">Georgie </option>
                                                                    <option value="Ghana">Ghana </option>
                                                                    <option value="Gibraltar">Gibraltar </option>
                                                                    <option value="Grece">Grece </option>
                                                                    <option value="Grenade">Grenade </option>
                                                                    <option value="Groenland">Groenland </option>
                                                                    <option value="Guadeloupe">Guadeloupe </option>
                                                                    <option value="Guam">Guam </option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    <option value="Guernesey">Guernesey </option>
                                                                    <option value="Guinee">Guinee </option>
                                                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                                    <option value="Guyana">Guyana </option>
                                                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                                                    <option value="Haiti">Haiti </option>
                                                                    <option value="Hawaii">Hawaii </option>
                                                                    <option value="Honduras">Honduras </option>
                                                                    <option value="Hong_Kong">Hong_Kong </option>
                                                                    <option value="Hongrie">Hongrie </option>

                                                                    <option value="Inde">Inde </option>
                                                                    <option value="Indonesie">Indonesie </option>
                                                                    <option value="Iran">Iran </option>
                                                                    <option value="Iraq">Iraq </option>
                                                                    <option value="Irlande">Irlande </option>
                                                                    <option value="Islande">Islande </option>
                                                                    <option value="Israel">Israel </option>
                                                                    <option value="Italie">italie </option>

                                                                    <option value="Jamaique">Jamaique </option>
                                                                    <option value="Jan Mayen">Jan Mayen </option>
                                                                    <option value="Japon">Japon </option>
                                                                    <option value="Jersey">Jersey </option>
                                                                    <option value="Jordanie">Jordanie </option>

                                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                                    <option value="Kenya">Kenya </option>
                                                                    <option value="Kirghizstan">Kirghizistan </option>
                                                                    <option value="Kiribati">Kiribati </option>
                                                                    <option value="Koweit">Koweit </option>

                                                                    <option value="Laos">Laos </option>
                                                                    <option value="Lesotho">Lesotho </option>
                                                                    <option value="Lettonie">Lettonie </option>
                                                                    <option value="Liban">Liban </option>
                                                                    <option value="Liberia">Liberia </option>
                                                                    <option value="Liechtenstein">Liechtenstein </option>
                                                                    <option value="Lituanie">Lituanie </option>
                                                                    <option value="Luxembourg">Luxembourg </option>
                                                                    <option value="Lybie">Lybie </option>

                                                                    <option value="Macao">Macao </option>
                                                                    <option value="Macedoine">Macedoine </option>
                                                                    <option value="Madagascar">Madagascar </option>
                                                                    <option value="Madère">Madère </option>
                                                                    <option value="Malaisie">Malaisie </option>
                                                                    <option value="Malawi">Malawi </option>
                                                                    <option value="Maldives">Maldives </option>
                                                                    <option value="Mali">Mali </option>
                                                                    <option value="Malte">Malte </option>
                                                                    <option value="Man">Man </option>
                                                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                                    <option value="Maroc">Maroc </option>
                                                                    <option value="Marshall">Marshall </option>
                                                                    <option value="Martinique">Martinique </option>
                                                                    <option value="Maurice">Maurice </option>
                                                                    <option value="Mauritanie">Mauritanie </option>
                                                                    <option value="Mayotte">Mayotte </option>
                                                                    <option value="Mexique">Mexique </option>
                                                                    <option value="Micronesie">Micronesie </option>
                                                                    <option value="Midway">Midway </option>
                                                                    <option value="Moldavie">Moldavie </option>
                                                                    <option value="Monaco">Monaco </option>
                                                                    <option value="Mongolie">Mongolie </option>
                                                                    <option value="Montserrat">Montserrat </option>
                                                                    <option value="Mozambique">Mozambique </option>

                                                                    <option value="Namibie">Namibie </option>
                                                                    <option value="Nauru">Nauru </option>
                                                                    <option value="Nepal">Nepal </option>
                                                                    <option value="Nicaragua">Nicaragua </option>
                                                                    <option value="Niger">Niger </option>
                                                                    <option value="Nigeria">Nigeria </option>
                                                                    <option value="Niue">Niue </option>
                                                                    <option value="Norfolk">Norfolk </option>
                                                                    <option value="Norvege">Norvege </option>
                                                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                                                    <option value="Oman">Oman </option>
                                                                    <option value="Ouganda">Ouganda </option>
                                                                    <option value="Ouzbekistan">Ouzbekistan </option>

                                                                    <option value="Pakistan">Pakistan </option>
                                                                    <option value="Palau">Palau </option>
                                                                    <option value="Palestine">Palestine </option>
                                                                    <option value="Panama">Panama </option>
                                                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                                                    <option value="Paraguay">Paraguay </option>
                                                                    <option value="Pays_Bas">Pays_Bas </option>
                                                                    <option value="Perou">Perou </option>
                                                                    <option value="Philippines">Philippines </option>
                                                                    <option value="Pologne">Pologne </option>
                                                                    <option value="Polynesie">Polynesie </option>
                                                                    <option value="Porto_Rico">Porto_Rico </option>
                                                                    <option value="Portugal">Portugal </option>

                                                                    <option value="Qatar">Qatar </option>

                                                                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                                    <option value="Reunion">Reunion </option>
                                                                    <option value="Roumanie">Roumanie </option>
                                                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                                                    <option value="Russie">Russie </option>
                                                                    <option value="Rwanda">Rwanda </option>

                                                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                                    <option value="Saint_Marin">Saint_Marin </option>
                                                                    <option value="Salomon">Salomon </option>
                                                                    <option value="Salvador">Salvador </option>
                                                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                                    <option value="Senegal">Senegal </option>
                                                                    <option value="Seychelles">Seychelles </option>
                                                                    <option value="Sierra Leone">Sierra Leone </option>
                                                                    <option value="Singapour">Singapour </option>
                                                                    <option value="Slovaquie">Slovaquie </option>
                                                                    <option value="Slovenie">Slovenie</option>
                                                                    <option value="Somalie">Somalie </option>
                                                                    <option value="Soudan">Soudan </option>
                                                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                                                    <option value="Suede">Suede </option>
                                                                    <option value="Suisse">Suisse </option>
                                                                    <option value="Surinam">Surinam </option>
                                                                    <option value="Swaziland">Swaziland </option>
                                                                    <option value="Syrie">Syrie </option>

                                                                    <option value="Tadjikistan">Tadjikistan </option>
                                                                    <option value="Taiwan">Taiwan </option>
                                                                    <option value="Tonga">Tonga </option>
                                                                    <option value="Tanzanie">Tanzanie </option>
                                                                    <option value="Tchad">Tchad </option>
                                                                    <option value="Thailande">Thailande </option>
                                                                    <option value="Tibet">Tibet </option>
                                                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                                                    <option value="Togo">Togo </option>
                                                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                                                    <option value="Tunisie">Tunisie </option>
                                                                    <option value="Turkmenistan">Turmenistan </option>
                                                                    <option value="Turquie">Turquie </option>

                                                                    <option value="Ukraine">Ukraine </option>
                                                                    <option value="Uruguay">Uruguay </option>

                                                                    <option value="Vanuatu">Vanuatu </option>
                                                                    <option value="Vatican">Vatican </option>
                                                                    <option value="Venezuela">Venezuela </option>
                                                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                                    <option value="Vietnam">Vietnam </option>

                                                                    <option value="Wake">Wake </option>
                                                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                                                    <option value="Yemen">Yemen </option>
                                                                    <option value="Yougoslavie">Yougoslavie </option>

                                                                    <option value="Zambie">Zambie </option>
                                                                    <option value="Zimbabwe">Zimbabwe </option>
                                                   
                                                       </select>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Lieu de travail précis</label>
                                                        <input class="form-control" data-match-error="Passwords don't match" placeholder="Lieu de travail precis : " id="lieu_travail_precis" type="text">
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                 <div class="form-group">
                                                      <label for=""> Diplôme(s)</label>
                                                      <select class="form-control select2" id="diplomes" multiple="true">
                                                         <?php 

                                                          
                                                              if(isset($liste_diplome)){

                                                                foreach ($liste_diplome as $diplome) { ?>

                                                                <option value="<?php echo $diplome->id_diplome; ?>"><?php echo $diplome->libelle_diplome; ?></option>
                                                                   
                                                               <?php }
                                                              }



                                                        ?>
                                                      </select>
                                                  </div>
                                          </div>
                                            </div>
                                            <div class="row">
                                             <div class="col-sm-6">
                                                 <div class="form-group">
                                                      <label for=""> Type de contrat <span style="color: red;">(*)</span></label>
                                                      <select class="form-control select2" id="typecontrat" multiple="true">
                                                        <option value="">Veuillez selectionné le type de contrat</option>
                                                         <?php 

                                                          
                                                              if(isset($listetypecontrat)){

                                                                foreach ($listetypecontrat as $typecontrat) { ?>

                                                                <option value="<?php echo $typecontrat->id_type_contrat; ?>"><?php echo $typecontrat->libelle_type_contrat; ?></option>
                                                                   
                                                               <?php }
                                                              }



                                                        ?>
                                                      </select>
                                                  </div>
                                          </div>

                                          <div class="col-sm-6">
                                            
                                             <div class="form-group">
                                                      <label for=""> Categories professionnelles <span style="color: red;">(*)</span></label>
                                                      <select class="form-control select2" id="id_categorie_pro" multiple="true">
                                                        <option value="">Veuillez selectionné la catégorie professionnelle</option>
                                                          <?php 

                                                          
                                                              if(isset($listecategoriepro)){

                                                                foreach ($listecategoriepro as $categoriepro) { ?>

                                                                <option value="<?php echo $categoriepro->id_categorie_pro; ?>"><?php echo $categoriepro->libelle_categorie; ?></option>
                                                                   
                                                               <?php }
                                                              }



                                                        ?>
                                                      </select>
                                                  </div>
                                          </div>
                                      

                                         <div class="col-sm-12">
                                               <div class="form-group">
                 

                                                    <label class="form-control-label"> Mission ou description de poste <span style="color: red;">(*)</span></label>
                                                   

                                                    <div id="mission"><br>Saisir toutes les informations de la mission</div>

                                                </div>
                                        </div>
                                         <div class="col-lg-12">
                                          <div class="form-group">
                                           

                                             <label class="form-control-label"> Profil du poste <span style="color: red;">(*)</span></label>
                                             

                                              <div id="profil_poste"><br>Saisir toutes les informations du profil de poste</div>

                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                             

                                            <label class="form-control-label"> Autre description <span style="color: red;">(*)</span></label>
                                               

                                                <div id="description_offre"></div>

                                            </div>
                                          </div>

                                        

                                            
                                           
                                            
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary disabled" type="submit" id="btn_ajouter"> Ajouter</button>
                                               
                                            </div>
                                        </form>
                                    </div>
                                          

                                             
                                            

                                            


                                            
                        
                                            
                                            
                                        </form>
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
END - Demo Customizer
-------------------->
                        <!--------------------
START - Chat Popup Box
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
    <script src="<?php echo base_url(); ?>js/demo_customizer4a76.js?version=4.3.0"></script>
    <script src="<?php echo base_url(); ?>js/main4a76.js?version=4.3.0"></script>
    <script src="<?php echo base_url(); ?>summernote/js/summernote-bs4.min.js"></script>

     <script src="<?php echo base_url(); ?>medium-editor/js/medium-editor.js"></script>
    <script>

        $( document ).ready(function() {
            console.log( "ready!" );


            
        });

        $( "#btn_ajouter" ).click(function(e) {
                    e.preventDefault();



               var intitule_offre=$("#intitule_offre").val();
               var libelle_offre=$("#libelle_offre").val();
               var metiers=$("#metiers").val();
               var date_fin_offre=$("#date_fin_offre").val();

               var typecontrat=$("#typecontrat").val();
               var id_categorie_pro=$("#id_categorie_pro").val();

               var niveaux=$("#niveaux").val();


               if(intitule_offre == ""){

                  alert("Vous devez renseigné l'intitulé de l'offre");
                  return false;

               }
               if(niveaux == ""){

                  alert("Vous devez renseigné le niveaux d'étude");
                  return false;

               }

               if(libelle_offre == ""){

                  alert("Vous devez renseigné le libellé de l'offre");
                  return false;

               }

               if(metiers == ""){

                  alert("Vous devez renseigné le metier");
                  return false;

               }

               if(date_fin_offre == ""){

                  alert("Vous devez renseigné le  date de fin offre");
                  return false;

               }
               if(typecontrat == ""){

                  alert("Vous devez renseigné le  type de contrat");
                  return false;

               }
               if(id_categorie_pro == ""){

                  alert("Vous devez renseigné la categorie professionnelle");
                  return false;

               }

            
  
                    var intitule_offre=$('#intitule_offre').val();
                    var libelle_offre=$('#libelle_offre').val();
                    var dure_offre=$('#dure_offre').val();
                    var lieu_habitation=$('#lieu_habitation').val();
                    var lieu_travail=$('#lieu_travail').val();
                    var lieu_travail_precis=$('#lieu_travail_precis').val();
                    var diplomes=$('#diplomes').val();
                    var id_entreprise=$('#id_entreprise').val();
                    var id_categorie_pro=$('#id_categorie_pro').val();
                    

                    var metiers=$('#metiers').val();
                    var niveaux=$('#niveaux').val();
                    var nb_experience=$('#nb_experience').val();

                    var date_debut_offre=$('#date_debut_offre').val();
                    var date_fin_offre=$('#date_fin_offre').val();metiers
                    var typecontrat=$('#typecontrat').val();

                    



                    var mission=$('#mission').summernote('code');
                    var profil_poste=$('#profil_poste').summernote('code');
                    var description_offre=$('#description_offre').summernote('code');


                    


                    


                    
                   



           
               $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administrateur/ajout_offre',
                                           dataType:'json',
                                           data: {


                                               
                                               intitule_offre:intitule_offre,
                                               libelle_offre:libelle_offre,
                                               

                                               metiers:metiers,
                                               niveaux:niveaux,
                                               nb_experience:nb_experience,

                                              date_debut_offre:date_debut_offre,
                                              date_fin_offre:date_fin_offre,
                                              typecontrat:typecontrat,
                                              id_categorie_pro:id_categorie_pro,
                                              


                                              
                                               mission:mission,
                                               profil_poste:profil_poste,
                                               description_offre:description_offre,


                                              dure_offre:dure_offre,
                                              lieu_habitation:lieu_habitation,
                                              lieu_travail:lieu_travail,
                                              lieu_travail_precis:lieu_travail_precis,
                                              diplomes:diplomes,
                                              id_entreprise:id_entreprise,
                                                
              

                                           },
                                           success: function(response) {

                                              var reponse=response.succes;


                                              if(reponse == "1"){


                                                alert("Offre enregistre avec succes");

                                                 $('#mission').summernote('code', "");
                                                 $('#profil_poste').summernote('code', "");
                                                 $('#description_offre').summernote('code', "");

                                                var nulle="";

                                                intitule_offre=$('#intitule_offre').val(nulle);
                                                libelle_offre=$('#libelle_offre').val(nulle);
                                                dure_offre=$('#dure_offre').val(nulle);
                                                lieu_habitation=$('#lieu_habitation').val(nulle);
                                                lieu_travail=$('#lieu_travail').val(nulle);
                                                diplomes=$('#diplomes').val(nulle);
                                                id_entreprise=$('#id_entreprise').val(nulle);

                                     
                                                




                                                metiers=$('#metiers').val(nulle);
                                                niveaux=$('#niveaux').val(nulle);
                                                nb_experience=$('#nb_experience').val(nulle);

                                                date_debut_offre=$('#date_debut_offre').val(nulle);
                                                date_fin_offre=$('#date_fin_offre').val(nulle);
                                                typecontrat=$('#typecontrat').val(nulle);


                                                dossier_candidature=$('#dossier_candidature').val(nulle);



                                                
                                              }

                                               
                                              // console.log(response);
                                               

                                              

                                           },
                                            complete: function(){
                                                
                                                $("#zone_id").hide();
                                                $("#succes_box").show();
                                               
                                            },
                                            beforeSend: function(){
                                                
                                                
                                              

                                            },
                                           error: function (xhr, ajaxOptions, thrownError) {
                                               alert(xhr.status);
                                               alert(thrownError);
                                           }

                                 }); 
                    
                    
                });

        

      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#mission').summernote({
          height: 200,
          tooltip: false
        })

        $('#profil_poste').summernote({
          height: 200,
          tooltip: false
        })

        $('#description_offre').summernote({
          height: 200,
          tooltip: false
        })
      });
       
    </script>
</body>


</html>