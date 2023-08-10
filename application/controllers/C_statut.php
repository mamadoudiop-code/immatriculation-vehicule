<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_statut extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_statut', 'statut');
    }

    public function index()
    {
        $all_data = $this->statut->get_data();  //echo json_encode($all_data); exit;
        $data['all_data'] = $all_data;


        $this->load->view('V_statut',$data);
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->statut->id_Statut = $args[0];
        $this->statut->get_record();
        echo json_encode($this->statut, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function delete()
    {
        $args = func_get_args();
        $this->statut->id_Statut = $args[0];
        echo json_encode($this->statut->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function save()
    {
        if(!empty($this->input->post('id_Statut')))
        {
            $this->statut->id_Statut				= $this->input->post('id_Statut');
        }
        //   $this->etab->date_saisie 					= date("Y-m-d H:i:s");
        //}

        $this->statut->libelle_statut				= $this->input->post('libelle_statut');
        //$this->etab->cycle_etablissement				= $this->input->post('cycle_etablissement');

        //$this->etab->etat								= $this->input->post('etat_etablissement');

        //date_default_timezone_set('UTC');
        //$this->etab->date_last_modif 					= date("Y-m-d H:i:s");

        echo json_encode($this->statut->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }

}
