<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrateur extends MX_Controller {

	public function __construct()
	{
	
		parent::__construct();
	    $this->load->model('administrateur_model');
		
	}


	function index(){


    $this->form_validation->set_rules('log', 'nom d\'utilisateur', 'trim|required');
    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
     
        
        if($this->form_validation->run()){
    

          $login=$this->input->post('log');
          $mdp=$this->input->post('pass');

          if($this->administrateur_model->check_connection($login,$mdp)){


            $info_user=$this->administrateur_model->getInfo_user($login,$mdp);
            foreach ($info_user as $info_u) {


                 $nom_prenom=$info_u->nom_administrateur." ".$info_u->prenoms_administrateur;
                 $id_admin=$info_u->id_administrateur;
            
            }


           


            $store_data_inSession = array(

                                                
                                              'id_admin'=> $id_admin,        
                                              'nom_prenom'=> $nom_prenom,
                                                                                          
                                              
                                              
                       );

           $this->session->set_userdata($store_data_inSession);


                  


             redirect("administrateur/tableau_bords");


          }else{


             redirect("administrateur");
          }



          

        }else
        {
          $this->load->view("se_connecter_view");

        }

    }



   function tableau_bords(){

         


            $data["nb_candidat"]=$this->administrateur_model->compterCandidat();
            $data["nb_offre"]=$this->administrateur_model->compterOffre();
            $data["nb_entreprise"]=$this->administrateur_model->compterEntreprise();
            $data["liste_offre_stat"]=$this->administrateur_model->get_liste_offre_10();
            
            
            $this->load->view("main_view",$data);
         
		
	}

	function toutes_offres(){

    $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_offre();
		$this->load->view("tous_offre_view",$data);
	}

   function offre_encours(){

     $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_offre_encours();
    $this->load->view("offre_encours_view",$data);
    
  }
  function offre_annulee(){

     $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_offre_annule();
    $this->load->view("offre_annule_view",$data);
    
  }


  function publ_depubl_offre($id_offre,$status){


     $modifier_offre = array(

                                                
                                              'status_offre'=> $status,        
                         
                       );
     $this->administrateur_model->modifier_offre($id_offre,$modifier_offre);


    redirect("administrateur/toutes_offres");
    


  }



  function details_offre($id_offre){

    $data["infos_offre"]=$this->administrateur_model->get_info_offre_id($id_offre);
    $this->load->view("details_offre_view",$data);
  }

	
	

	function ajout_offre(){


    $this->form_validation->set_rules('intitule_offre', 'intitule offre', 'trim|required');
    $this->form_validation->set_rules('libelle_offre', 'libelle offre', 'trim|required');
    
     

        
        if($this->form_validation->run()){
    
          
          $id_genere=$this->administrateur_model->clePrimaire(10);
          $id_offre="O".$id_genere;
          $id_entreprise=$this->input->post('id_entreprise');
          $intitule_offre=$this->input->post('intitule_offre');
          $libelle_offre=$this->input->post('libelle_offre');
          $metiers=$this->input->post('metiers');
          
          $niveaux=$this->input->post('niveaux');
          $nb_experience=$this->input->post('nb_experience');

          $date_debut_offre=$this->input->post('date_debut_offre');
            $date_d_jour=substr($date_debut_offre, 0,2);
            $date_d_mois=substr($date_debut_offre, 3,2);
            $date_d_annee=substr($date_debut_offre, 6,4);
            $date_debut_eng=$date_d_annee."/".$date_d_mois."/".$date_d_jour;


          $date_fin_offre=$this->input->post('date_fin_offre');
            $date_f_jour=substr($date_fin_offre, 0,2);
            $date_f_mois=substr($date_fin_offre, 3,2);
            $date_f_annee=substr($date_fin_offre, 6,4);
            $date_fin_eng=$date_f_annee."/".$date_f_mois."/".$date_f_jour;

          $dossier_candidature=$this->input->post('dossier_candidature');
          $mission=$this->input->post('mission');

          if($this->input->post('mission')){


            $mission=$this->input->post('mission');


          }else{

            $mission="";

          }
          

           if($this->input->post('profil_poste')){


            $profil_poste=$this->input->post('profil_poste');


          }else{

            $profil_poste="";

          }

          if($this->input->post('description_offre')){


            $description_offre=$this->input->post('description_offre');


          }else{

            $description_offre="";

          }
          

          $dure_offre=$this->input->post('dure_offre');
          $lieu_habitation=$this->input->post('lieu_habitation');
          $lieu_travail=$this->input->post('lieu_travail');
          $diplomes=$this->input->post('diplomes');
          $id_entreprise=$this->input->post('id_entreprise');
          $typecontrat=$this->input->post('typecontrat');


          $status_emploi_directe=0;
          $status_emploi_stage=0;
          
          


          $id_categorie_pro=$this->input->post('id_categorie_pro');

          $data_lia_entre_offre=array( 
                                
                                
                                'id_entreprise' =>$id_entreprise,
                                'id_offre_emplois' =>$id_offre,
                                
                                
          
                            );

           $this->administrateur_model->ajout_lia_offre_entreprise($data_lia_entre_offre);

          
          foreach ($id_categorie_pro as $item_catpro) {


            $data_lia_catoffre=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_categorie_pro' =>$item_catpro,
                                
                                
          
                            );

           $this->administrateur_model->ajout_lia_offre_catpro($data_lia_catoffre);
           
          }



          foreach ($niveaux as $item_niv) {


            $data_lia_netude=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_niveau_etude' =>$item_niv,
                                
                                
          
                            );

            $this->administrateur_model->ajout_lia_offre_niveau($data_lia_netude);
           
          }

          foreach ($typecontrat as $item_con) {

            if($item_con=="dO4VPwEH" || $item_con=="pYeG3nXk"){

              $status_emploi_directe=1;
            }

            if($item_con=="AI82iDfv"){

              $status_emploi_stage=1;
            }

            $data_lia_cont=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_type_contrat' =>$item_con,
                                
                                
          
                            );

            $this->administrateur_model->ajout_lia_offre_typecontrat($data_lia_cont);
           
          }

          foreach ($diplomes as $item_diplom) {


            $data_lia_diplom=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_diplome' =>$item_diplom,
                                
                                
          
                            );

            $this->administrateur_model->ajout_lia_offre_diplom($data_lia_diplom);
           
          }


         
          $data=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'intitule_offre' =>$intitule_offre,
                                'libelle_offre' =>$libelle_offre,
                    
                                'description_offre' =>$description_offre,
                                'duree_offre' =>$dure_offre,
                                'date_debut_offre' =>$date_debut_eng,
                                'date_fin_offre' =>$date_fin_eng,
                              
                                 
                                'metier' =>$metiers,
                                'lieu_habitation' =>$lieu_habitation,
                                'lieu_travail' =>$lieu_travail,
                               
                                'nb_experience' =>$nb_experience,
                                'id_entreprise' =>$id_entreprise,
                                'profil_poste' =>$profil_poste,
                           
                                'dossier_candidature' =>$dossier_candidature,
                                'mission' =>$mission,

                                'status_emploi_directe' =>$status_emploi_directe,
                                'status_emploi_stage' =>$status_emploi_stage,
                                
          
                            );

                $data_clean = $this->security->xss_clean($data);


                if($this->administrateur_model->ajout_offre($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }


      

        }else
        {

          $data["liste_niveau"]=$this->administrateur_model->get_liste_niveau();
          $data["liste_entreprise"]=$this->administrateur_model->get_liste_entreprise();
          $data["liste_diplome"]=$this->administrateur_model->get_liste_diplome();
          $data["listetypecontrat"]=$this->administrateur_model->get_liste_typecontrat();
          $data["listecategoriepro"]=$this->administrateur_model->get_liste_categoriepro();



         $this->load->view("ajout_offre_view",$data);

        }
	}


  function modifier_offre($id_offre){


    $this->form_validation->set_rules('intitule_offre', 'intitule offre', 'trim|required');
    $this->form_validation->set_rules('libelle_offre', 'libelle offre', 'trim|required');
    
     

        
        if($this->form_validation->run()){
    
          
          $id_genere=$this->administrateur_model->clePrimaire(10);
          $id_offre=$this->input->post('id_offre');
          $intitule_offre=$this->input->post('intitule_offre');
          $libelle_offre=$this->input->post('libelle_offre');
          $metiers=$this->input->post('metiers');
          
          $niveaux=$this->input->post('niveaux');
          $nb_experience=$this->input->post('nb_experience');

          $date_debut_offre=$this->input->post('date_debut_offre');
          $date_fin_offre=$this->input->post('date_fin_offre');
          $dossier_candidature=$this->input->post('dossier_candidature');
          $mission=$this->input->post('mission');
          $profil_poste=$this->input->post('profil_poste');
          $description_offre=$this->input->post('description_offre');

          $dure_offre=$this->input->post('dure_offre');
          $lieu_habitation=$this->input->post('lieu_habitation');
          $lieu_travail=$this->input->post('lieu_travail');
          $diplomes=$this->input->post('diplomes');
          $id_entreprise=$this->input->post('id_entreprise');
          $typecontrat=$this->input->post('typecontrat');

          $id_categorie_pro=$this->input->post('id_categorie_pro');



         
          $data=array( 
                                
                                
                                
                                'intitule_offre' =>$intitule_offre,
                                'libelle_offre' =>$libelle_offre,
                    
                                'description_offre' =>$description_offre,
                                'duree_offre' =>$dure_offre,
                                'date_debut_offre' =>$date_debut_offre,
                                'date_fin_offre' =>$date_fin_offre,
                              
                                 
                                'metier' =>$metiers,
                                'lieu_habitation' =>$lieu_habitation,
                                'lieu_travail' =>$lieu_travail,
                               
                                'nb_experience' =>$nb_experience,
                                'id_entreprise' =>$id_entreprise,
                                'profil_poste' =>$profil_poste,
                           
                                'dossier_candidature' =>$dossier_candidature,
                                'mission' =>$mission,
                                
          
                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->administrateur_model->modifier_offre($id_offre,$data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }


   

        }else
        {

          $data["liste_niveau"]=$this->administrateur_model->get_liste_niveau();
          $data["liste_entreprise"]=$this->administrateur_model->get_liste_entreprise();
          $data["liste_diplome"]=$this->administrateur_model->get_liste_diplome();
          $data["listetypecontrat"]=$this->administrateur_model->get_liste_typecontrat();
          $data["listecategoriepro"]=$this->administrateur_model->get_liste_categoriepro();

           $data["id_offre"]=$id_offre;

           $data["infos_offre"]=$this->administrateur_model->get_info_offre_id($id_offre);



         $this->load->view("modifier_offre_view",$data);

        }
  }

    
  function tous_candidat(){


    $this->load->view("tous_candidat_view");
    
  }
  function candidat_offre(){


    $data["liste_cand_off"]=$this->administrateur_model->get_liste_candidats_offre();
    $this->load->view("candidat_offre_view",$data);
    
  }
 
    

  function trie_candidat(){


    $this->load->view("trie_candidat_view");
    
  }

  function tous_postulant(){

    $donnees_postule["tous_les_postulants"]=$this->administrateur_model->get_liste_candidats_offre();
    $this->load->view("tous_postulant_view",$donnees_postule);
    
  }

  function tous_inscrits(){

    $donnees_inscrits["tous_inscrits"]=$this->administrateur_model->get_liste_candidats_inscrits();
    $this->load->view("tous_inscrits_view",$donnees_inscrits);
    
  }
  function depot_dossier(){


    $this->load->view("depot_dossier_view");
    
  }

  function phase_selection(){


    $this->load->view("phase_selection_view");
    
  }
  function interview_candidat(){


    $this->load->view("interview_candidat_view");
    
  }
  function candidat_selectioner_offre(){


    $this->load->view("candidat_selectioner_offre_view");
    
  }
  
  function creer_interwiew(){


    $this->load->view("");
   }

  
  
  
   
   function ajout_postulant(){


    $this->load->view("ajout_postulant_view");
   }
   function liste_postulant(){


    $this->load->view("liste_postulant_view");
   }
   function liste_postulant_interview(){


    $this->load->view("liste_postulant_interview_view");
   }
    function ajout_rapport(){


    $this->load->view("");
   }
    function liste_rapport(){


    $this->load->view("liste_rapport_view");
   }
   function ajout_client(){


    $this->load->view("ajout_client_view");
   }

   function ajax_ajout_client(){

              

  

     $this->form_validation->set_rules('raison_social', 'raison_social', 'trim|required');
     $this->form_validation->set_rules('rccm', 'rccm', 'trim');
     $this->form_validation->set_rules('email_entreprise', 'email_entreprise', 'trim|required');
     $this->form_validation->set_rules('nom_responsable', 'nom_responsable', 'trim');
     $this->form_validation->set_rules('prenoms_responsable', 'prenoms_responsable', 'trim');
     $this->form_validation->set_rules('email_responsable', 'email_responsable', 'trim');


     $this->form_validation->set_rules('telephone_entreprise', 'telephone_entreprise', 'trim|required');
     $this->form_validation->set_rules('nom_contact', 'nom_contact', 'trim|required');
     $this->form_validation->set_rules('prenoms_contact', 'prenoms_contact', 'trim|required');
     $this->form_validation->set_rules('email_contact', 'email_contact', 'trim|required');

     $this->form_validation->set_rules('telephone_contact', 'telephone_contact', 'trim|required');
     $this->form_validation->set_rules('localisation_entreprise', 'localisation_entreprise', 'trim|required');

    

    

     

        
        if($this->form_validation->run()){
    
          $raison_social=$this->input->post('raison_social');
          $rccm=$this->input->post('rccm');
          $email_entreprise=$this->input->post('email_entreprise');
          $nom_responsable=$this->input->post('nom_responsable');
          $email_responsable=$this->input->post('email_responsable');
          $telephone_entreprise=$this->input->post('telephone_entreprise');

          $nom_contact=$this->input->post('nom_contact');
          $prenoms_contact=$this->input->post('prenoms_contact');
          $email_contact=$this->input->post('email_contact');


          $localisation_entreprise=$this->input->post('localisation_entreprise');
          $telephone_contact=$this->input->post('telephone_contact');





          $id_entreprise=$this->administrateur_model->clePrimaire(8);
          $id_genere=$this->administrateur_model->clePrimaire(4);
          $pass_admin="pass".$id_genere;


// 'nom_contact' =>$nom_contact,
//                                 'prenoms_contact' =>$prenoms_contact,
//                                 'email_contact' =>$email_contact,

//                                 'localisation_entreprise'=>$localisation_entreprise,
//                                 'telephone_contact'=>$telephone_contact,


         
          $data=array( 
                                
                                
                                'id_entreprise' =>$id_entreprise,
                                'raison_social' =>$raison_social,
                                'rccm' =>$rccm,
                    
                                'email_entreprise' =>$email_entreprise,
                                'nom_responsable' =>$nom_responsable,
                                'email_responsable' =>$email_responsable,
                                'telephone_entreprise' =>$telephone_entreprise,
                              
                                 
                                
                                
          


                            );


        

                $data_clean = $this->security->xss_clean($data);
                
                
                
                if($this->administrateur_model->ajout_client($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }



        }else{


          echo "xa ne s execute pas";
        }
        



  }
   function liste_client(){

    $data["liste_clients"]=$this->administrateur_model->get_liste_client();
    $this->load->view("liste_client_view",$data);
   }
   function ajout_niveaux(){


    $this->load->view("ajout_niveaux_view");
   }

   function ajax_ajout_niveau(){





     $this->form_validation->set_rules('libelle_niveau', 'libelle_niveau', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim|required');
     
    
     

        
        if($this->form_validation->run()){
    
          $libelle_niveau=$this->input->post('libelle_niveau');
          $commentaire=$this->input->post('commentaire');
          

          $id_niveaux_etude=$this->administrateur_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_niveaux_etude' =>$id_niveaux_etude,
                                'libelle_niveaux_etude' =>$libelle_niveau,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->administrateur_model->ajout_niveau($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }
   function liste_niveaux(){

    $data["liste_niveaux"]=$this->administrateur_model->get_liste_niveau();
    $this->load->view("liste_niveaux_view",$data);
   }
   function ajout_type_contract(){


    $this->load->view("ajout_type_contract_view");
   }

   function ajax_ajout_typecontrat(){


   


     $this->form_validation->set_rules('libelletypecontrat', 'libelletypecontrat', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim');
     
    
     

        
        if($this->form_validation->run()){
    
          $libelletypecontrat=$this->input->post('libelletypecontrat');
          $commentaire=$this->input->post('commentaire');
          

          $id_type_contrat=$this->administrateur_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_type_contrat' =>$id_type_contrat,
                                'libelle_type_contrat' =>$libelletypecontrat,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->ajout_typecontrat($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }

   function liste_type_contract(){

    $data["liste_type_contrat"]=$this->administrateur_model->get_liste_typecontrat();
    $this->load->view("liste_type_contract_view",$data);
   }
   function ajout_dipome(){


    $this->load->view("ajout_dipome_view");
   }

   function ajax_ajout_diplome(){




     $this->form_validation->set_rules('libelle_diplome', 'libelle_diplome', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim');
     
    
     

        
        if($this->form_validation->run()){
    
          $libelle=$this->input->post('libelle_diplome');
          $commentaire=$this->input->post('commentaire');
          

          $id_diplome=$this->administrateur_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_diplome' =>$id_diplome,
                                'libelle_diplome' =>$libelle,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->administrateur_model->ajout_diplome($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }



        }



  }

   function liste_diplome(){

    $data["liste_diplome"]=$this->administrateur_model->get_liste_diplome();
    $this->load->view("liste_diplome_view",$data);
   }
   function ajout_utlisateur() 
  {     

   
  if($this->session->userdata('id_admin')){
      $this->form_validation->set_rules('nom_administrateur', 'nom_administrateur', 'trim|required');
     $this->form_validation->set_rules('prenoms_administrateur', 'prenoms_administrateur', 'trim|required');
     
     $this->form_validation->set_rules('email_administrateur', 'email_administrateur', 'trim|required');
     $this->form_validation->set_rules('id_profil', 'id_profil', 'trim|required');
     $this->form_validation->set_rules('fonction_administrateur', 'fonction_administrateur', 'trim');
     $this->form_validation->set_rules('telephone_administrateur', 'telephone_administrateur', 'trim');

    
     
    
        
        if($this->form_validation->run()){


    
          $nom_administrateur=$this->input->post('nom_administrateur');
          $prenoms_administrateur=$this->input->post('prenoms_administrateur');
          
          $email_administrateur=$this->input->post('email_administrateur');
          $id_profil=$this->input->post('id_profil');
          $fonction_administrateur=$this->input->post('fonction_administrateur');
          $telephone_administrateur=$this->input->post('telephone_administrateur');

          $id_administrateur=$this->input->post('id_administrateur');

          $login_administrateur =$email_administrateur;
          $mdp_administrateur =$this->input->post('mdp_administrateur');




          $data=array( 
                                
                           
                                'id_administrateur' =>$id_administrateur,
                                'nom_administrateur' =>$nom_administrateur,
                                'prenoms_administrateur' =>$prenoms_administrateur,
                                
                                'email_administrateur' =>$email_administrateur,
                                'id_profil' =>$id_profil,
                                'fonction_administrateur' =>$fonction_administrateur,
                                'telephone_administrateur' =>$telephone_administrateur,

                                'login_administrateur' =>$login_administrateur,
                                'mdp_administrateur' =>$mdp_administrateur,

                                
                               
                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->ajout_utilisateur($data_clean)){


                  $to_email=$email_administrateur;
                  $message="<h4>Vous avez été enregistré comme administrateur sur la plateforme de recrutement ISTJOBS !</h4><br><br> Vos paramètres de connexions sont les suivants : <br><b>Lien :</b> <a href='http://istjobs.com/administrateur/'>http://istjobs.com/administrateur/</a><br><b>login :</b> ".$email_administrateur."<br><b>Mot de passe :</b>".$mdp_administrateur;

                  $this->envoi_mail_administrateur($to_email,$message);

                 $this->liste_utlisateur();

                    

                }else{

                    $data["liste_profil"]=$this->administrateur_model->get_liste_profil();
                    $data["id_administrateur"]=$this->administrateur_model->clePrimaire(8);

                    $data["mdp_administrateur"] =$this->administrateur_model->clePrimaire(8);
                    $this->load->view("ajout_utlisateur_view",$data);

                     
                }



        }else{

    $data["liste_profil"]=$this->administrateur_model->get_liste_profil();
    $data["id_administrateur"]=$this->administrateur_model->clePrimaire(8);
    $data["mdp_administrateur"] =$this->administrateur_model->clePrimaire(8);
      $this->load->view("ajout_utlisateur_view",$data);

    }
     }else{
        $this->load->view("se_connecter_view");
    }
  }

  




    function liste_utlisateur(){

    $data["liste_utlisateur"]=$this->administrateur_model->get_liste_utilisateur();
    $this->load->view("liste_utlisateur_view",$data);
   }

    public function envoi_mail_administrateur($to_email,$message){

        

            $from_email = "istjobs.recrutement@gmail.com";
            
            $nom ="ISTJOB recrutement";
           
            $subject2 = 'ISTJOB - Creation de compte administrateur';
           
            $message_final = $message;
             
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'istjobs.recrutement@gmail.com';
            $config['smtp_pass'] = 'ISTJOB123';
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            $this->load->library('email', $config);
            
            $this->email->initialize($config);
             //send mail
            $this->email->from($from_email, $nom);
            $this->email->to($to_email);
            //$this->email->cc($list);
            $this->email->subject($subject2);
            $this->email->message($message_final);

            if (!$this->email->send()) { 
                show_error($this->email->print_debugger()); 
             } else { 
                   echo 'Your e-mail has been sent!'; 
                    }

     }


   function ajax_ajout_utilisateur(){


     $this->form_validation->set_rules('nom_administrateur', 'nom_administrateur', 'trim|required');
     $this->form_validation->set_rules('prenoms_administrateur', 'prenoms_administrateur', 'trim|required');
     $this->form_validation->set_rules('email_administrateur', 'email_administrateur', 'trim|required');
     $this->form_validation->set_rules('fonction_administrateur', 'fonction_administrateur', 'trim');
     $this->form_validation->set_rules('telephone_administrateur', 'telephone_administrateur', 'trim|required');
    $this->form_validation->set_rules('id_profil', 'id_profil', 'trim|required');

 
        if($this->form_validation->run()){

    
          $nom_administrateur=$this->input->post('nom_administrateur');
          $prenoms_administrateur=$this->input->post('prenoms_administrateur');
          $email_administrateur=$this->input->post('email_administrateur');
          $fonction_administrateur=$this->input->post('fonction_administrateur');
          $telephone_administrateur=$this->input->post('telephone_administrateur');
          $id_profil=$this->input->post('id_profil');


         

          $id_administrateur=$this->administrateur_model->clePrimaire(8);
          $id_genere=$this->administrateur_model->clePrimaire(4);
          $pass_admin="pass".$id_genere;


          $data=array( 
                                
                                
                                'id_administrateur' =>$id_administrateur,
                                'nom_administrateur' =>$nom_administrateur,
                                'prenoms_administrateur' =>$prenoms_administrateur,
                                'fonction_administrateur' =>$fonction_administrateur,

                                'telephone_administrateur' =>$telephone_administrateur,
                                'email_administrateur' =>$email_administrateur,
                                'login_administrateur' =>$email_administrateur,
                                'mdp_administrateur' =>$pass_admin,

                                'mdp_administrateur' =>$id_profil,
                             
                                
          
                    );


          


                 
                $data_clean = $this->security->xss_clean($data);


               
               



                if($this->administrateur_model->ajout_utilisateur($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }

        


        }else{
          echo "xe ne s'execute pas ";
        }



  }

   function liste_categorie_professionnelle(){

    $data["liste_categorie_professionnelle"]=$this->administrateur_model->get_liste_categoriepro();
    $this->load->view("liste_categorie_professionnelle_view",$data);
   }

   function ajax_ajout_categoriepro(){


   


     $this->form_validation->set_rules('libelle_categorie', 'libelle_categorie', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim|required');
     
    
     

        
        if($this->form_validation->run()){
    
          $libelle_categorie=$this->input->post('libelle_categorie');
          $commentaire=$this->input->post('commentaire');
          

          $id_categorie_pro=$this->administrateur_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_categorie_pro' =>$id_categorie_pro,
                                'libelle_categorie' =>$libelle_categorie,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->administrateur_model->ajout_categoriepro($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }

   function ajout_categorie_professionnelle(){


    $this->load->view("ajout_categorie_professionnelle_view");
   }



   //suppression

   function suppression_niveau($id_niveau_etude){


    $this->administrateur_model->supprim_niveau($id_niveau_etude);
    redirect("administrateur/liste_niveaux");
    

   }

   function suppression_catpro($id_categorie_pro){


    $this->administrateur_model->supprim_categorie_pro($id_categorie_pro);
    redirect("administrateur/liste_categorie_professionnelle");
    

   }


   function suppression_typecontrat($id_type_contrat){


    $this->administrateur_model->supprim_typecontrat($id_type_contrat);
    redirect("administrateur/liste_type_contract");
  

   }


   function suppression_diplome($id_diplome){


    $this->administrateur_model->supprim_diplome($id_diplome);
    redirect("administrateur/liste_diplome");

   }


   function suppression_utilisateur($id_administrateur){


    $this->administrateur_model->supprim_utilisateur($id_administrateur);
    redirect("administrateur/liste_utlisateur");
    

   }


   function suppression_client($id_entreprise){


    $this->administrateur_model->supprim_entreprise($id_entreprise);
    redirect("administrateur/liste_client");
    

   }


   function liste_candidats(){

    $data["liste_candidats"]=$this->administrateur_model->get_liste_candidats();
    $this->load->view("tous_candidat_view",$data);
   }


   function test(){



  $id_administrateur="test00";
    $data=array( 
                                
                                
                                'id_administrateur' =>$id_administrateur,
                                
                             
                                
          
                    );


          


                 
                $data_clean = $this->security->xss_clean($data);


               
               



                if($this->administrateur_model->ajout_utilisateur($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }



   }

   function candidat_par_offre(){

    $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_offre_active();
    $this->load->view("candidat_par_offre_view",$data);


   }

   function liste_candidat_offre($id_offre){

    $data["libelle_offre"]=$this->administrateur_model->nom_offre_id($id_offre);

    $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_candidats_par_offre($id_offre);
    $this->load->view("liste_candidat_offre_recrutement_view",$data);


   }

   function liste_selection_candidat_offre($id_offre){

    $data["libelle_offre"]=$this->administrateur_model->nom_offre_id($id_offre);

    $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_selectionnee_candidats_par_offre($id_offre);
    $this->load->view("liste_candidat_selectionne_offre_recrutement_view",$data);


   }

   function liste_candidat_offre_selectionne(){

    $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_offre_active();
    $this->load->view("candidat_selectioner_offre_view",$data);


   }


   function voir_candidat($id_candidat){


    $data["info_generale_candidat"]=$this->administrateur_model->get_info_generale_candidat($id_candidat);
    $data["experience_pro_candidat"]=$this->administrateur_model->get_experience_professionnelle_candidat($id_candidat);
    $data["experience_extrapro_candidat"]=$this->administrateur_model->get_experience_extra_professionnelle_candidat($id_candidat);

    $data["langues_candidat"]=$this->administrateur_model->get_langues_candidat($id_candidat);
    $data["loisirs_candidat"]=$this->administrateur_model->get_loisirs_candidat($id_candidat);
    $this->load->view("voir_candidat_view",$data);

   }


   function selectionner_candidat($id_candidat,$id_offre){

    $status_position=1;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->administrateur_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->tous_postulant();



   }


   function deselectionner_candidat($id_candidat,$id_offre){

    $status_position=0;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->administrateur_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->tous_postulant();



   }


   function selectionner_candidat_par_offre($id_candidat,$id_offre){

    $status_position=1;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->administrateur_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->liste_candidat_offre($id_offre);



   }


   function deselectionner_candidat_par_offre($id_candidat,$id_offre){

    $status_position=0;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->administrateur_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->liste_candidat_offre($id_offre);



   }

   function ajout_interview(){

    $data["liste_offre"]=$this->administrateur_model->get_liste_offre();
    $data["liste_candidats"]=$this->administrateur_model->get_liste_candidats();

    $this->load->view("ajout_interview",$data);


   }

   function ajax_ajout_interview(){





     $this->form_validation->set_rules('id_offre', 'id_offre', 'trim|required');
     $this->form_validation->set_rules('id_candidat', 'id_candidat', 'trim|required');
     
    
     

        
        if($this->form_validation->run()){






    
          $id_offre=$this->input->post('id_offre');
          $id_candidat=$this->input->post('id_candidat');
          $date=$this->input->post('date');
            $date_n_jour=substr($date, 0,2);
            $date_n_mois=substr($date, 3,2);
            $date_n_annee=substr($date, 6,4);
            $date_final_eng=$date_n_annee."/".$date_n_mois."/".$date_n_jour;


          $heure_interview=$this->input->post('heure_interview');
          $commentaire=$this->input->post('commentaire');
          

          $id_interview=$this->administrateur_model->clePrimaire(8);
          


         
          $data=array( 
                                  
                                'id_interview' =>$id_interview,
                                'id_offre' =>$id_offre,
                                'id_candidat' =>$id_candidat,

                                'date' =>$date_final_eng,
                                'heure_interview' =>$heure_interview,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->administrateur_model->ajout_interview($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }

  

  function interwiew_attente(){

    $data["liste_interview"]=$this->administrateur_model->get_interview_en_attente();
    $this->load->view("interwiew_attente_view",$data);

  }

  function interwiew_execute(){

    $data["liste_interview"]=$this->administrateur_model->get_interview_en_execute();
    $this->load->view("interwiew_execute_view",$data);

  }

  function interwiew_annule(){

    $data["liste_interview"]=$this->administrateur_model->get_interview_en_annule();
    
    $this->load->view("interwiew_annule_view",$data);
   }


  function candidat_retenu_par_offre(){


   $data["liste_candidat_retenu"]=$this->administrateur_model->get_liste_candidats_offre_interview();
    $this->load->view("candidat_offre_view",$data);



  }


  function rapport_interview_en_attente(){

     $data["liste_interview"]=$this->administrateur_model->get_interview_en_attente();
    $this->load->view("rapport_interwiew_attente_view",$data);
  }


  function faire_rapport_interview($id_interview){

     $data["id_interview"]=$id_interview;
     $data["info_interview"]=$this->administrateur_model->info_interview($id_interview);
     $this->load->view("faire_rapport_interview",$data);
  }

  function ajax_rapport_activite(){





     $this->form_validation->set_rules('id_interview', 'id_interview', 'trim|required');
    
     
    
     

        
        if($this->form_validation->run()){

          


    
          $id_interview=$this->input->post('id_interview');
          $id_candidat=$this->input->post('id_candidat');
          $id_offre=$this->input->post('id_offre');
          

          $status_recrutement=$this->input->post('status_recrutement');
          $conclusion=$this->input->post('conclusion');
          

        

         
          $data_interview=array( 
                                
                                
                                
                                'status_recrutement' =>$status_recrutement,
                                'conclusion' =>$conclusion,
                    

                            );

           $data_l_offre_candidat=array( 
                                
                                
                                
                                'status_recrutement' =>$status_recrutement,
                                
                    

                            );

                
                if($this->administrateur_model->modifier_interview($id_interview,$data_interview)){

                  $this->administrateur_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data_l_offre_candidat);

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }
  function liste_offres_postee(){

    $data["liste_offres_emplois"]=$this->administrateur_model->get_liste_offre_postee();
    $this->load->view("liste_offres_postee_view",$data);
  }

function informationGenerale() 
{     

   
  if($this->session->userdata('id_admin')){
      $this->form_validation->set_rules('pays', 'pays', 'trim|required');
     $this->form_validation->set_rules('ville', 'ville', 'trim|required');
     
     $this->form_validation->set_rules('commune', 'commune', 'trim|required');
     $this->form_validation->set_rules('quartier', 'quartier', 'trim|required');
     $this->form_validation->set_rules('immeuble', 'immeuble', 'trim');

     $this->form_validation->set_rules('site_internet', 'site_internet', 'trim');
     $this->form_validation->set_rules('telephone', 'quartier', 'trim|required');
     $this->form_validation->set_rules('facebook', 'facebook', 'trim');
     $this->form_validation->set_rules('youtube', 'youtube', 'trim');
     $this->form_validation->set_rules('twitter', 'twitter', 'trim');

     $this->form_validation->set_rules('google_plus', 'google_plus', 'trim');
     $this->form_validation->set_rules('lindin', 'lindin', 'trim');
     $this->form_validation->set_rules('twitter', 'twitter', 'trim');
     $this->form_validation->set_rules('google', 'google', 'trim');
     $this->form_validation->set_rules('apropos', 'apropos', 'trim');
    
        
        if($this->form_validation->run()){


    
          $pays=$this->input->post('pays');
          $ville=$this->input->post('ville');
          
          $commune=$this->input->post('commune');
          $quartier=$this->input->post('quartier');
          $immeuble=$this->input->post('immeuble');


          $site_internet=$this->input->post('site_internet');
          $telephone=$this->input->post('telephone');

          $facebook=$this->input->post('facebook');
          $twitter=$this->input->post('twitter');
          $google_plus=$this->input->post('google_plus');
          $instagram=$this->input->post('instagram');
          $youtube=$this->input->post('youtube');
          
          $lindin=$this->input->post('lindin');
          
          
          $apropos=$this->input->post('apropos');

          


          $data=array( 
                                
                           
                                
                                'pays' =>$pays,
                                'ville' =>$ville,
                                
                                'commune' =>$commune,
                                'quartier' =>$quartier,
                                'immeuble' =>$immeuble,

                                'site_internet' =>$site_internet,
                                'telephone' =>$telephone,


                                'facebook' =>$facebook,
                                'twitter' =>$twitter,
                                'google_plus' =>$google_plus,
                                'lindin' =>$lindin,
                                'youtube' =>$youtube,

                                'apropos' =>$apropos,
                               
                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->modifierInfoGenerale($data_clean)){

                 $data["id_infos_generales"]="001";
                 $data["infosGenerales"]=$this->administrateur_model->getInfoGeneraleParID();
                 $this->load->view("admin_ajout_info_generale_view",$data);

                    

                }else{

                    $data["infosGenerales"]=$this->administrateur_model->getInfoGeneraleParID();
                    $data["id_infos_generales"]="001";
                    $this->load->view("admin_ajout_info_generale_view",$data);

                     
                }



        }else{

      $data["infosGenerales"]=$this->administrateur_model->getInfoGeneraleParID();
      $data["id_infos_generales"]="001";
      $this->load->view("admin_ajout_info_generale_view",$data);

    }
     }else{
        $this->load->view("se_connecter_view");
    }
  }

  public function uploadPhotoInfoGeneral()
 {
      
         if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/logo';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
                         
                  $data=array( 
                                
                                
                                'logo ' =>$image_name,
 
                               );
                    if($this->administrateur_model->modifierInfoGenerale($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }

    
  }

    

    



   function quiSommeNous(){


    if($this->session->userdata('id_admin')){

      $this->form_validation->set_rules('titre', 'titre', 'trim|required');
     $this->form_validation->set_rules('description ', 'description', 'trim');
    
        
        if($this->form_validation->run()){
         

         
          $description=$this->input->post('description');
          $titre=$this->input->post('titre');

     
          $id_pages=$this->input->post('id_pages');
         


          $data=array( 
                                
                           
                               
                                'titre' =>$titre,
                                'description' =>$description,
                                
                               
                               
                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->modifierquiSommenNous($data_clean)){

                 $data["id_pages"]="001";
                 $data["quiSommeNous"]=$this->administrateur_model->getquiSommeNousParId();
                 $this->load->view("admin_ajout_qui_somme_nous_view",$data);

                    

                }else{

                   $data["id_pages"]="001";
                 $data["quiSommeNous"]=$this->administrateur_model->getquiSommeNousParId();
                 $this->load->view("admin_ajout_qui_somme_nous_view",$data);

                     
                }



        }else{

      $data["quiSommeNous"]=$this->administrateur_model->getquiSommeNousParId();
      $data["id_pages"]="001";

      $this->load->view("admin_ajout_qui_somme_nous_view",$data);

  }

    }else{
        $this->load->view("se_connecter_view");
    }
      
}


 public function uploadPhotoQuiSommesNous()
    {

     
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/quiSommesNous';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
                         
                  

                  $data=array( 
                                
                                
                                'img_pages' =>$image_name,
                                
 
                               );
                    if($this->administrateur_model->modifierquiSommenNous($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }

   
       
    }
//que faisons nous

   function queFaisonsNous(){

     if($this->session->userdata('id_admin')){

      $this->form_validation->set_rules('titre', 'titre', 'trim|required');
      $this->form_validation->set_rules('description ', 'description', 'trim');
    
        
        if($this->form_validation->run()){
          $description=$this->input->post('description');
          $titre=$this->input->post('titre');

     
          $id_pages=$this->input->post('id_pages');
         


          $data=array( 
                                
                           
                                
                                'titre' =>$titre,
                                'description' =>$description,
                                
                               
                               
                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->modifierquefaisonNous($data_clean)){

                 $data["id_pages"]="002";
                 $data["queFaisonsNous"]=$this->administrateur_model->getqueFaisonNousParId();
                  $this->load->view("admin_ajout_que_faisons_nous_view",$data);

                    

                }else{

                  $data["id_pages"]="002";
                  $data["queFaisonsNous"]=$this->administrateur_model->getqueFaisonNousParId();
                $this->load->view("admin_ajout_que_faisons_nous_view",$data);

                     
                }



        }else{

      $data["queFaisonsNous"]=$this->administrateur_model->getqueFaisonNousParId();
      $data["id_pages"]="002";
       $this->load->view("admin_ajout_que_faisons_nous_view",$data);

  }

    }else{
        $this->load->view("se_connecter_view");
    }
      
}
 
    public function uploadPhotoQueFaisonNous()
    {
     

        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/queFaisonNous';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
                         
                  

                  $data=array( 
                                
                                
                                'img_pages' =>$image_name,
                                
 
                               );
                    if($this->administrateur_model->modifierquefaisonNous($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }

   
       
    }

    //temoignage

   function ajoutTemoignage(){

     if($this->session->userdata('id_admin')){

      $this->form_validation->set_rules('id_temoignage', 'id_temoignage', 'trim|required');
      $this->form_validation->set_rules('nom_prenom ', 'nom_prenom', 'trim');
      $this->form_validation->set_rules('titre ', 'titre', 'trim');
      $this->form_validation->set_rules('commentaire ', 'commentaire', 'trim');
    
        
        if($this->form_validation->run()){


          $id_temoignage=$this->input->post('id_temoignage');
          $nom_prenom=$this->input->post('nom_prenom');
          $titre=$this->input->post('titre');
          $commentaire=$this->input->post('commentaire');
         


          $data=array( 
                                
                           
                                
                                'id_temoignage' =>$id_temoignage,
                                'nom_prenom' =>$nom_prenom,
                                'titre' =>$titre,
                                'commentaire' =>$commentaire,
                                
                               
                               
                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->ajout_temoignage($data_clean)){

                      $this->listeTemoignage();

                    

                }else{

                  $data["id_temoignage"]=$this->administrateur_model->clePrimaire(8);
                  $this->load->view("ajout_temoignage_view",$data);


                     
                }



        }else{

      $data["id_temoignage"]=$this->administrateur_model->clePrimaire(8);
      $this->load->view("ajout_temoignage_view",$data);

  }

    }else{
        $this->load->view("se_connecter_view");
    }
      
}
 
    public function uploadPhotoTemoignages()
    {
     

        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/temoignage';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
            $id_temoignage=$this->input->post("id_temoignage");
                         
                  

                  $data=array(  
                                'id_temoignage' =>$id_temoignage,
                                'url_images ' =>$image_name,
                               
                                
                              );
                    if($this->administrateur_model->ajout_img_temoignages($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }

   
       
    }

     public function uploadPhotoAdministrateur()
    {
     

        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/administrateur';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
            $id_administrateur=$this->input->post("id_administrateur");
                         
                  

                  $data=array(  
                                'id_administrateur' =>$id_administrateur,
                                'url_images' =>$image_name,
                               
                                
                              );
                    if($this->administrateur_model->ajout_img_administrateur($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }

   
       
    }

 
   
  

   function listeTemoignage(){

    $data["liste_temoignages"]=$this->administrateur_model->get_liste_temoignages();
    $this->load->view("liste_temoignage_view",$data);
   }

    //contacter

   function ajoutContacterNous(){

     if($this->session->userdata('id_admin')){

     
      $this->form_validation->set_rules('nom ', 'nom', 'trim');
      $this->form_validation->set_rules('prenoms ', 'prenoms', 'trim');
      $this->form_validation->set_rules('fonction ', 'fonction', 'trim');
      $this->form_validation->set_rules('email ', 'email', 'trim');
    
        
        if($this->form_validation->run()){

          
          $id_contacter_nous=$this->input->post('id_contacter_nous');
          $nom=$this->input->post('nom');
          $prenoms=$this->input->post('prenoms');
          $fonction=$this->input->post('fonction');
          $email=$this->input->post('email');
         


          $data=array( 
                                
                           
                                
                                'id_contacter_nous' =>$id_contacter_nous,
                                'nom' =>$nom,
                                'prenoms' =>$prenoms,
                                'fonction' =>$fonction,
                                'email' =>$email,
                                
                               
                               
                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->administrateur_model->ajout_contacter_nous($data_clean)){

                      $this->listeContacterNous();

                    

                }else{

                  $data["id_contacter_nous"]=$this->administrateur_model->clePrimaire(8);
                  $this->load->view("ajout_contacter_nous_view",$data);

                     
                }



        }else{

      $data["id_contacter_nous"]=$this->administrateur_model->clePrimaire(8);
      $this->load->view("ajout_contacter_nous_view",$data);

  }

    }else{
        $this->load->view("se_connecter_view");
    }
      
}
 
   

   

   function listeContacterNous(){

     $data["liste_contacter"]=$this->administrateur_model->get_liste_contacter();
    $this->load->view("liste_contacter_nous_view",$data);
   }



  





   

   




   function logout(){


        session_destroy();
        redirect("administrateur");
    }







}