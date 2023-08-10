<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_type_rep extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_statut', 'statut');
        $this->load->model('M_type_rep', 'type_rep');
    }

    public function index()
    {
        $all_data = $this->type_rep->get_data();  //echo json_encode($all_data); exit;
        $data['all_data'] = $all_data;


        $this->load->view('V_type_rep',$data);
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->type_rep->id_type = $args[0];
        $this->type_rep->get_record();
        echo json_encode($this->type_rep, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function delete()
    {
        $args = func_get_args();
        $this->type_rep->id_type = $args[0];
        echo json_encode($this->type_rep->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function save()
    {
        if(!empty($this->input->post('id_type')))
        {
            $this->type_rep->id_type				= $this->input->post('id_type');
        }
        //   $this->etab->date_saisie 					= date("Y-m-d H:i:s");
        //}

        $this->type_rep->libelle_type				= $this->input->post('libelle_type');
        //$this->etab->cycle_etablissement				= $this->input->post('cycle_etablissement');

        //$this->etab->etat								= $this->input->post('etat_etablissement');

        //date_default_timezone_set('UTC');
        //$this->etab->date_last_modif 					= date("Y-m-d H:i:s");

        echo json_encode($this->type_rep->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }

}
