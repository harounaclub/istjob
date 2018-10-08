<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corporate_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function nbOffre(){
       
      $this->db->where("status_offre",0);
      $nbOffre=$this->db->count_all_results('offre_emplois');
      return $nbOffre;

   }

   function liste_5_dernieres_categorie(){

        $this->db->limit(5);
        $this->db->select()->from('categorie_pro');

        $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

    function liste_offre(){

        $this->db->where("status_offre",0);
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();


       
        if($q->num_rows()>0)
        {
             foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

      

    }

     function liste_offre_tous(){

        $this->db->where("status_offre",0);
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();


       
        if($q->num_rows()>0)
        {
             foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

      

    }

    function liste_offre_emploi_directe(){


        $this->db->where("status_emploi_directe",1);
        $this->db->where("status_offre",0);
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();


       
        if($q->num_rows()>0)
        {
             foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

      

    }


     function liste_offre_emploi_stage(){


        $this->db->where("status_emploi_stage",1);
        $this->db->where("status_offre",0);
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();


       
        if($q->num_rows()>0)
        {
             foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

      

    }

    function liste_id_categorie_par_offre($id_categorie_pro){

        $this->db->where("id_categorie_pro",$id_categorie_pro);
        $this->db->select()->from('liaison_categoriepro_offre');

        $q = $this->db->get();


       
        if($q->num_rows()>0)
        {
             foreach ($q->result() as $lign)
            {
                $data[]=$lign->id_offre;
            }

            return $data;
        }

      

    }

    function compter_id_categorie_par_offre($id_categorie_pro){

        $this->db->where("id_categorie_pro",$id_categorie_pro);
        
        $nbOffre=$this->db->count_all_results('liaison_categoriepro_offre');
        return $nbOffre;

        
    }

    function get_nom_categorie($id_categorie_pro){

        $this->db->where("id_categorie_pro",$id_categorie_pro);
        $this->db->select()->from('categorie_pro');

        $q = $this->db->get();


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


    function liste_6_dernieres_offre(){

        $this->db->limit(5);
        $this->db->where("status_offre",0);
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }


    function offre_par_id($id_offre){

        
        $this->db->where("id_offre",$id_offre);
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

    function ajout_candidat($data){
       
     $this->db->insert('cv_candidat', $data); 
     return True;

   }

    function ajout_lia_offre_candidat($data){
       
     $this->db->insert('liaison_offre_candidat', $data); 
     return True;

   }

   function ajout_offre($data){
       
     $this->db->insert('offre_emplois', $data); 
     return True;

   }

   function ajout_cat_pro($data){
       
     $this->db->insert('liaison_categoriepro_offre', $data);
     return True;

   }
   function ajout_entreprise($data){
       
     $this->db->insert('entreprise', $data); 
     return True;

   }


    


     function liste_niveauEtude_par_offre($id_offre){

        $this->db->limit(5);
        $this->db->where("id_offre",$id_offre); 
        $this->db->select()->from('liaison_niveau_etude_offre');

        $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

     function liste_Categorie_pro(){

        $this->db->select()->from('categorie_pro');

        $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

    function liste_typeContrat_par_offre($id_offre){

        $this->db->limit(5);
        $this->db->where("id_offre",$id_offre); 
        $this->db->select()->from('liaison_type_contrat_offre');

        $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

    function get_libelle_offre($id_niveaux_etude){

        $this->db->limit(5);
        $this->db->where("id_niveaux_etude",$id_niveaux_etude); 
        $this->db->select()->from('niveau_etude');

        $q = $this->db->get();


        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_niveaux_etude;
            }

            return $data;
        }

    }

     function get_libelle_offre_parTypeContrat($id_type_contrat){

        $this->db->limit(5);
        $this->db->where("id_type_contrat",$id_type_contrat); 
        $this->db->select()->from('type_contrat');

        $q = $this->db->get();


        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_type_contrat;
            }

            return $data;
        }

    }


    function get_info_offre($id_offre){

        
        $this->db->where("id_offre",$id_offre); 
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();


       
        if($q->num_rows()>0)
        {
             foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

    function check_connection($login,$mdp){

      $this->db->where('login_candidat',$login);
      $this->db->where('mdp_candidat', $mdp);
      $q = $this->db->get('candidat');
    
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
      $q = $this->db->get('candidat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function recherche_offre_emploi($intitule_offre){
  

    $status_offre=0;
   
    
       
        $array = array('intitule_offre' => $intitule_offre);
        $this->db->like($array);
        
        $this->db->where('status_offre',$status_offre);
       
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();
        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            
        }

        return $data;

    }

    function recherche_offre_emploi_directe($intitule_offre){
  

    $status_offre=0;
    $status_emploi_directe=1;
   
    
       
        $array = array('intitule_offre' => $intitule_offre);
        $this->db->like($array);
        
        $this->db->where('status_offre',$status_offre);
        $this->db->where('status_emploi_directe',$status_emploi_directe);
       
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();
        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            
        }

        return $data;

    }

     function recherche_offre_tous($intitule_offre){
  

    $status_offre=0;
    
   
    
       
        $array = array('intitule_offre' => $intitule_offre);
        $this->db->like($array);
        
        $this->db->where('status_offre',$status_offre);
        
       
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();
       
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            
        }

        return $data;

    }

    function recherche_offre_stage($intitule_offre){
  

    $status_offre=0;
    $status_emploi_stage=1;
   
    
       
        $array = array('intitule_offre' => $intitule_offre);
        $this->db->like($array);
        
        $this->db->where('status_offre',$status_offre);
        $this->db->where('status_emploi_stage',$status_emploi_stage);
       
        $this->db->select()->from('offre_emplois');

        $q = $this->db->get();
        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
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