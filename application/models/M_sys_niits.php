<?php
  class M_sys_niits extends  MY_Model{
  
      public $id;
      public $id_service;
      public $ien;
      public $email;
      public $nom;
      public $prenom;
      public $id_profil;
      public $password;
      public $statut;
      public $date_last_modif;
  
      public function get_db_table()
      {
         return 'sys_niits';
      }
  
      public function get_db_table_pk()
      {
          return 'id';
      }
  	
      public function get_data_liste(){
  
  		$sql_ll="SELECT n.id ,n.`id_service`,n.`ien`,n.`email`,n.`nom`,n.`prenom`,n.`id_profil`,n.`password`,n.`date_last_modif`       ";     
  		$sql_ll.=" , ser.libelle _the_serv, pr.libelle_type_profil _the_prof  ";  
  		$sql_ll.=", n.`statut` etat ";
  		$sql_ll.=" FROM `sys_niits` n ";		
  		$sql_ll.=" INNER JOIN `sys_liste_services` ser ON(ser.id=n.id_service)  ";	
  		$sql_ll.=" INNER JOIN `sys_type_profil` pr ON(pr.id_type_profil=n.id_profil)  ";		    
  		
  		$query = $this->db->query($sql_ll);
  		
  		return $query->result(); 
      }
  
  }
