<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_etablissement extends MY_Controller
{
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('M_etablissement', 'etab');  
    }

	public function index()
    {
		$all_data = $this->etab->get_data();  //echo json_encode($all_data); exit;
		$data['all_data'] = $all_data;


        $this->load->view('V_etablissement',$data);
    }

    public function get_record()
    {
        $args = func_get_args(); 
        $this->etab->id_etablissement = $args[0];
        $this->etab->get_record();
        echo json_encode($this->etab, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function delete()
    {
        $args = func_get_args();
        $this->etab->id_etablissement = $args[0];
        echo json_encode($this->etab->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

	public function save()
    {	
		if(!empty($this->input->post('id_etablissement')))
        { 
			$this->etab->id_etablissement				= $this->input->post('id_etablissement');
		}
		else
		{
			$this->etab->date_saisie 					= date("Y-m-d H:i:s");
		}
		
		$this->etab->libelle_etablissement				= $this->input->post('libelle_etablissement');
		$this->etab->cycle_etablissement				= $this->input->post('cycle_etablissement');
		
		$this->etab->etat								= $this->input->post('etat_etablissement'); 
		
		date_default_timezone_set('UTC');
		$this->etab->date_last_modif 					= date("Y-m-d H:i:s");

		echo json_encode($this->etab->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }

}
