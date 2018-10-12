<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate extends MX_Controller {
        
    public function __construct()
	{
	
		parent::__construct();
                
          $this->load->model('corporate_model');  
      	
	}


    function index(){


         $data["nb_offre"]=$this->corporate_model->nbOffre();
         $data["liste_5_categorie"]=$this->corporate_model->liste_5_dernieres_categorie();
         $data["liste_6_dernieres_offre"]=$this->corporate_model->liste_6_dernieres_offre();
         
         $this->load->view("main_view",$data);
    }

    function se_connecter(){

         $this->load->view("inscrire_connecter_view");
    }

    function inscription_candidat(){




    $this->form_validation->set_rules('email', 'nom d\'utilisateur', 'trim|required');
    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
     
        
        if($this->form_validation->run()){
    
          $id_offre=$this->input->post('id_offre');
          $email=$this->input->post('email');
          $pass=$this->input->post('pass');

          $id_candidat=$this->corporate_model->clePrimaire(8);

          $data=array( 
                                
                                'id_candidat' =>$id_candidat, 
                                'email_candidat' =>$email,
                                'login_candidat' =>$email,
                                'mdp_candidat' =>$pass,
                                
                                
          
                            );

          $this->corporate_model->ajout_candidat($data);

          $data_offre_candidat=array( 
                                
                                'id_offre' =>$id_offre, 
                                'id_candidat' =>$id_candidat,
                              
                                
                                
          
                            );

          $this->corporate_model->ajout_lia_offre_candidat($data_offre_candidat);


          $to_email=$email;
          $message="<h4>Votre inscription à ISTJOB à été effectué avec succès !</h4><br><br> Vos paramètres de connexions sont les suivants : <br><b>Lien :</b> <a href='http://istjobs.com/candidat/'>http://istjobs.com/candidat/</a><br><b>login :</b> ".$email."<br><b>Mot de passe :</b>".$pass;

          $this->envoi_mail($to_email,$message);
          redirect("candidat/se_connecter_candidat/".$id_candidat);
          



          

        }else
        {


          $this->se_connecter();

        }
    }

     function se_connecter_candidat(){


       $this->form_validation->set_rules('email', 'nom d\'utilisateur', 'trim|required');
        $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
         
            
            if($this->form_validation->run()){
        

              $login=$this->input->post('email');
              $mdp=$this->input->post('pass');

              if($this->corporate_model->check_connection($login,$mdp)){


                $info_user=$this->corporate_model->getInfo_user($login,$mdp);
                foreach ($info_user as $info_u) {


                     $nom_prenom=$info_u->nom_candidat." ".$info_u->prenoms_candidat;
                     $id_admin=$info_u->id_candidat;
                
                }


               


                $store_data_inSession = array(

                                                    
                                                  'id_admin'=> $id_admin,        
                                                  'nom_prenom'=> $nom_prenom,
                                                                                              
                                                  
                                                  
                           );

               $this->session->set_userdata($store_data_inSession);


                      


                 redirect("http://recrutement.istjob.local/candidat/tableau_bords/".$id_admin);


              }else{


                 redirect("administration");
              }



              

            }else
            {
              $this->se_connecter();

            }
    }

    function se_connecter_directement(){

         $this->load->view("se_connecter_directement_view");
    }

    function mdp_oublier(){

         $this->load->view("mdp_oublier_view");
    }



    function toutes_les_offres(){

         $data["liste_offres"]=$this->corporate_model->liste_offre_tous();
         $data["liste_5_categorie"]=$this->corporate_model->liste_5_dernieres_categorie();
         $this->load->view("toutes_les_offres_view",$data);
    }
    function details_emploi($id_offre){

         $data["id_offre"]=$id_offre;
         $data["info_offre"]=$this->corporate_model->get_info_offre($id_offre);
         $this->load->view("detail_emploi_view",$data);
    }


    function poster_offre(){


    //valeur post offre emploi
    $this->form_validation->set_rules('intitule_offre', 'intitule_offre', 'trim|required');
    $this->form_validation->set_rules('type_emplois', 'type_emplois', 'trim');
    
    $this->form_validation->set_rules('categorie_pro', 'categorie_pro', 'trim');
    $this->form_validation->set_rules('description', 'description', 'trim|required');
    $this->form_validation->set_rules('lieu_travail', 'lieu_travail', 'trim');
    $this->form_validation->set_rules('salaire', 'salaire', 'trim');

    //valeur post entreprise
    $this->form_validation->set_rules('rccm', 'rccm', 'trim|required');
    $this->form_validation->set_rules('raison_social', 'raison_social', 'trim|required');
    $this->form_validation->set_rules('localisation_entreprise', 'localisation_entreprise', 'trim|required');
    $this->form_validation->set_rules('email_entreprise', 'email_entreprise', 'trim|required');
    $this->form_validation->set_rules('telephone_entreprise', 'telephone_entreprise', 'trim|required');
    $this->form_validation->set_rules('site_internet', 'site_internet', 'trim');

    //valeur post responsable entreprise
    $this->form_validation->set_rules('nom_responsable', 'nom_responsable', 'trim');
    $this->form_validation->set_rules('prenoms_responsable', 'prenoms_responsable', 'trim');
    $this->form_validation->set_rules('telephone_responsable', 'telephone_responsable', 'trim');
    $this->form_validation->set_rules('email_responsable', 'email_responsable', 'trim');

    //valeur post agent recruteur
    $this->form_validation->set_rules('nom_recruteur_interne', 'nom_recruteur_interne', 'trim');
    $this->form_validation->set_rules('prenoms_recruteur_interne', 'prenoms_recruteur_interne', 'trim');
    $this->form_validation->set_rules('telephone_recruteur_interne', 'telephone_recruteur_interne', 'trim');
    $this->form_validation->set_rules('email_recruteur_interne', 'email_recruteur_interne', 'trim');
    $this->form_validation->set_rules('titre_recruteur_interne', 'titre_recruteur_interne', 'trim');

        
        if($this->form_validation->run()){

         //valeur post offre emploi

          $intitule_offre=$this->input->post('intitule_offre');
          
          
          $categorie_pro=$this->input->post('categorie_pro');
          $description=$this->input->post('description');
          $lieu_travail=$this->input->post('lieu_travail');
          $salaire=$this->input->post('salaire');
          $status_offre=3;

         //valeur post entreprise
          
          $rccm=$this->input->post('rccm');
          $raison_social=$this->input->post('raison_social');
          $localisation_entreprise=$this->input->post('localisation_entreprise');
          $email_entreprise=$this->input->post('email_entreprise');
          $telephone_entreprise=$this->input->post('telephone_entreprise');
          $site_internet=$this->input->post('site_internet');
          
           //valeur post responsable entreprise
          $nom_responsable=$this->input->post('nom_responsable');
          $prenoms_responsable=$this->input->post('prenoms_responsable');
          $telephone_responsable=$this->input->post('telephone_responsable');
          $email_responsable=$this->input->post('email_responsable');
          $login_entreprise=$email_entreprise;
          $mdp_entreprise=$this->corporate_model->clePrimaire(8);
         
          //valeur post agent recruteur
          $nom_recruteur_interne=$this->input->post('nom_recruteur_interne');
          $prenoms_recruteur_interne=$this->input->post('prenoms_recruteur_interne');
          $telephone_recruteur_interne=$this->input->post('telephone_recruteur_interne');
          $email_recruteur_interne=$this->input->post('email_recruteur_interne');
          $titre_recruteur_interne=$this->input->post('titre_recruteur_interne');
          
         


         

          $id_offre=$this->corporate_model->clePrimaire(8);
          $id_entreprise=$this->corporate_model->clePrimaire(8);

          

          $data_offre=array( 

                                'id_offre' =>$id_offre, 
                                'intitule_offre' =>$intitule_offre, 
                                
                                'profil_poste' =>$description,
                                'lieu_travail' =>$lieu_travail,
                                'salaire' =>$salaire, 
                                'status_offre' =>$status_offre,
                                'id_entreprise' =>$id_entreprise, 
                                 
          
                            );

          $data_entreprise=array(  
           
          
                                
                                'id_entreprise' =>$id_entreprise, 
                                'rccm' =>$rccm, 
                                'raison_social' =>$raison_social, 
                                'localisation_entreprise' =>$localisation_entreprise,
                                'email_entreprise' =>$email_entreprise, 
                                'telephone_entreprise' =>$telephone_entreprise, 
                                'site_internet' =>$site_internet,

                                'login_entreprise' =>$login_entreprise,
                                'mdp_entreprise' =>$mdp_entreprise, 

                                


                                'nom_responsable' =>$nom_responsable,
                                'prenoms_responsable' =>$prenoms_responsable,
                                'email_responsable' =>$email_responsable,
                                'telephone_responsable' =>$telephone_responsable, 


                                'nom_recruteur_interne' =>$nom_recruteur_interne, 
                                'prenoms_recruteur_interne' =>$prenoms_recruteur_interne,
                                'telephone_recruteur_interne' =>$telephone_recruteur_interne, 
                                'email_recruteur_interne' =>$email_recruteur_interne,
                                'titre_recruteur_interne' =>$titre_recruteur_interne,
                                

                             
                            );

          $data_liaison_cat_offre=array( 
          
                                
                                'id_offre' =>$id_offre, 
                                'id_categorie_pro' =>$categorie_pro, 
                                
                            );

          

          $this->corporate_model->ajout_offre($data_offre);
          $this->corporate_model->ajout_entreprise($data_entreprise);
          $this->corporate_model->ajout_cat_pro($data_liaison_cat_offre);

          $to_email=$email_entreprise;
          $message="<h4>Votre offre d'emploi <b>'".$intitule_offre."'</b> a été enregistrée avec succès, mais cependant n'est pas encore visible par tous !<br> 
             Pour la rendre visible par tous veuillez contacter notre equipe via <b> +225 21 25 27 01 / 21 25 17 26 </b>
             <br> vous pouvez cependant suivre le status de publication de votre offre via notre plateforme dediée aux entreprise
               <br> <b>Lien : </b> <a href='http://istjobs.com/entreprise'>http://istjobs.com/entreprise</a><br>
               <b>Mot de passe : </b>".$mdp_entreprise." </h4> ";

          $this->envoi_mail_publication_entreprise($to_email,$message);
         
          
         $this->enregistrement_offre();
          



          

        }else
        {

          $data["liste_cat_pro"]=$this->corporate_model->liste_Categorie_pro();
         $this->load->view("poster_offre_view",$data);



        }

         
    }




   

    function emploi_directe(){

         $data["liste_offres"]=$this->corporate_model->liste_offre_emploi_directe();
         $data["liste_5_categorie"]=$this->corporate_model->liste_5_dernieres_categorie();
         $this->load->view("emploi_directe_view",$data);
    }

    function emploi_par_categorie($id_categorie_pro){

         $data["compter_offre"]=$this->corporate_model->compter_id_categorie_par_offre($id_categorie_pro);

         $data["categorie_professionnelle"]=$this->corporate_model->get_nom_categorie($id_categorie_pro);
         $data["liste_id_offre"]=$this->corporate_model->liste_id_categorie_par_offre($id_categorie_pro);


         $this->load->view("emploi_par_categorie_view",$data);
    }

   

    function stage_directe(){

         $data["liste_offres"]=$this->corporate_model->liste_offre_emploi_stage();
         $data["liste_5_categorie"]=$this->corporate_model->liste_5_dernieres_categorie();
         $this->load->view("stage_directe_view",$data);
    }

     function autre(){

         $this->load->view("autre_view");
    }

    function nous_contacter(){



    $this->form_validation->set_rules('nom', 'nom', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim'); 
    $this->form_validation->set_rules('message', 'message', 'trim');
    

        
        if($this->form_validation->run()){

         
          $nom=$this->input->post('nom'); 
          $email=$this->input->post('email');
          $message=$this->input->post('message');
          


          $email_entreprise="responsablerecrutement@istjobs.com";

          $message="<h4> <b> Nom : </b> ".$nom."</br>  <b> Email : </b> ".$email."</br> <b> Message : </b>  ".$message." </h4> ";

          $this->envoi_mail_contact_entreprise($email_entreprise,$message);
          $this->mail_succes();
         
          
  
        }else
        {

          $this->load->view("nous_contacter_view");



        }

         
    }

    function comment_postuler(){


      $this->load->view("comment_postuler_view");
         
    }

    function que_faisons_nous(){

         $this->load->view("que_faisons_nous_view");
    }

    function qui_sommes_nous(){

         $this->load->view("qui_sommes_nous_view");
    }

    function enregistrement_offre(){

         $this->load->view("enregistrement_offre_view");
    }

    function mail_succes(){

         $this->load->view("mail_succes_view");
    }

    function ajax_recherche_tous_offre(){


      $this->form_validation->set_rules('recherche_item', 'recherche_item', 'trim');
      if($this->form_validation->run()) 
      {



          $recherche_item=$this->input->post('recherche_item');

          if($recherche_item ==""){

           

          }else{


            if($this->corporate_model->recherche_offre_tous($recherche_item)){

                $data["liste_offres"]=$this->corporate_model->recherche_offre_tous($recherche_item);


               $this->load->view("offre_emploi_ajax_directe_view",$data);


            

             



          }
                

        }
         



    }

  }

    function ajax_recherche_offre_emploi_directe(){


      $this->form_validation->set_rules('recherche_item', 'recherche_item', 'trim');
      if($this->form_validation->run()) 
      {



          $recherche_item=$this->input->post('recherche_item');

          if($recherche_item ==""){

           

          }else{


            if($this->corporate_model->recherche_offre_emploi_directe($recherche_item)){

                $data["liste_offres"]=$this->corporate_model->recherche_offre_emploi_directe($recherche_item);


               $this->load->view("offre_emploi_ajax_directe_view",$data);


            

             



          }
                

        }
         



    }

  }

   function ajax_recherche_offre_stage(){


      $this->form_validation->set_rules('recherche_item', 'recherche_item', 'trim');
      if($this->form_validation->run()) 
      {



          $recherche_item=$this->input->post('recherche_item');

          if($recherche_item ==""){

           

          }else{


            if($this->corporate_model->recherche_offre_stage($recherche_item)){

                $data["liste_offres"]=$this->corporate_model->recherche_offre_stage($recherche_item);


               $this->load->view("offre_emploi_ajax_directe_view",$data);


            

             



          }
                

        }
         



    }

  }


    function ajax_recherche_offre(){


      $this->form_validation->set_rules('recherche_item', 'recherche_item', 'trim');
      if($this->form_validation->run()) 
      {



          $recherche_item=$this->input->post('recherche_item');

          if($recherche_item ==""){

           

          }else{


            if($this->corporate_model->recherche_offre_emploi($recherche_item)){

                $data["list_recherche_offre"]=$this->corporate_model->recherche_offre_emploi($recherche_item);


               $this->load->view("offre_emploi_ajax_view",$data);


            

             



          }


                

        }
         



    }

  }





  public function envoi_mail($to_email,$message){

        

            $from_email = "istjobs.recrutement@gmail.com";
            
            $nom ="ISTJOB recrutement";
           
            $subject2 = 'ISTJOB - Creation de compte candidat';
           
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

     public function envoi_mail_publication_entreprise($to_email,$message){

        

            $from_email = "istjobs.recrutement@gmail.com";
            
            $nom ="ISTJOB recrutement";
           
            $subject2 = 'ISTJOB - Publication d\'offre d\'emploi';
           
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

     public function envoi_mail_contact_entreprise($to_email,$message){

        

            $from_email = "istjobs.recrutement@gmail.com";
            
            $nom ="ISTJOB recrutement";
           
            $subject2 = 'ISTJOB -Nous contacter internaute';
           
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











    function logout(){


        session_destroy();
        redirect("login");
    }


    
        
   
        


        
        
    

   









 





}
