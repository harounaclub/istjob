<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entreprise extends MX_Controller {

	public function __construct()
	{
	
		parent::__construct();
	    $this->load->model('entreprise_model');
		
	}


	function index(){


    $this->form_validation->set_rules('log', 'nom d\'utilisateur', 'trim|required');
    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
     
        
        if($this->form_validation->run()){
    

          $login=$this->input->post('log');
          $mdp=$this->input->post('pass');

          if($this->entreprise_model->check_connection($login,$mdp)){


            $info_user=$this->entreprise_model->getInfo_user($login,$mdp);
            foreach ($info_user as $info_u) {


                 $nom_prenom=$info_u->nom_administrateur." ".$info_u->prenoms_administrateur;
                 $id_admin=$info_u->id_administrateur;
            
            }


           


            $store_data_inSession = array(

                                                
                                              'id_admin'=> $id_admin,        
                                              'nom_prenom'=> $nom_prenom,
                                                                                          
                                              
                                              
                       );

           $this->session->set_userdata($store_data_inSession);


                  


             redirect("entreprise/tableau_bords");


          }else{


             redirect("entreprise");
          }



          

        }else
        {
          $this->load->view("se_connecter_view");

        }

    }



   function tableau_bords(){

         


            $data["nb_candidat"]=$this->entreprise_model->compterCandidat();
            $data["nb_offre"]=$this->entreprise_model->compterOffre();
            $data["nb_entreprise"]=$this->entreprise_model->compterEntreprise();
            $data["liste_offre_stat"]=$this->entreprise_model->get_liste_offre_10();
            
            
            $this->load->view("main_view",$data);
         
		
	}

	function toutes_offres(){

    $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_offre();
		$this->load->view("tous_offre_view",$data);
	}

   function offre_encours(){

     $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_offre_encours();
    $this->load->view("offre_encours_view",$data);
    
  }
  function offre_annulee(){

     $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_offre_annule();
    $this->load->view("offre_annule_view",$data);
    
  }


  function publ_depubl_offre($id_offre,$status){


     $modifier_offre = array(

                                                
                                              'status_offre'=> $status,        
                         
                       );
     $this->entreprise_model->modifier_offre($id_offre,$modifier_offre);


    redirect("entreprise/toutes_offres");
    


  }



  function details_offre($id_offre){

    $data["infos_offre"]=$this->entreprise_model->get_info_offre_id($id_offre);
    $this->load->view("details_offre_view",$data);
  }

	
	

	function ajout_offre(){


    $this->form_validation->set_rules('intitule_offre', 'intitule offre', 'trim|required');
    $this->form_validation->set_rules('libelle_offre', 'libelle offre', 'trim|required');
    
     

        
        if($this->form_validation->run()){
    
          
          $id_genere=$this->entreprise_model->clePrimaire(10);
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
          $profil_poste=$this->input->post('profil_poste');
          $description_offre=$this->input->post('description_offre');

          $dure_offre=$this->input->post('dure_offre');
          $lieu_habitation=$this->input->post('lieu_habitation');
          $lieu_travail=$this->input->post('lieu_travail');
          $diplomes=$this->input->post('diplomes');
          $id_entreprise=$this->input->post('id_entreprise');
          $typecontrat=$this->input->post('typecontrat');

          $id_categorie_pro=$this->input->post('id_categorie_pro');

          $data_lia_entre_offre=array( 
                                
                                
                                'id_entreprise' =>$id_entreprise,
                                'id_offre_emplois' =>$id_offre,
                                
                                
          
                            );

            $this->entreprise_model->ajout_lia_offre_entreprise($data_lia_entre_offre);

          
          foreach ($id_categorie_pro as $item_catpro) {


            $data_lia_catoffre=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_categorie_pro' =>$item_catpro,
                                
                                
          
                            );

            $this->entreprise_model->ajout_lia_offre_catpro($data_lia_catoffre);
           
          }



          foreach ($niveaux as $item_niv) {


            $data_lia_netude=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_niveau_etude' =>$item_niv,
                                
                                
          
                            );

            $this->entreprise_model->ajout_lia_offre_niveau($data_lia_netude);
           
          }

          foreach ($typecontrat as $item_con) {


            $data_lia_cont=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                '   id_type_contrat' =>$item_con,
                                
                                
          
                            );

            $this->entreprise_model->ajout_lia_offre_typecontrat($data_lia_cont);
           
          }

          foreach ($diplomes as $item_diplom) {


            $data_lia_diplom=array( 
                                
                                
                                'id_offre' =>$id_offre,
                                'id_diplome' =>$item_diplom,
                                
                                
          
                            );

            $this->entreprise_model->ajout_lia_offre_diplom($data_lia_diplom);
           
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
                                
          
                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->entreprise_model->ajout_offre($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }


      

        }else
        {

          $data["liste_niveau"]=$this->entreprise_model->get_liste_niveau();
          $data["liste_entreprise"]=$this->entreprise_model->get_liste_entreprise();
          $data["liste_diplome"]=$this->entreprise_model->get_liste_diplome();
          $data["listetypecontrat"]=$this->entreprise_model->get_liste_typecontrat();
          $data["listecategoriepro"]=$this->entreprise_model->get_liste_categoriepro();



         $this->load->view("ajout_offre_view",$data);

        }
	}


  function modifier_offre($id_offre){


    $this->form_validation->set_rules('intitule_offre', 'intitule offre', 'trim|required');
    $this->form_validation->set_rules('libelle_offre', 'libelle offre', 'trim|required');
    
     

        
        if($this->form_validation->run()){
    
          
          $id_genere=$this->entreprise_model->clePrimaire(10);
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

          
          // foreach ($id_categorie_pro as $item_catpro) {


          //   $data_lia_catoffre=array( 
                                
                                
          //                       'id_offre' =>$id_offre,
          //                       'id_categorie_pro' =>$item_catpro,
                                
                                
          
          //                   );

          //   $this->entreprise_model->ajout_lia_offre_catpro($data_lia_catoffre);
           
          // }



          // foreach ($niveaux as $item_niv) {


          //   $data_lia_netude=array( 
                                
                                
          //                       'id_offre' =>$id_offre,
          //                       'id_niveau_etude' =>$item_niv,
                                
                                
          
          //                   );

          //   $this->entreprise_model->ajout_lia_offre_niveau($data_lia_netude);
           
          // }

          // foreach ($typecontrat as $item_con) {


          //   $data_lia_cont=array( 
                                
                                
          //                       'id_offre' =>$id_offre,
          //                       '   id_type_contrat' =>$item_con,
                                
                                
          
          //                   );

          //   $this->entreprise_model->ajout_lia_offre_typecontrat($data_lia_cont);
           
          // }

          // foreach ($diplomes as $item_diplom) {


          //   $data_lia_diplom=array( 
                                
                                
          //                       'id_offre' =>$id_offre,
          //                       'id_diplome' =>$item_diplom,
                                
                                
          
          //                   );

          //   $this->entreprise_model->ajout_lia_offre_diplom($data_lia_diplom);
           
          // }


         
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
                if($this->entreprise_model->modifier_offre($id_offre,$data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }


   

        }else
        {

          $data["liste_niveau"]=$this->entreprise_model->get_liste_niveau();
          $data["liste_entreprise"]=$this->entreprise_model->get_liste_entreprise();
          $data["liste_diplome"]=$this->entreprise_model->get_liste_diplome();
          $data["listetypecontrat"]=$this->entreprise_model->get_liste_typecontrat();
          $data["listecategoriepro"]=$this->entreprise_model->get_liste_categoriepro();

           $data["id_offre"]=$id_offre;

           $data["infos_offre"]=$this->entreprise_model->get_info_offre_id($id_offre);



         $this->load->view("modifier_offre_view",$data);

        }
  }

    
  function tous_candidat(){


    $this->load->view("tous_candidat_view");
    
  }
  function candidat_offre(){


    $data["liste_cand_off"]=$this->entreprise_model->get_liste_candidats_offre();
    $this->load->view("candidat_offre_view",$data);
    
  }
 
    

  function trie_candidat(){


    $this->load->view("trie_candidat_view");
    
  }

  function tous_postulant(){

    $donnees_postule["tous_les_postulants"]=$this->entreprise_model->get_liste_candidats_offre();
    $this->load->view("tous_postulant_view",$donnees_postule);
    
  }

  function tous_inscrits(){

    $donnees_inscrits["tous_inscrits"]=$this->entreprise_model->get_liste_candidats_inscrits();
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





          $id_entreprise=$this->entreprise_model->clePrimaire(8);
          $id_genere=$this->entreprise_model->clePrimaire(4);
          $pass_admin="pass".$id_genere;





         
          $data=array( 
                                
                                
                                'id_entreprise' =>$id_entreprise,
                                'raison_social' =>$raison_social,
                                'rccm' =>$rccm,
                    
                                'email_entreprise' =>$email_entreprise,
                                'nom_responsable' =>$nom_responsable,
                                'email_responsable' =>$email_responsable,
                                'telephone_entreprise' =>$telephone_entreprise,
                              
                                 
                                'nom_contact' =>$nom_contact,
                                'prenoms_contact' =>$prenoms_contact,
                                'email_contact' =>$email_contact,

                                'localisation_entreprise'=>$localisation_entreprise,
                                'telephone_contact'=>$telephone_contact,
                                
          


                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->entreprise_model->ajout_client($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }



        }else{


          echo "xa ne s execute pas";
        }
        



  }
   function liste_client(){

    $data["liste_clients"]=$this->entreprise_model->get_liste_client();
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
          

          $id_niveaux_etude=$this->entreprise_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_niveaux_etude' =>$id_niveaux_etude,
                                'libelle_niveaux_etude' =>$libelle_niveau,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->entreprise_model->ajout_niveau($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }
   function liste_niveaux(){

    $data["liste_niveaux"]=$this->entreprise_model->get_liste_niveau();
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
          

          $id_type_contrat=$this->entreprise_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_type_contrat' =>$id_type_contrat,
                                'libelle_type_contrat' =>$libelletypecontrat,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);

                
                if($this->entreprise_model->ajout_typecontrat($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }

   function liste_type_contract(){

    $data["liste_type_contrat"]=$this->entreprise_model->get_liste_typecontrat();
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
          

          $id_diplome=$this->entreprise_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_diplome' =>$id_diplome,
                                'libelle_diplome' =>$libelle,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->entreprise_model->ajout_diplome($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }



        }



  }

   function liste_diplome(){

    $data["liste_diplome"]=$this->entreprise_model->get_liste_diplome();
    $this->load->view("liste_diplome_view",$data);
   }

   function ajout_utlisateur(){

    $data["liste_profil"]=$this->entreprise_model->get_liste_profil();
    $this->load->view("ajout_utlisateur_view",$data);
   }


    function liste_utlisateur(){

    $data["liste_utlisateur"]=$this->entreprise_model->get_liste_utilisateur();
    $this->load->view("liste_utlisateur_view",$data);
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


         

          $id_administrateur=$this->entreprise_model->clePrimaire(8);
          $id_genere=$this->entreprise_model->clePrimaire(4);
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


               
               



                if($this->entreprise_model->ajout_utilisateur($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }

        


        }else{
          echo "xe ne s'execute pas ";
        }



  }

   function liste_categorie_professionnelle(){

    $data["liste_categorie_professionnelle"]=$this->entreprise_model->get_liste_categoriepro();
    $this->load->view("liste_categorie_professionnelle_view",$data);
   }

   function ajax_ajout_categoriepro(){


   


     $this->form_validation->set_rules('libelle_categorie', 'libelle_categorie', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim|required');
     
    
     

        
        if($this->form_validation->run()){
    
          $libelle_categorie=$this->input->post('libelle_categorie');
          $commentaire=$this->input->post('commentaire');
          

          $id_categorie_pro=$this->entreprise_model->clePrimaire(8);
          


         
          $data=array( 
                                
                                
                                'id_categorie_pro' =>$id_categorie_pro,
                                'libelle_categorie' =>$libelle_categorie,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->entreprise_model->ajout_categoriepro($data_clean)){

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


    $this->entreprise_model->supprim_niveau($id_niveau_etude);
    redirect("administrateur/liste_niveaux");
    

   }

   function suppression_catpro($id_categorie_pro){


    $this->entreprise_model->supprim_categorie_pro($id_categorie_pro);
    redirect("administrateur/liste_categorie_professionnelle");
    

   }


   function suppression_typecontrat($id_type_contrat){


    $this->entreprise_model->supprim_typecontrat($id_type_contrat);
    redirect("administrateur/liste_type_contract");
  

   }


   function suppression_diplome($id_diplome){


    $this->entreprise_model->supprim_diplome($id_diplome);
    redirect("administrateur/liste_diplome");

   }


   function suppression_utilisateur($id_administrateur){


    $this->entreprise_model->supprim_utilisateur($id_administrateur);
    redirect("administrateur/liste_utlisateur");
    

   }


   function suppression_client($id_entreprise){


    $this->entreprise_model->supprim_entreprise($id_entreprise);
    redirect("administrateur/liste_client");
    

   }


   function liste_candidats(){

    $data["liste_candidats"]=$this->entreprise_model->get_liste_candidats();
    $this->load->view("tous_candidat_view",$data);
   }


   function test(){



  $id_administrateur="test00";
    $data=array( 
                                
                                
                                'id_administrateur' =>$id_administrateur,
                                
                             
                                
          
                    );


          


                 
                $data_clean = $this->security->xss_clean($data);


               
               



                if($this->entreprise_model->ajout_utilisateur($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }



   }

   function candidat_par_offre(){

    $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_offre_active();
    $this->load->view("candidat_par_offre_view",$data);


   }

   function liste_candidat_offre($id_offre){

    $data["libelle_offre"]=$this->entreprise_model->nom_offre_id($id_offre);

    $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_candidats_par_offre($id_offre);
    $this->load->view("liste_candidat_offre_recrutement_view",$data);


   }

   function liste_selection_candidat_offre($id_offre){

    $data["libelle_offre"]=$this->entreprise_model->nom_offre_id($id_offre);

    $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_selectionnee_candidats_par_offre($id_offre);
    $this->load->view("liste_candidat_selectionne_offre_recrutement_view",$data);


   }

   function liste_candidat_offre_selectionne(){

    $data["liste_offres_emplois"]=$this->entreprise_model->get_liste_offre_active();
    $this->load->view("candidat_selectioner_offre_view",$data);


   }


   function voir_candidat($id_candidat){


    $data["info_generale_candidat"]=$this->entreprise_model->get_info_generale_candidat($id_candidat);
    $data["experience_pro_candidat"]=$this->entreprise_model->get_experience_professionnelle_candidat($id_candidat);
    $data["experience_extrapro_candidat"]=$this->entreprise_model->get_experience_extra_professionnelle_candidat($id_candidat);

    $data["langues_candidat"]=$this->entreprise_model->get_langues_candidat($id_candidat);
    $data["loisirs_candidat"]=$this->entreprise_model->get_loisirs_candidat($id_candidat);
    $this->load->view("voir_candidat_view",$data);

   }


   function selectionner_candidat($id_candidat,$id_offre){

    $status_position=1;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->entreprise_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->tous_postulant();



   }


   function deselectionner_candidat($id_candidat,$id_offre){

    $status_position=0;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->entreprise_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->tous_postulant();



   }


   function selectionner_candidat_par_offre($id_candidat,$id_offre){

    $status_position=1;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->entreprise_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->liste_candidat_offre($id_offre);



   }


   function deselectionner_candidat_par_offre($id_candidat,$id_offre){

    $status_position=0;

    $data=array( 
                                  
                  'status_position' =>$status_position,

                );


    $this->entreprise_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data);
    $this->liste_candidat_offre($id_offre);



   }

   function ajout_interview(){

    $data["liste_offre"]=$this->entreprise_model->get_liste_offre();
    $data["liste_candidats"]=$this->entreprise_model->get_liste_candidats();

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
          

          $id_interview=$this->entreprise_model->clePrimaire(8);
          


         
          $data=array( 
                                  
                                'id_interview' =>$id_interview,
                                'id_offre' =>$id_offre,
                                'id_candidat' =>$id_candidat,

                                'date' =>$date_final_eng,
                                'heure_interview' =>$heure_interview,
                                'commentaire' =>$commentaire,
                    

                            );

                $data_clean = $this->security->xss_clean($data);
                if($this->entreprise_model->ajout_interview($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }

  

  function interwiew_attente(){

    $data["liste_interview"]=$this->entreprise_model->get_interview_en_attente();
    $this->load->view("interwiew_attente_view",$data);

  }

  function interwiew_execute(){

    $data["liste_interview"]=$this->entreprise_model->get_interview_en_execute();
    $this->load->view("interwiew_execute_view",$data);

  }

  function interwiew_annule(){

    $data["liste_interview"]=$this->entreprise_model->get_interview_en_annule();
    
    $this->load->view("interwiew_annule_view",$data);
   }


  function candidat_retenu_par_offre(){


   $data["liste_candidat_retenu"]=$this->entreprise_model->get_liste_candidats_offre_interview();
    $this->load->view("candidat_offre_view",$data);



  }


  function rapport_interview_en_attente(){

     $data["liste_interview"]=$this->entreprise_model->get_interview_en_attente();
    $this->load->view("rapport_interwiew_attente_view",$data);
  }


  function faire_rapport_interview($id_interview){

     $data["id_interview"]=$id_interview;
     $data["info_interview"]=$this->entreprise_model->info_interview($id_interview);
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

                
                if($this->entreprise_model->modifier_interview($id_interview,$data_interview)){

                  $this->entreprise_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data_l_offre_candidat);

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }




        }



  }





   

   




   function logout(){


        session_destroy();
        redirect("administrateur");
    }







}