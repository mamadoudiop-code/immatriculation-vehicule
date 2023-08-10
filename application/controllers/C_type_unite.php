<?php

defined('BASEPATH') OR exit('No direct script access allowed'); 
    
   class C_type_unite extends MY_Controller { 
    
   	public function __construct() 
   	{ 
   	    parent::__construct(); 
   	   $this->load->model('M_type_unite', 'm_modele'); 
   	} 
    
   	public function index() 
   	{ 
   		$all_data = $this->m_modele->get_data_liste(); 
   		$data['all_data'] = $all_data; 
          $data['all_type_status'] 	=  $this->m_modele->get_data_forform_etat(); 
   		$this->load->view('params/v_type_unite', $data); 
   	} 
    
   	public function get_record(){ 
   		$args =func_get_args(); 
   		$this->m_modele->id_type_unite =  $args[0]; 
   		$this->m_modele->get_record(); 
   		echo json_encode($this->m_modele, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
   	} 
    
   	public function delete(){ 
   		$args =func_get_args(); 
   		$this->m_modele->id_type_unite =  $args[0]; 
   		echo json_encode($this->m_modele->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
   	} 
    
   	public function save(){ 
   		$val_id = $this->input->post('id_type_unite'); 
   		if (!empty($val_id)) 
   		{ 
   			$this->m_modele->id_type_unite = $this->input->post('id_type_unite'); 
   		} 
   		 
   		$this->m_modele->libelle = $this->input->post('libelle'); 
   		echo json_encode( $this->m_modele->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
   	} 
    
   } 
