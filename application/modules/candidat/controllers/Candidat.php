<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Candidat extends MX_Controller {

	public function __construct()
	{
	
		parent::__construct();
	    $this->load->model('candidat_model');
		
	}


	function index(){


    $this->form_validation->set_rules('email', 'nom d\'utilisateur', 'trim|required');
        $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
         
            
            if($this->form_validation->run()){
        

              $login=$this->input->post('email');
              $mdp=$this->input->post('pass');

              if($this->candidat_model->check_connection($login,$mdp)){


                $info_user=$this->candidat_model->getInfo_user($login,$mdp);
                foreach ($info_user as $info_u) {


                     $nom_prenom=$info_u->nom_candidat." ".$info_u->prenoms_candidat;
                     $id_admin=$info_u->id_candidat;
                     $status=$info_u->status;
                
                }


               


                $store_data_inSession = array(

                                                    
                                                  'id_admin'=> $id_admin,        
                                                  'nom_prenom'=> $nom_prenom,
                                                  'status'=> $status,
                                                                                              
                                                  
                                                  
                           );

               $this->session->set_userdata($store_data_inSession); 



                              



        


                 if($status ==0){


                 	redirect("candidat/assistant_bienvenue");


                 }

                 if($status ==1){


                  redirect("candidat/assistant_information_generale");


                 }


                 if($status ==2){


                 	redirect("candidat/assistant_experiences_professionnelle");


                 }


                 if($status ==3){


                 	redirect("candidat/assistant_diplome");


                 }


                 if($status ==4){


                 	redirect("candidat/assistant_extra_prof");


                 }



                 if($status ==5){


                 	redirect("candidat/assistant_hobbie");


                 }


                 if($status ==6){


                 	redirect("candidat/assistant_langue");


                 }


                 if($status ==7){


                 	redirect("candidat/tableau_bords");


                 }


              }else{

                $this->se_connecter_error();


                 
              }



              

            }else
            {
              $this->se_connecter();

            }

    }

    function se_connecter_candidat($message){


    $this->form_validation->set_rules('email', 'nom d\'utilisateur', 'trim|required');
        $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
         
            
            if($this->form_validation->run()){
        

              $login=$this->input->post('email');
              $mdp=$this->input->post('pass');

              if($this->candidat_model->check_connection($login,$mdp)){


                $info_user=$this->candidat_model->getInfo_user($login,$mdp);
                foreach ($info_user as $info_u) {


                     $nom_prenom=$info_u->nom_candidat." ".$info_u->prenoms_candidat;
                     $id_admin=$info_u->id_candidat;
                     $status=$info_u->status;
                
                }


               


                $store_data_inSession = array(

                                                    
                                                  'id_admin'=> $id_admin,        
                                                  'nom_prenom'=> $nom_prenom,
                                                  'status'=> $status,
                                                                                              
                                                  
                                                  
                           );

               $this->session->set_userdata($store_data_inSession); 



                              



        


                 if($status ==0){


                  redirect("candidat/assistant_bienvenue");


                 }

                 if($status ==1){


                  redirect("candidat/assistant_information_generale");


                 }


                 if($status ==2){


                  redirect("candidat/assistant_experiences_professionnelle");


                 }


                 if($status ==3){


                  redirect("candidat/assistant_diplome");


                 }


                 if($status ==4){


                  redirect("candidat/assistant_extra_prof");


                 }



                 if($status ==5){


                  redirect("candidat/assistant_hobbie");


                 }


                 if($status ==6){


                  redirect("candidat/assistant_langue");


                 }


                 if($status ==7){


                  redirect("candidat/tableau_bords");


                 }


              }else{


                 
              }



              

            }else
            {

               $id_candidat=$message;

               $data["message"]=$this->candidat_model->getEmail_candidat($id_candidat);
               $this->load->view("se_connecter_view",$data);
              

            }

    }





    function assistant_bienvenue(){

         $this->load->view("assistant_bienvenue_view");

    }

    function assistant_fin(){

         $this->load->view("assistant_fin_view");

    }

    
    function assistant_information_generale(){

    	$this->form_validation->set_rules('nom', 'nom', 'trim|required');
     $this->form_validation->set_rules('prenom', 'prenom', 'trim|required');
     $this->form_validation->set_rules('date_naissance', 'date_naissance', 'trim|required');
     $this->form_validation->set_rules('lieu_naissance', 'lieu_naissance', 'trim|required');
     $this->form_validation->set_rules('nationnalite', 'nationnalite', 'trim|required');
     $this->form_validation->set_rules('email_candidat', 'email_candidat', 'trim|required');


     $this->form_validation->set_rules('tel_mob_1', 'tel_mob_1', 'trim|required');
     $this->form_validation->set_rules('tel_mob_2', 'tel_mob_2', 'trim');
     $this->form_validation->set_rules('tel_fix', 'tel_fix', 'trim');
     $this->form_validation->set_rules('select_marital', 'select_marital', 'trim|required');

     
        
        if($this->form_validation->run()){
    
          $nom=$this->input->post('nom');
          $prenom=$this->input->post('prenom');
          $date_naissance=$this->input->post('date_naissance');

          $lieu_naissance=$this->input->post('lieu_naissance');
          $nationnalite=$this->input->post('nationnalite');
          $email_candidat=$this->input->post('email_candidat');

          $tel_mob_1=$this->input->post('tel_mob_1');
          $tel_mob_2=$this->input->post('tel_mob_2');
          $tel_fix=$this->input->post('tel_fix');
          $nbre_enfants=$this->input->post('nbre_enfants');
          


          $select_marital=$this->input->post('select_marital');
          $telephone_contact=$this->input->post('telephone_contact');





          $id_candidat=$this->session->userdata('id_admin');
          

          $status=1;


         
          $data=array( 
                                
                                
                                'id_candidat' =>$id_candidat,
                                'nom_candidat' =>$nom,
                                'prenoms_candidat' =>$prenom,
                    
                                'telephone_fix' =>$tel_fix,
                                'date_naissance' =>$date_naissance,
                                'lieu_naissance' =>$lieu_naissance,

                                'nationnalite' =>$nationnalite,

                                'email_candidat' =>$email_candidat,
                                'telephone_mobil1' =>$tel_mob_1,
                                'telephone_mobil2' =>$tel_mob_2,

                                'nbre_enfants' =>$nbre_enfants,

                                'statut_marital' =>$select_marital,
                                'status' =>$status,
                             

                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/assistant_experiences_professionnelle");

                }else{

                     redirect("candidat");
                }



        }else{

            $id_candidat=$this->session->userdata('id_admin');

            $data["email_candidat"]=$this->candidat_model->get_email_candidat($id_candidat);
            $this->load->view("assistant_info_generale_view",$data);
        }

         

    }

 
     function ajout_information_generale(){

       

     
        



  }
    function assistant_experiences_professionnelle(){


     $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('description_poste', 'description_poste', 'trim|required');
     $this->form_validation->set_rules('entreprise', 'entreprise', 'trim|required');
     $this->form_validation->set_rules('autre_desc', 'autre_desc', 'trim');
     $this->form_validation->set_rules('poste_occupe', 'poste_occupe', 'trim|required');
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;
          
          $date1 = strtotime($date_debut_finale);
            $date2 = strtotime($date_fin_finale);
             
            // On récupère la différence de timestamp entre les 2 précédents
            $nbJoursTimestamp = $date2 - $date1;

            // ** Pour convertir le timestamp (exprimé en secondes) en jours **
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24

            $nb_annee_exp_candidat=0;
            if($nbJours >= 365){

                $nb_annee_exp_candidat=(int)($nbJours/365);

            }

            $nb_mois_exp_candidat=0;
            if($nbJours >= 30){

                $nb_mois_exp_candidat=(int)($nbJours/30);

            }

            $nb_jours_exp_candidat=$nbJours;



          
          $entreprise=$this->input->post('entreprise');
          $poste_occupe=$this->input->post('poste_occupe');
          $description_poste=$this->input->post('description_poste');
          $autre_desc=$this->input->post('autre_desc');
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          

         


         

          $data_exp=array( 

                        'date_debut_experience' =>$date_debut_finale,
                        'date_fin_experience' =>$date_fin_finale,
                        'entreprise' =>$entreprise,
                        'id_candidat' =>$id_candidat,

                        'description' =>$autre_desc,
                        'poste_occupe' =>$poste_occupe,
                        'description_poste' =>$description_poste,

                        'nb_annee_exp_candidat' =>$nb_annee_exp_candidat,
                        'nb_mois_exp_candidat' =>$nb_mois_exp_candidat,
                        'nb_jours_exp_candidat' =>$nb_jours_exp_candidat,
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp);

                print_r($data_clean);

                
                if($this->candidat_model->ajout_exp_pro($data_exp)){

                     redirect("candidat/assistant_experiences_professionnelle");

                }else{

                     redirect("candidat/assistant_experiences_professionnelle");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_exp_pro_candidat"]=$this->candidat_model->get_liste_exp_pro_candidat($id_candidat);
           $this->load->view("assistant_experience_professionnelle_view",$data);
        }

         

    }

    function assistant_exp_professionnelle(){




     $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('description_poste', 'description_poste', 'trim|required');
     $this->form_validation->set_rules('entreprise', 'entreprise', 'trim|required');
     $this->form_validation->set_rules('autre_desc', 'autre_desc', 'trim');
     $this->form_validation->set_rules('poste_occupe', 'poste_occupe', 'trim|required');
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $description_poste=$this->input->post('description_poste');
          $entreprise=$this->input->post('entreprise');
          $autre_desc=$this->input->post('autre_desc');
          $poste_occupe=$this->input->post('poste_occupe');
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          

         


         

          $data_exp=array( 

                        'date_debut_experience' =>$date_debut_finale,
                        'date_fin_experience' =>$date_fin_finale,
                        'entreprise' =>$entreprise,
                        'id_candidat' =>$id_candidat,

                        'description' =>$autre_desc,
                        'poste_occupe' =>$poste_occupe,
                        'description_poste' =>$description_poste,
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp);

               
                
                if($this->candidat_model->ajout_exp_pro($data_exp)){

                     redirect("candidat/experience_professionnelles");

                }else{

                     redirect("candidat/experience_professionnelles");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_exp_pro_candidat"]=$this->candidat_model->get_liste_exp_pro_candidat($id_candidat);
           $this->load->view("assistant_experience_professionnelle_view",$data);
        }

         

    }



    function redirige_diplome(){


      $id_candidat=$this->session->userdata('id_admin');
      $status=3;

      $data=array( 
                                
                              
                                'status' =>$status,
                             

                    );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/assistant_diplome");

                }else{

                     redirect("candidat");
                }



    }


    function assistant_diplome(){


     $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('lib_diplome', 'lib_diplome', 'trim|required');
     
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $commentaires=$this->input->post('commentaires');
          $lib_diplome=$this->input->post('lib_diplome');
          $niveau=$this->input->post('niveau');
          
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          

         


         

          $data_dipl=array( 

                        'libelle_diplome_candidat' =>$lib_diplome,
                        'date_debut' =>$date_debut_finale,
                        'date_fin' =>$date_fin_finale,
                        'id_candidat' =>$id_candidat,
                        'niveau' =>$niveau,
                        'commentaire' =>$commentaires,
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_dipl);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_diplome($data_clean)){

                     redirect("candidat/assistant_diplome");

                }else{

                     redirect("candidat/assistant_diplome");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_diplome_candidat($id_candidat);
           $this->load->view("assistant_diplome_view",$data);
        }

         

    }

     function assistant_diplome_direct(){


     $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('lib_diplome', 'lib_diplome', 'trim|required');
     
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $commentaires=$this->input->post('commentaires');
          $lib_diplome=$this->input->post('lib_diplome');
          
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          $niveau=$this->input->post('niveau');

          

         


         

          $data_dipl=array( 

                        'libelle_diplome_candidat' =>$lib_diplome,
                        'date_debut' =>$date_debut_finale,
                        'date_fin' =>$date_fin_finale,
                        'id_candidat' =>$id_candidat,

                        'niveau' =>$niveau,

                        'commentaire' =>$commentaires,
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_dipl);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_diplome($data_clean)){

                     redirect("candidat/ajout_diplomes_direct");

                }else{

                     redirect("candidat/ajout_diplomes_direct");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_diplome_candidat($id_candidat);
           $this->load->view("assistant_diplome_view",$data);
        }

         

    }


    function redirige_exp_extra_pro(){


      $id_candidat=$this->session->userdata('id_admin');
      $status=4;

      $data=array( 
                                
                              
                                'status' =>$status,
                             

                    );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/assistant_extra_prof");

                }else{

                     redirect("candidat");
                }




    }

    function redirige_hobbie(){


      $id_candidat=$this->session->userdata('id_admin');
      $status=5;

      $data=array( 
                                
                              
                                'status' =>$status,
                             

                    );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/assistant_hobbie");

                }else{

                     redirect("candidat");
                }
    

    }
    function redirige_langue(){


      $id_candidat=$this->session->userdata('id_admin');
      $status=6;

      $data=array( 
                                
                              
                                'status' =>$status,
                             

                    );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/assistant_langue");

                }else{

                     redirect("candidat");
                }
    

    }
    function redirige_tableau_bords(){


      $id_candidat=$this->session->userdata('id_admin');
      $status=7;

      $data=array( 
                                
                              
                                'status' =>$status,
                             

                    );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/assistant_fin");

                }else{

                     redirect("candidat");
                }
    

    }
    function assistant_extra_prof(){

      


     $this->form_validation->set_rules('date_debut', 'date_debut', 'trim|required');
     $this->form_validation->set_rules('date_fin', 'date_fin', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim');
     
    
    
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $commentaire=$this->input->post('commentaire');
        
          $id_candidat=$this->session->userdata('id_admin');

          $entreprise=$this->input->post('entreprise');
          $poste_occupe=$this->input->post('poste_occupe');
          

         


         

          $data_exp_pro=array( 

                        'date_debut_extra_experience' =>$date_debut_finale,
                        'date_fin_extra_experience' =>$date_fin_finale,

                        'entreprise' =>$entreprise,
                        'poste_occupe' =>$poste_occupe,

                        'commentaire' =>$commentaire,
                        'id_candidat' =>$id_candidat,

                        
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp_pro);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_exp_extra_pro($data_clean)){

                     redirect("candidat/assistant_extra_prof");

                }else{

                     redirect("candidat/assistant_extra_prof");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_exp_extra_pro"]=$this->candidat_model->get_liste_expe_extra_pro($id_candidat);
           $this->load->view("assistant_extra_prof_view",$data);
        }


         

    }

    function assistant_extra_prof_direct(){

      


     $this->form_validation->set_rules('date_debut', 'date_debut', 'trim|required');
     $this->form_validation->set_rules('date_fin', 'date_fin', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim');
     
    
    
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $commentaire=$this->input->post('commentaire');
         
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          

         


         

          $data_exp_pro=array( 

                        'date_debut_extra_experience' =>$date_debut_finale,
                        'date_fin_extra_experience' =>$date_fin_finale,
                        'commentaire' =>$commentaire,
                        'id_candidat' =>$id_candidat,

                        
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp_pro);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_exp_extra_pro($data_clean)){

                     redirect("candidat/experience_extra_professionnelle");

                }else{

                     redirect("candidat/experience_extra_professionnelle");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_exp_extra_pro"]=$this->candidat_model->get_liste_expe_extra_pro($id_candidat);
           $this->load->view("assistant_extra_prof_view",$data);
        }


         

    }
    

    function assistant_hobbie(){

     $this->form_validation->set_rules('select_loi', 'select_loi', 'trim|required');
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
    

          
          $select_loi=$this->input->post('select_loi');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_hobbie=array( 

                        'loisir' =>$select_loi,
                        'commentaire' =>$commentaires,
                        
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_hobbie);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_loisir($data_clean)){

                     redirect("candidat/assistant_hobbie");

                }else{

                     redirect("candidat/assistant_hobbie");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_hobbie"]=$this->candidat_model->get_liste_hobbie($id_candidat);
           $this->load->view("assistant_hobbie_view",$data);

        }

   

         
    }


    function loisir_direct(){

     $this->form_validation->set_rules('select_loi', 'select_loi', 'trim|required');
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
    

          
          $select_loi=$this->input->post('select_loi');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_hobbie=array( 

                        'loisir' =>$select_loi,
                        'commentaire' =>$commentaires,
                        
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_hobbie);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_loisir($data_clean)){

                     redirect("candidat/assistant_hobbie");

                }else{

                     redirect("candidat/assistant_hobbie");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_hobbie"]=$this->candidat_model->get_liste_hobbie($id_candidat);
           $this->load->view("loisir_direct_view",$data);

        }

   

         
    }
    function assistant_langue(){
  


$this->form_validation->set_rules('langue', 'langue', 'trim|required');
$this->form_validation->set_rules('select_niveau', 'select_niveau', 'trim|required');
$this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
    

          
          $langue=$this->input->post('langue');
          $select_niveau=$this->input->post('select_niveau');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_langue=array( 

                        'langue' =>$langue,
                        'niveau_langue' =>$select_niveau,
                        'commentaire' =>$commentaires,
                          
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_langue);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_langue($data_clean)){

                     redirect("candidat/assistant_langue");

                }else{

                     redirect("candidat/assistant_langue");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_langue"]=$this->candidat_model->get_liste_langue($id_candidat);
          $this->load->view("assistant_langue_view",$data);

        }

         

    }

  function se_connecter(){


		$this->load->view("se_connecter_view");
	}


  function se_connecter_error(){

    $data["error"]="ok";
    $this->load->view("se_connecter_view",$data);
  }


   function tableau_bords(){



        if($this->session->userdata('id_admin')){

          $id_candidat=$this->session->userdata('id_admin');
          $data["liste_des_offres"]=$this->candidat_model->compterOffresEmploi();
          $data["mes_offres_emploi"]=$this->candidat_model->compterMesOffresEmploi($id_candidat);
          $data["liste_5_dernieres_offres"]=$this->candidat_model->get_liste_5_dernieres_offres_emplois();



        	$this->load->view("main_view",$data);

        }else{


        	redirect("candidat");
        } 
         
                   
		
	}

	function toutes_offres(){


		$this->load->view("tous_offre_view");
	}

  function tous_offres(){

    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_offres"]=$this->candidat_model->getListe_offre($id_candidat);
    $this->load->view("tous_offres_view",$data);
  }

	function mes_offres(){

    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_offres_candidat"]=$this->candidat_model->getListe_offre_candidat($id_candidat);
		$this->load->view("mes_offres_view",$data);
	}

   public function uploadPhotoCandidat()
    {
       if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/candidat';
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
                         
                  $id_candidat=$this->session->userdata('id_admin');

                  $data=array( 
                                
                                'id_candidat' =>$id_candidat,
                                'url_img' =>$image_name,
 
                               );
                    if($this->candidat_model->ajout_photo_candidat($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }
    }

    public function updateUploadPhotoCandidat()
    {
       if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/candidat';
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
                         
                  $id_candidat=$this->session->userdata('id_admin');

                  $data=array( 
                                
                                
                                'url_img' =>$image_name,
 
                               );
                    if($this->candidat_model->modifier_photo_candidat($id_candidat,$data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }
    }

  function information_general(){

  $this->form_validation->set_rules('nom', 'nom', 'trim|required');
     $this->form_validation->set_rules('prenom', 'prenom', 'trim|required');
     $this->form_validation->set_rules('date_naissance', 'date_naissance', 'trim|required');
     $this->form_validation->set_rules('lieu_naissance', 'lieu_naissance', 'trim|required');
     
     $this->form_validation->set_rules('email_candidat', 'email_candidat', 'trim|required');


     $this->form_validation->set_rules('tel_mob_1', 'tel_mob_1', 'trim|required');
     $this->form_validation->set_rules('tel_mob_2', 'tel_mob_2', 'trim');
     $this->form_validation->set_rules('tel_fix', 'tel_fix', 'trim');
     $this->form_validation->set_rules('select_marital', 'select_marital', 'trim|required');

     
        
        if($this->form_validation->run()){
    
          $nom=$this->input->post('nom');
          $prenom=$this->input->post('prenom');
          

          $date_naissance=$this->input->post('date_naissance');
          $mois_d=substr($date_naissance, 0,2);
          $jour_d=substr($date_naissance, 3,2);
          $annee_d=substr($date_naissance, 6,4);

          $date_naissance_finale=$annee_d."/".$mois_d."/".$jour_d;

          $lieu_naissance=$this->input->post('lieu_naissance');
          
          $email_candidat=$this->input->post('email_candidat');

          $tel_mob_1=$this->input->post('tel_mob_1');
          $tel_mob_2=$this->input->post('tel_mob_2');
          $tel_fix=$this->input->post('tel_fix');
          $nbre_enfants=$this->input->post('nbre_enfants');


          $select_marital=$this->input->post('select_marital');
          $telephone_contact=$this->input->post('telephone_contact');
          $nationnalite=$this->input->post('nationnalite');





          $id_candidat=$this->session->userdata('id_admin');
          

          $status=1;


         
          $data=array( 
                                
                                
                                'id_candidat' =>$id_candidat,
                                'nom_candidat' =>$nom,
                                'prenoms_candidat' =>$prenom,
                    
                                'telephone_fix' =>$tel_fix,
                                'date_naissance' =>$date_naissance_finale,
                                'lieu_naissance' =>$lieu_naissance,

                                'nationnalite' =>$nationnalite,
                                

                                'email_candidat' =>$email_candidat,
                                'telephone_mobil1' =>$tel_mob_1,
                                'telephone_mobil2' =>$tel_mob_2,

                                'nbre_enfants' =>$nbre_enfants,

                                'statut_marital' =>$select_marital,
                                'status' =>$status,
                             

                            );


        

                $data_clean = $this->security->xss_clean($data);

                
                if($this->candidat_model->modifier_candidat($id_candidat,$data_clean)){

                     redirect("candidat/information_general");

                }else{

                     redirect("candidat");
                }



        }else{


             $id_candidat=$this->session->userdata('id_admin');
              $data["info_candidat"]=$this->candidat_model->get_liste_infogeneral_candidat($id_candidat);
              $this->load->view("information_general_view",$data);
        }

   
	}

	function experience_professionnelles(){

    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_exp_pro"]=$this->candidat_model->get_liste_exp_pro_candidat($id_candidat);

		$this->load->view("experience_professionnelles_view",$data);
	}

	function ajout_experience_professionnelles(){




     $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('entreprise', 'entreprise', 'trim|required');
     $this->form_validation->set_rules('poste_occupe', 'poste_occupe', 'trim|required');
     $this->form_validation->set_rules('description_poste', 'description_poste', 'trim');
     $this->form_validation->set_rules('autre_desc', 'autre_desc', 'trim');
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;


           

            

            $date1 = strtotime($date_debut_finale);
            $date2 = strtotime($date_fin_finale);
             
            // On récupère la différence de timestamp entre les 2 précédents
            $nbJoursTimestamp = $date2 - $date1;

            // ** Pour convertir le timestamp (exprimé en secondes) en jours **
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24

            $nb_annee_exp_candidat=0;
            if($nbJours >= 365){

                $nb_annee_exp_candidat=(int)($nbJours/365);

            }

            $nb_mois_exp_candidat=0;
            if($nbJours >= 30){

                $nb_mois_exp_candidat=(int)($nbJours/30);

            }

            $nb_jours_exp_candidat=$nbJours;



          
          $entreprise=$this->input->post('entreprise');
          $poste_occupe=$this->input->post('poste_occupe');
          $description_poste=$this->input->post('description_poste');
          $autre_desc=$this->input->post('autre_desc');
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          

         


         

          $data_exp=array( 

                        'date_debut_experience' =>$date_debut_finale,
                        'date_fin_experience' =>$date_fin_finale,
                        'entreprise' =>$entreprise,
                        'id_candidat' =>$id_candidat,

                        'description' =>$autre_desc,
                        'poste_occupe' =>$poste_occupe,
                        'description_poste' =>$description_poste,

                        'nb_annee_exp_candidat' =>$nb_annee_exp_candidat,
                        'nb_mois_exp_candidat' =>$nb_mois_exp_candidat,
                        'nb_jours_exp_candidat' =>$nb_jours_exp_candidat,
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp);

               

                
                if($this->candidat_model->ajout_exp_pro($data_exp)){

                     redirect("candidat/ajout_experience_professionnelles");

                }else{

                     redirect("candidat/ajout_experience_professionnelles");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_exp_pro_candidat"]=$this->candidat_model->get_liste_exp_pro_candidat($id_candidat);
          $this->load->view("ajout_experience_professionnelles_view");
        }


		
	}
  function ajout_exp_professionnelles(){
    $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('entreprise', 'entreprise', 'trim|required');
     $this->form_validation->set_rules('poste_occupe', 'poste_occupe', 'trim|required');
     $this->form_validation->set_rules('description_poste', 'description_poste', 'trim');
     $this->form_validation->set_rules('autre_desc', 'autre_desc', 'trim');
     

        
        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $entreprise=$this->input->post('entreprise');
          $poste_occupe=$this->input->post('poste_occupe');
          $description_poste=$this->input->post('description_poste');
          $autre_desc=$this->input->post('autre_desc');
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          

         


         

          $data_exp=array( 

                        'date_debut_experience' =>$date_debut_finale,
                        'date_fin_experience' =>$date_fin_finale,
                        'entreprise' =>$entreprise,
                        'id_candidat' =>$id_candidat,

                        'description' =>$autre_desc,
                        'poste_occupe' =>$poste_occupe,
                        'description_poste' =>$description_poste,
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp);

                print_r($data_clean);

                
                if($this->candidat_model->ajout_exp_pro($data_exp)){

                     redirect("candidat/experience_professionnelles");

                }else{

                     redirect("candidat/experience_professionnelles");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_exp_pro_candidat"]=$this->candidat_model->get_liste_exp_pro_candidat($id_candidat);
          $this->load->view("ajout_exp_professionnelle_view");
        }


    
  }

	function mes_diplomes(){
    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_diplome_candidat($id_candidat);
		$this->load->view("mes_diplomes_view",$data);
	}

	function ajout_diplomes(){


     $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('lib_diplome', 'lib_diplome', 'trim|required');
     
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    

        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $commentaires=$this->input->post('commentaires');
          $lib_diplome=$this->input->post('lib_diplome');
          
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          
          $data_dipl=array( 

                        'libelle_diplome_candidat' =>$lib_diplome,
                        'date_debut' =>$date_debut_finale,
                        'date_fin' =>$date_fin_finale,
                        'id_candidat' =>$id_candidat,

                        'commentaire' =>$commentaires,
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_dipl);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_diplome($data_clean)){

                     redirect("candidat/ajout_diplomes");

                }else{

                     redirect("candidat/ajout_diplomes");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_diplome_candidat($id_candidat);
           $this->load->view("ajout_diplomes_view");
        }


		
	}
  function ajout_diplomes_direct(){
    
    $this->form_validation->set_rules('date_de_debut', 'date_de_debut', 'trim|required');
     $this->form_validation->set_rules('date_de_fin', 'date_de_fin', 'trim|required');
     $this->form_validation->set_rules('lib_diplome', 'lib_diplome', 'trim|required');
     
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    

        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_de_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_de_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;



          
          $commentaires=$this->input->post('commentaires');
          $lib_diplome=$this->input->post('lib_diplome');

          $niveau=$this->input->post('niveau');
          
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          
          $data_dipl=array( 

                        'libelle_diplome_candidat' =>$lib_diplome,
                        'date_debut' =>$date_debut_finale,
                        'date_fin' =>$date_fin_finale,
                        'id_candidat' =>$id_candidat,
                        'niveau' =>$niveau,

                        'commentaire' =>$commentaires,
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_dipl);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_diplome($data_clean)){

                     redirect("candidat/mes_diplomes");

                }else{

                     redirect("candidat/mes_diplomes");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_diplome_candidat($id_candidat);
           $this->load->view("ajout_diplome_directe_view");
        }
    
  }

	function ajout_experience_extra_professionnelle(){


     $this->form_validation->set_rules('date_debut', 'date_debut', 'trim|required');
     $this->form_validation->set_rules('date_fin', 'date_fin', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim');
     
     
    

        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;

          $commentaires=$this->input->post('commentaire');
          
          
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          
          $data_exp_p=array( 

                        
                        'date_debut_extra_experience' =>$date_debut_finale,
                        'date_fin_extra_experience' =>$date_fin_finale,
                        'id_candidat' =>$id_candidat,

                        'commentaire' =>$commentaires,
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp_p);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_exp_extra_pro($data_clean)){

                     redirect("candidat/ajout_experience_extra_professionnelle");

                }else{

                     redirect("candidat/ajout_experience_extra_professionnelle");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_expe_extra_pro($id_candidat);
          $this->load->view("ajout_experience_extra_professionnelle_view" );
  }
        }

    
		

  function ajout_experience_extra_professionnelle_direct(){


    $this->form_validation->set_rules('date_debut', 'date_debut', 'trim|required');
     $this->form_validation->set_rules('date_fin', 'date_fin', 'trim|required');
     $this->form_validation->set_rules('commentaire', 'commentaire', 'trim');
     
     
    

        if($this->form_validation->run()){
    
          $date_debut=$this->input->post('date_debut');
          $mois_d=substr($date_debut, 0,2);
          $jour_d=substr($date_debut, 3,2);
          $annee_d=substr($date_debut, 6,4);

          $date_debut_finale=$annee_d."/".$mois_d."/".$jour_d;


          $date_fin=$this->input->post('date_fin');

          $mois_f=substr($date_fin, 0,2);
          $jour_f=substr($date_fin, 3,2);
          $annee_f=substr($date_fin, 6,4);

          $date_fin_finale=$annee_f."/".$mois_f."/".$jour_f;

          $commentaires=$this->input->post('commentaire');
          

          $poste_occupe=$this->input->post('poste_occupe');
          $entreprise=$this->input->post('entreprise');
          
          
       
       
       
          $id_candidat=$this->session->userdata('id_admin');
          
          $data_exp_p=array( 

                        
                        'date_debut_extra_experience' =>$date_debut_finale,
                        'date_fin_extra_experience' =>$date_fin_finale,
                        'id_candidat' =>$id_candidat,

                        'poste_occupe' =>$poste_occupe,
                        'entreprise' =>$entreprise,

                        'commentaire' =>$commentaires,
                        
                          
                          
                     );


        

                $data_clean = $this->security->xss_clean($data_exp_p);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_exp_extra_pro($data_clean)){

                     redirect("candidat/experience_extra_professionnelle");

                }else{

                     redirect("candidat/experience_extra_professionnelle");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_dipl_candidat"]=$this->candidat_model->get_liste_expe_extra_pro($id_candidat);
          $this->load->view("ajout_exp_extra_pro_view" );
  }
    
    
  }

	function experience_extra_professionnelle(){
    
    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_exp_extra_pro"]=$this->candidat_model->get_liste_expe_extra_pro($id_candidat);
		$this->load->view("experience_extra_professionnelle_view",$data);
	}



	function langues(){
    
    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_langue"]=$this->candidat_model->get_liste_langue($id_candidat);
		$this->load->view("langues_view",$data);
	}
	function ajout_langues(){


$this->form_validation->set_rules('langue', 'langue', 'trim|required');
$this->form_validation->set_rules('select_niveau', 'select_niveau', 'trim|required');
$this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
    

          
          $langue=$this->input->post('langue');
          $select_niveau=$this->input->post('select_niveau');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_langue=array( 

                        'langue' =>$langue,
                        'niveau_langue' =>$select_niveau,
                        'commentaire' =>$commentaires,
                          
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_langue);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_langue($data_clean)){

                     redirect("candidat/ajout_langues");

                }else{

                     redirect("candidat/ajout_langues");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_langue"]=$this->candidat_model->get_liste_langue($id_candidat);
          $this->load->view("ajout_langues_view");

        }


		
	}


    function ajout_langues_directe(){


$this->form_validation->set_rules('langue', 'langue', 'trim|required');
$this->form_validation->set_rules('select_niveau', 'select_niveau', 'trim|required');
$this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
    

          
          $langue=$this->input->post('langue');
          $select_niveau=$this->input->post('select_niveau');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_langue=array( 

                        'langue' =>$langue,
                        'niveau_langue' =>$select_niveau,
                        'commentaire' =>$commentaires,
                          
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_langue);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_langue($data_clean)){

                     redirect("candidat/langue_direct");

                }else{

                     redirect("candidat/langue_direct");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_langue"]=$this->candidat_model->get_liste_langue($id_candidat);
          $this->load->view("ajout_langue_direct_view");

        }


    
  }

  function langue_direct(){

$this->form_validation->set_rules('langue', 'langue', 'trim|required');
$this->form_validation->set_rules('select_niveau', 'select_niveau', 'trim|required');
$this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
    

          
          $langue=$this->input->post('langue');
          $select_niveau=$this->input->post('select_niveau');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_langue=array( 

                        'langue' =>$langue,
                        'niveau_langue' =>$select_niveau,
                        'commentaire' =>$commentaires,
                          
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_langue);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_langue($data_clean)){

                     redirect("candidat/assistant_langue");

                }else{

                     redirect("candidat/assistant_langue");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_langue"]=$this->candidat_model->get_liste_langue($id_candidat);
          $this->load->view("langue_direct_view",$data);

        }
    
  }

	function loisire(){

    $id_candidat=$this->session->userdata('id_admin');
    $data["liste_hobbie"]=$this->candidat_model->get_liste_hobbie($id_candidat);
		$this->load->view("loisire_view",$data);
	}

	function ajout_loisire(){

     $this->form_validation->set_rules('select_loi', 'select_loi', 'trim|required');
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
          
          $select_loi=$this->input->post('select_loi');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_hobbie=array( 

                        'loisir' =>$select_loi,
                        'commentaire' =>$commentaires,
                        
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_hobbie);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_loisir($data_clean)){

                     redirect("candidat/ajout_loisire");

                }else{

                     redirect("candidat/ajout_loisire");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_hobbie"]=$this->candidat_model->get_liste_hobbie($id_candidat);
            $this->load->view("ajout_loisire_view");
        }
      
		
	}
  function ajout_loisire_direct(){

    $this->form_validation->set_rules('select_loi', 'select_loi', 'trim|required');
     $this->form_validation->set_rules('commentaires', 'commentaires', 'trim');
    
  
        if($this->form_validation->run()){
          
          $select_loi=$this->input->post('select_loi');
          $commentaires=$this->input->post('commentaires');
  
          $id_candidat=$this->session->userdata('id_admin');
          

          $data_hobbie=array( 

                        'loisir' =>$select_loi,
                        'commentaire' =>$commentaires,
                        
                        'id_candidat' =>$id_candidat,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_hobbie);

                print_r($data_clean);
                

                
                if($this->candidat_model->ajout_loisir($data_clean)){

                     redirect("candidat/loisir_direct");

                }else{

                     redirect("candidat/loisir_direct");
                }



        }else{

           $id_candidat=$this->session->userdata('id_admin');
           $data["liste_hobbie"]=$this->candidat_model->get_liste_hobbie($id_candidat);
            $this->load->view("ajout_loisire_direct_view");
        }

    
  
   
  }

   function monprofil(){

    $id_candidat=$this->session->userdata('id_admin');
    $data["info_candidat"]=$this->candidat_model->get_liste_infogeneral_candidat($id_candidat);
    $this->load->view("monprofil_view",$data);
  }


  function supprim_experience_pro($id_experience){

    $this->candidat_model->supprim_exp_pro($id_experience);
    redirect("candidat/experience_professionnelles");
  }

  function supprim_diplome($id_diplome_candidat){

    $this->candidat_model->supprim_diplomes($id_diplome_candidat);
    redirect("candidat/mes_diplomes");
  }

  function supprim_exp_extra_pro($id_experience_extra_pro_cand){

    $this->candidat_model->supprim_exp_ex_prof($id_experience_extra_pro_cand);
    redirect("candidat/experience_extra_professionnelle");
  }

  function supprim_hobbie($id_loisir_candidat){

    $this->candidat_model->supprim_hobbies($id_loisir_candidat);
    redirect("candidat/loisir_direct");
  }
  function supprim_langues($id_langue_candidat){

    $this->candidat_model->supprim_langue($id_langue_candidat);
    redirect("candidat/langue_direct");
  }

  function supprim_assistant_diplome($id_diplome_candidat){

    $this->candidat_model->supprim_assistant_diplomes($id_diplome_candidat);
    redirect("candidat/assistant_diplome");
  }
  function supprim_assistant_expe_pro($id_experience){

    $this->candidat_model->supprim_assistant_exp_pro($id_experience);
    redirect("candidat/assistant_experiences_professionnelle");
  }

  function supprim_assistant_expe_extr_pro($id_experience_extra_pro_cand){

    $this->candidat_model->supprim_assistant_exp_extra_pro($id_experience_extra_pro_cand);
    redirect("candidat/assistant_extra_prof");
  }

  function supprim_assistant_hobbies($id_loisir_candidat){

    $this->candidat_model->supprim_assistant_hobbie($id_loisir_candidat);
    redirect("candidat/assistant_hobbie");
  }

  function supprim_assistant_langue($id_langue_candidat){

    $this->candidat_model->supprim_assistant_langues($id_langue_candidat);
    redirect("candidat/assistant_langue");
  }


  function details_offre($id_offre){

    $data["id_offre"]=$id_offre;
    $data["id_candidat"]=$this->session->userdata('id_admin');

    $data["infos_offre"]=$this->candidat_model->get_info_offre_id($id_offre);
    $this->load->view("details_offre_view",$data);
  }


  function postuler_maintenant($id_offre,$id_candidat){


    $status=0;
    $data_offre_candidat=array( 

                        'id_offre' =>$id_offre,
                        'id_candidat' =>$id_candidat,        
                        'status' =>$status,
 
                     );


        

                $data_clean = $this->security->xss_clean($data_offre_candidat);

               

                
                if($this->candidat_model->ajout_liaison_offre_candidat($data_clean)){

                     redirect("candidat/tous_offres");

                }else{

                     redirect("candidat/tous_offres");
                }



  }

  function desouscrire($id_offre){

      $data["id_offre"]=$id_offre;
      $this->load->view("desouscrire_view",$data);

    }

    function desouscrire_maintenant(){

      $id_offre=$this->input->post('id_offre');
      $commentaire=$this->input->post('commentaire');
      $id_candidat=$this->session->userdata('id_admin');


      $status=1;
      $data_offre_candidat=array( 

                         
                        'status' =>$status,
 
                     );

               

                
                if($this->candidat_model->modifier_liaison_offre_candidat($id_offre,$id_candidat,$data_offre_candidat)){

                     redirect("candidat/tous_offres");

                }else{

                     redirect("candidat/tous_offres");
                }

      echo $id_offre." ".$commentaire;
      

  }


  function logout(){


        session_destroy();
        redirect("candidat");
    }

	







}