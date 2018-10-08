<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrateur_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }




    function check_connection($login,$mdp){

      $this->db->where('login_administrateur',$login);
      $this->db->where('mdp_administrateur', $mdp);
      $q = $this->db->get('administrateur');
    
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

    function compterCandidat(){
       
      $this->db->where("status >=",2); 
      $nb_sous_menus=$this->db->count_all_results('cv_candidat');
       
      return $nb_sous_menus;

   }

   function compterOffre(){
       
      $this->db->where("status_offre",0); 
      $nb_sous_menus=$this->db->count_all_results('offre_emplois');
       
      return $nb_sous_menus;

   }

   function compterEntreprise(){
       
      
      $nb_sous_menus=$this->db->count_all_results('entreprise');
       
      return $nb_sous_menus;

   }

   

    function getInfoGeneraleParID(){
   
      $id_infos_generales="001";
     
      $this->db->where('id_infos_generales',$id_infos_generales);
      $q = $this->db->get('infos_generales');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function getInfo_user($login,$password){

     
      $this->db->where('login_administrateur',$login);
      $this->db->where('mdp_administrateur', $password);
      $q = $this->db->get('administrateur');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function get_liste_offre(){


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


    function get_liste_offre_10(){

      $this->db->where('status_offre',0);
      $this->db->limit(10);
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

    function get_liste_offre_active(){


      $this->db->where('status_offre',0);
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


    function get_liste_offre_annule(){
   
      $status_offre=1;

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

    function get_liste_offre_stat(){
   
      $status_offre=0;
      $this->db->limit(7);
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

    function get_liste_offre_encours(){
   
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


    function modifier_offre($id_offre,$data){
       
        $this->db->where('id_offre',$id_offre);
        $this->db->update('offre_emplois', $data);
        return True;

    }
    function get_liste_offre_postee(){
      
      $status_offre=3;
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

    function modifier_interview($id_interview,$data){
       
        $this->db->where('id_interview',$id_interview);
        $this->db->update('interview', $data);
        return True;

    }


   function modifier_liaison_offre_candidat($id_offre,$id_candidat,$data){
       
        $this->db->where('id_offre',$id_offre);
        $this->db->where('id_candidat',$id_candidat);
        $this->db->update('liaison_offre_candidat', $data);
        return True;

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


   function ajout_lia_offre_catpro($data){
       
     $this->db->insert('liaison_categoriepro_offre', $data); 
     return True;

   }

    function ajout_temoignage($data){
       
     $this->db->insert('temoignage', $data); 
     return True;

   }

    function ajout_contacter_nous($data){
       
     $this->db->insert('contacter_nous', $data); 
     return True;

   }

   function ajout_img_temoignages($data){
       
     $this->db->insert('img_temoignages', $data); 
     return True;

   }

   function ajout_img_administrateur($data){
       
     $this->db->insert('img_administrateur', $data); 
     return True;

   }


   function ajout_lia_offre_niveau($data){
       
     $this->db->insert('liaison_niveau_etude_offre', $data); 
     return True;

   }

    function ajout_lia_offre_entreprise($data){
       
     $this->db->insert('liaison_entreprise_offre', $data); 
     return True;

   }

   function ajout_lia_offre_typecontrat($data){

    $this->db->insert('liaison_type_contrat_offre', $data); 
     return True;

   }

   function ajout_lia_offre_diplom($data){

    $this->db->insert('liaison_diplome_offre', $data); 
     return True;

   }


   function ajout_offre($data){
 
     $this->db->insert('offre_emplois', $data); 
     return True;
   }


   

   function get_liste_entreprise(){

    $q = $this->db->get('entreprise');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }

   function get_liste_temoignages(){

    $q = $this->db->get('temoignage');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }

   function get_liste_contacter(){

    $q = $this->db->get('contacter_nous');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }



   function get_liste_diplome(){

    $q = $this->db->get('diplome');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }

   function get_liste_typecontrat(){

    $q = $this->db->get('type_contrat');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }

    function get_liste_categoriepro(){

    $q = $this->db->get('categorie_pro');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }
  

   function get_liste_candidats(){

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

   function get_liste_candidats_offre(){

    $this->db->where('status',0);
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

   function get_liste_candidats_offre_interview(){

    $this->db->where('status_recrutement  ',1);
    $q = $this->db->get('interview');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
   }

   function get_liste_candidats_retenu_offre(){

    $this->db->where('status',0);
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

   function get_interview_en_attente(){

    $this->db->where('statut',0);
    $q = $this->db->get('interview');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
   }


   function get_interview_en_execute(){

    $this->db->where('statut',1);
    $q = $this->db->get('interview');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
   }

   function info_interview($id_interview){

    $this->db->where('id_interview',$id_interview);
    $q = $this->db->get('interview');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
   }


   function get_interview_en_annule(){

    $this->db->where('statut',2);
    $q = $this->db->get('interview');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
   }


   function get_liste_candidats_par_offre($id_offre){

    $this->db->where('status',0);
    $this->db->where('id_offre',$id_offre);
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

   function get_liste_selectionnee_candidats_par_offre($id_offre){

    $this->db->where('status',1);
    $this->db->where('id_offre',$id_offre);
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

   function get_liste_candidats_inscrits(){

    $this->db->where('status >=',2);
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


   function ajout_client($data){


     $this->db->insert('entreprise', $data); 
     return True;


   }



   function get_liste_client(){

      $q = $this->db->get('entreprise');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }


   }


   function ajout_niveau($data){

     $this->db->insert('niveau_etude', $data); 
     return True;

   }

   function ajout_interview($data){

     $this->db->insert('interview', $data); 
     return True;

   }


   function get_liste_niveau(){

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




   


  function ajout_typecontrat($data){

     $this->db->insert('type_contrat', $data); 
     return True;



  }

  function ajout_diplome($data){

    $this->db->insert('diplome', $data); 
    return True;

  }


  function get_liste_profil(){

    $q = $this->db->get('profil');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }



  }

   function get_liste_profil_nom($id_profil){

    $this->db->where('id_profil',$id_profil);
    $q = $this->db->get('profil');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->designation_profil;
          }
          
          return $data;
      }



  }




  function get_liste_utilisateur(){

    $q = $this->db->get('administrateur');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }



  }

  function ajout_utilisateur($data){

    $this->db->insert('administrateur', $data); 
    return True;

  }

  function ajout_categoriepro($data){

    $this->db->insert('categorie_pro', $data); 
    return True;

  }

  function supprim_niveau($id_niveaux_etude){
     
      $this->db->delete('niveau_etude', array('id_niveaux_etude' => $id_niveaux_etude));

      return True; 

  }

  function supprim_categorie_pro($id_categorie_pro){
     
      $this->db->delete('categorie_pro', array('id_categorie_pro' => $id_categorie_pro));

      return True; 

  }

  function supprim_typecontrat($id_type_contrat){
     
      $this->db->delete('type_contrat', array('id_type_contrat' => $id_type_contrat));

      return True; 

  }

  function supprim_diplome($id_diplome){
     
      $this->db->delete('diplome', array('id_diplome' => $id_diplome));

      return True; 

  }


  function supprim_utilisateur($id_administrateur){
     
      $this->db->delete('administrateur', array('id_administrateur' => $id_administrateur));

      return True; 

  }

  function supprim_entreprise($id_entreprise){
     
      $this->db->delete('entreprise', array('id_entreprise' => $id_entreprise));

      return True; 

  }



  //info candidt

   function get_info_generale_candidat($id_candidat){

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


   function nom_offre_id($id_offre){

    $this->db->where('id_offre',$id_offre);
    $q = $this->db->get('offre_emplois');
    $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->intitule_offre;
          }
          
          
      }

      return $data;


   }


   function nom_candidat_id($id_candidat){

    $this->db->where('id_candidat',$id_candidat);
    $q = $this->db->get('cv_candidat');
    $data="";
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data=$lign->nom_candidat." ".$lign->prenoms_candidat;
          }
          
          
      }

      return $data;


   }


   function get_experience_professionnelle_candidat($id_candidat){

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

   function get_experience_extra_professionnelle_candidat($id_candidat){

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

   function get_langues_candidat($id_candidat){

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


   function get_loisirs_candidat($id_candidat){

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

   

    

    function modifierAdministrateur($data){
       
        $this->db->where('id_administrateur',$id_administrateur);
        $this->db->update('administrateur', $data);
        return True;

    }

     function modifierquiSommenNous($data){

        $id_pages="001";
       
        $this->db->where('id_pages',$id_pages);
        $this->db->update('pages', $data);
        return True;

    }


      function getquiSommeNousParId(){

      $id_pages="001";
      $this->db->where('id_pages',$id_pages);

      $q = $this->db->get('pages');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function modifierquefaisonNous($data){

        $id_pages="002";
       
        $this->db->where('id_pages',$id_pages);
        $this->db->update('pages', $data);
        return True;

    }


    function getqueFaisonNousParId(){

      $id_pages="002";
      $this->db->where('id_pages',$id_pages);

      $q = $this->db->get('pages');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function modifierNotreVision($data){

        $id_pages="003";
       
        $this->db->where('id_pages',$id_pages);
        $this->db->update('pages', $data);
        return True;

    }

    function getqueNotreVisionParId(){

      $id_pages="003";
      $this->db->where('id_pages',$id_pages);

      $q = $this->db->get('pages');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }







   // generateur de clé primaire
   function clePrimaire( $taille ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$taille);

   }




  


  

}