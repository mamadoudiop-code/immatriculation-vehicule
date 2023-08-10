<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_accueil extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_statut', 'statut');
        $this->load->model('M_type_rep', 'type_rep');
        $this->load->model('M_rep', 'rep');
        $this->load->model('M_vehicule', 've');
    }

    public function index()
    {
        $all_data = $this->ve->get_data();  //echo json_encode($all_data); exit;
        $data['all_data'] = $all_data;
        $data['max_id']=$this->ve->get_data_max_id();
        $rep = $this->rep->all();
        $data['select_rep'] = create_select_list($rep, 'id_rep', 'mission');
        $statut = $this->statut->get_data();
        $data['select_statut'] = create_select_list($statut, 'id_Statut', 'libelle_statut');


        $this->load->view('V_accueil',$data);
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->ve->ID_vehicule = $args[0];
        $this->ve->get_record();
        echo json_encode($this->ve, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function delete()
    {
        $args = func_get_args();
        $this->ve->ID_vehicule = $args[0];
        echo json_encode($this->ve->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function save()
    {
        if(!empty($this->input->post('ID_vehicule')))
        {
            $this->ve->ID_vehicule				= $this->input->post('ID_vehicule');
        }
        //   $this->etab->date_saisie 					= date("Y-m-d H:i:s");
        //}

        $this->ve->Code_type			= $this->input->post('Code_type');
        $this->ve->Num_serie			= $this->input->post('Num_serie');
        $this->ve->Date_premier_mise_en_circ			= $this->input->post('Date_premier_mise_en_circ');
        $this->ve->Code_marque			= $this->input->post('Code_marque');
        $this->ve->Code_genre			= $this->input->post('Code_genre');
        $this->ve->Code_carosserie			= $this->input->post('Code_carosserie');
        $this->ve->Puissance			= $this->input->post('Puissance');

        $this->ve->Energie			= $this->input->post('Energie');
        $this->ve->Places			= $this->input->post('Places');
        $this->ve->PV			= $this->input->post('PV');
        $this->ve->provenance			= $this->input->post('provenance');
        $this->ve->CU			= $this->input->post('CU');
        $this->ve->PT			= $this->input->post('PT');
        $this->ve->Mutations			= $this->input->post('Mutations');
        $this->ve->Observations			= $this->input->post('Observations');


        //$this->etab->cycle_etablissement				= $this->input->post('cycle_etablissement');

        //$this->etab->etat								= $this->input->post('etat_etablissement');

        //date_default_timezone_set('UTC');
        //$this->etab->date_last_modif 					= date("Y-m-d H:i:s");

        echo json_encode($this->ve->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }

}
