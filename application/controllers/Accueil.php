<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text_helper');
		$this->load->helper('security');
					
	//initialisation de la session	
		$this->load->library('calendar') ;
		$this->load->library('session');		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('javascript');
	}

	public function home()
	{		
		$data['contents']= 'dashboard/home';
		$data['fonctionnement']="LE FONCTIONNEMENT DU BUREAU DES IMMATRICULATIONS DIPLOMATIQUES";
        $data['liste']="Liste des requêtes";
        $data['document_et_provenance']="Tableau de classification de La liste des documents à fournir et leur provenance";
		$this->load->view('template_2/layout',$data);
	}

}

