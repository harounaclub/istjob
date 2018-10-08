<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Candidat_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    

    function check_connection($login,$mdp){

      $this->db->where('login_candidat',$login);
      $this->db->where('mdp_candidat', $mdp);
      $q = $this->db->get('cv_candidat');
    
      $count=0;

          if($q->num_rows()>0)
          {
             return True;        
          }
          else
          {
            return False;
          }


    }

    function getInfo_user($login,$password){

     
      $this->db->where('login_candidat',$login);
      $this->db->where('mdp_candidat', $password);
      $q = $this->db->get('cv_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function getEmail_candidat($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
     
      $q = $this->db->get('cv_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->email_candidat;
          }
          
          return $data;
      }
    }

    function get_liste_infogeneral_candidat($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function get_liste_exp_pro_candidat($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_experience_professionnelle');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

     function get_liste_diplome_candidat($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_diplome_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }
    function get_liste_expe_extra_pro($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_experience_extra_pro_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }
    function get_liste_hobbie($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_loisir_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function get_liste_langue($id_candidat){

     
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_langue_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function modifier_candidat($id_candidat,$data){
       
        $this->db->where('id_candidat',$id_candidat);
        $this->db->update('cv_candidat', $data);
        return True;

   }

   function modifier_photo_candidat($id_candidat,$data){
       
        $this->db->where('id_candidat',$id_candidat);
        $this->db->update('img_candidat', $data);
        return True;

   }


   function modifier_liaison_offre_candidat($id_offre,$id_candidat,$data){
       
        $this->db->where('id_offre',$id_offre);
        $this->db->where('id_candidat',$id_candidat);
        $this->db->update('liaison_offre_candidat', $data);
        return True;

   }

   function ajout_exp_pro($data){
       
     $this->db->insert('cv_experience_professionnelle', $data); 
     return True;

   }

   function ajout_photo_candidat($data){
       
     $this->db->insert('img_candidat', $data); 
     return True;

   }

   function ajout_diplome($data){
       
     $this->db->insert('cv_diplome_candidat', $data); 
     return True;

   }

   function ajout_exp_extra_pro($data){
       
     $this->db->insert('cv_experience_extra_pro_candidat', $data); 
     return True;

   }
   function ajout_loisir($data){
       
     $this->db->insert('cv_loisir_candidat', $data); 
     return True;

   }

   function ajout_liaison_offre_candidat($data){
       
     $this->db->insert('liaison_offre_candidat', $data); 
     return True;

   }
   function ajout_langue($data){
       
     $this->db->insert('cv_langue_candidat', $data); 
     return True;

   }

   function getListe_offre(){
      
      $status_offre=0;
      $this->db->where('status_offre',$status_offre);
      $q = $this->db->get('offre_emplois');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function getListe_offre_candidat($id_candidat){
      
      $status_offre=0;
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('liaison_offre_candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function getListe_offre_parID($id_offre){
      
      $status_offre=0;
      $this->db->where('id_offre',$id_offre);
      $q = $this->db->get('offre_emplois');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


     function verifie_si_candidat_offre($id_offre,$id_candidat){
    
      $this->db->where('id_offre',$id_offre);
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('liaison_offre_candidat');

      $data=0;
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              

              $status=$lign->status;
              if($status==0){

                $data=1;
              }

              if($status==1){

                $data=2;
              }

          }     
          
      }

      return $data;
    }


    

    function getNom_entreprise($id_entreprise){
      
      
      $this->db->where('id_entreprise',$id_entreprise);
      $q = $this->db->get('entreprise');
      $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->raison_social;
          }
          
         
      }
      return $data;
    }

     function supprim_exp_pro($id_experience){
     
      $this->db->delete('cv_experience_professionnelle', array('id_experience' => $id_experience)); 

      return true;

   }

   function supprim_diplomes($id_diplome_candidat){
     
      $this->db->delete('cv_diplome_candidat', array('id_diplome_candidat' => $id_diplome_candidat)); 

      return true;

   }

   function supprim_exp_ex_prof($id_experience_extra_pro_cand){
     
      $this->db->delete('cv_experience_extra_pro_candidat', array('id_experience_extra_pro_cand' => $id_experience_extra_pro_cand)); 

      return true;

   }

   function supprim_hobbies($id_loisir_candidat){
     
      $this->db->delete('cv_loisir_candidat', array('id_loisir_candidat' => $id_loisir_candidat)); 

      return true;

   }

   function supprim_langue($id_langue_candidat){
     
      $this->db->delete('cv_langue_candidat', array('id_langue_candidat' => $id_langue_candidat)); 

      return true;

   }

   function supprim_assistant_diplomes($id_diplome_candidat){
     
      $this->db->delete('cv_diplome_candidat', array('id_diplome_candidat' => $id_diplome_candidat)); 

      return true;

   }

   function supprim_assistant_exp_pro($id_experience){
     
      $this->db->delete('cv_experience_professionnelle', array('id_experience' => $id_experience)); 

      return true;

   }
   function supprim_assistant_exp_extra_pro($id_experience_extra_pro_cand){
     
      $this->db->delete('cv_experience_extra_pro_candidat', array('id_experience_extra_pro_cand' => $id_experience_extra_pro_cand)); 

      return true;

   }

   function supprim_assistant_hobbie($id_loisir_candidat){
     
      $this->db->delete('cv_loisir_candidat', array('id_loisir_candidat' => $id_loisir_candidat)); 

      return true;

   }

   function supprim_assistant_langues($id_langue_candidat){
     
      $this->db->delete('cv_langue_candidat', array('id_langue_candidat' => $id_langue_candidat)); 

      return true;

   }

   function get_nom_entreprise($id_entreprise){


      $this->db->where('id_entreprise',$id_entreprise);
      $q = $this->db->get('entreprise');

      $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->raison_social;
          }
          
          
      }
      return $data;
    }


    function tous_niveau_offre(){

      
      $q = $this->db->get('niveau_etude');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function get_tous_niveau_offre($id_offre){

      $this->db->where('id_offre',$id_offre);
      $q = $this->db->get('liaison_niveau_etude_offre');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

   function get_nom_niveau_etude($id_niveaux_etude){


      $this->db->where('id_niveaux_etude',$id_niveaux_etude);
      $q = $this->db->get('niveau_etude');

      $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->libelle_niveaux_etude;
          }
          
          
      }
      return $data;
    }

    function get_nom_diplome($id_diplome){


      $this->db->where('id_diplome',$id_diplome);
      $q = $this->db->get('diplome');

      $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->libelle_diplome;
          }
          
          
      }
      return $data;
    }

    function get_tous_diplome_offre($id_offre){

      $this->db->where('id_offre',$id_offre);
      $q = $this->db->get('liaison_diplome_offre');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }



    function get_tous_contrat_offre($id_offre){

      $this->db->where('id_offre',$id_offre);
      $q = $this->db->get('liaison_type_contrat_offre');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function get_nom_contrat($id_type_contrat){


      $this->db->where('id_type_contrat',$id_type_contrat);
      $q = $this->db->get('type_contrat');

      $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->libelle_type_contrat;
          }
          
          
      }
      return $data;
    }

    function get_tous_catpro_offre($id_offre){

      $this->db->where('id_offre',$id_offre);
      $q = $this->db->get('liaison_categoriepro_offre');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function get_nom_catpro($id_categorie_pro){


      $this->db->where('id_categorie_pro',$id_categorie_pro);
      $q = $this->db->get('categorie_pro');

      $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->libelle_categorie;
          }
          
          
      }
      return $data;
    }


   function get_info_offre_id($id_offre){

      $this->db->where('id_offre',$id_offre);
      $q = $this->db->get('offre_emplois');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function get_liste_5_dernieres_offres_emplois(){

      $status_offre=0;

      $this->db->limit(5);
      $this->db->where('status_offre',$status_offre);
      $q = $this->db->get('offre_emplois');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }



    function compterOffresEmploi(){
      

      $status_offre=0;
      $this->db->where('status_offre',$status_offre);
      $nb_offres_emploi=$this->db->count_all_results('offre_emplois');
      return $nb_offres_emploi;

   }


   function compterMesOffresEmploi($id_candidat){
      

      $status=0;
      $this->db->where('id_candidat',$id_candidat);
      $this->db->where('status',$status);
      $nb_mes_offres=$this->db->count_all_results('liaison_offre_candidat');
      return $nb_mes_offres;

   }

   function get_image_candidat($id_candidat){
       
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('img_candidat');
     
       $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->url_img;
            }
            
            
        }

        return $data;

   }

   function get_email_candidat($id_candidat){
       
      $this->db->where('id_candidat',$id_candidat);
      $q = $this->db->get('cv_candidat');
     
       $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->email_candidat;
            }
            
            
        }

        return $data;

   }







    


   // generateur de clé primaire
   function clePrimaire( $taille ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$taille);

   }
			  
  
   }