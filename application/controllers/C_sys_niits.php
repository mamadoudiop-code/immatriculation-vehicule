<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
    
   class C_sys_niits extends MY_Controller { 
    
   	public function __construct() 
   	{ 
   	    parent::__construct(); 
   	   $this->load->model('M_sys_niits', 'm_modele'); 
		  $this->load->model('Global_bdd', 'gl_bdd');
   	} 
    
   	public function index() 
   	{ 
   		$all_data = $this->m_modele->get_data_liste(); 
   		$data['all_data'] 			= $all_data; 
		$data['all_type_status'] 	=  array(''=>'Choisir...','attente'=>'attente','actif'=>'actif','résilié'=>'résilié','supprimé'=>'supprimé',); 
        $data['dat_form_serv'] = $this->gl_bdd->get_data_for_combo("sys_liste_services", "id", "libelle", " ");
        $data['dat_form_prof'] = $this->gl_bdd->get_data_for_combo("sys_type_profil", "id_type_profil", "libelle_type_profil", " WHERE etat='1' ");

   		$this->load->view('sys/v_sys_niits', $data); 
   	} 
    
		public function get_liste_service() 
    { 
		$shown_service=$_GET['id'];
        $all_data = $this->m_modele->get_data_liste_service($shown_service); 
        $data['all_data'] = $all_data; 
        $this->load->view('params/v_liste_services', $data); 
    } 
	
	
   	public function get_record(){ 
   		$args =func_get_args(); 
   		$this->m_modele->id =  $args[0]; 
   		$this->m_modele->get_record(); 
   		echo json_encode($this->m_modele, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
   	} 
    
   	public function delete(){ 
   		$args =func_get_args(); 
   		$this->m_modele->id =  $args[0]; 
   		echo json_encode($this->m_modele->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
   	} 
    
   	public function save(){ 
   		$val_id = $this->input->post('id'); 
   		if (!empty($val_id)) 
   		{ 
   			$this->m_modele->id = $this->input->post('id'); 
   		} 
   		 
   		$this->m_modele->id_service = $this->input->post('id_service'); 
   		$this->m_modele->ien = $this->input->post('ien'); 
   		$this->m_modele->email = $this->input->post('email'); 
   		$this->m_modele->nom = $this->input->post('nom'); 
   		$this->m_modele->prenom = $this->input->post('prenom'); 
   		$this->m_modele->id_profil = $this->input->post('id_profil'); 
   		$this->m_modele->password = $this->input->post('password'); 
   		$this->m_modele->statut = $this->input->post('statut'); 
   		$this->m_modele->date_last_modif = $this->input->post('date_last_modif'); 
   		echo json_encode( $this->m_modele->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
   	} 
    
   } 
