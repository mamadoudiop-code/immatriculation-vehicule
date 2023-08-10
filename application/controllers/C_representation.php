<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_representation extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_statut', 'statut');
        $this->load->model('M_type_rep', 'type_rep');
        $this->load->model('M_rep', 'rep');
    }

    public function index()
    {
        $all_data = $this->rep->get_data();  //echo json_encode($all_data); exit;
        $data['all_data'] = $all_data;
        $type_rep = $this->type_rep->get_data();
        $data['select_type'] = create_select_list($type_rep, 'id_type', 'libelle_type');


        $this->load->view('V_rep',$data);
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->rep->id_rep = $args[0];
        $this->rep->get_record();
        echo json_encode($this->rep, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function delete()
    {
        $args = func_get_args();
        $this->rep->id_rep = $args[0];
        echo json_encode($this->rep->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function save()
    {
        if(!empty($this->input->post('id_rep')))
        {
            $this->rep->id_rep				= $this->input->post('id_rep');
        }
        //   $this->etab->date_saisie 					= date("Y-m-d H:i:s");
        //}

        $this->rep->mission				= $this->input->post('mission');
        $this->rep->code_mission			= $this->input->post('code_mission');
        $this->rep->Adresse				= $this->input->post('Adresse');
        $this->rep->mail				= $this->input->post('mail');
        $this->rep->Tel			= $this->input->post('Tel');
        $this->rep->id_type		= $this->input->post('id_type');

        //$this->etab->cycle_etablissement				= $this->input->post('cycle_etablissement');

        //$this->etab->etat								= $this->input->post('etat_etablissement');

        //date_default_timezone_set('UTC');
        //$this->etab->date_last_modif 					= date("Y-m-d H:i:s");

        echo json_encode($this->rep->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }

}
