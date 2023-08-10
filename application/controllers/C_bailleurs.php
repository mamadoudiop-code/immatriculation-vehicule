<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bailleurs extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bailleurs', 'bailleurs');
        //$this->load->model('M_type_partenaire', 'partenaire');
    }

    public function index()
    {

        $bailleurs_data = $this->bailleurs->get_data();
        $data['all_data'] = $bailleurs_data;

       // $partenaire = $this->partenaire->get_data();
        //$data['select_partenaire'] = create_select_list($partenaire, 'code_type_part', 'libelle_type_part');


        $this->load->view('V_bailleurs', $data);
    }

    public function save()
    {
        if ($this->input->post('code_bailleurs') != '')
        { $this->bailleurs->code_bailleurs = $this->input->post('code_bailleurs');}


        $this->bailleurs->libelle_bailleurs = $this->input->post('libelle_bailleurs');
        $this->bailleurs->code_type_part   = $this->input->post('code_type_part');
        $this->bailleurs->etat_bailleurs    = $this->input->post('etat_bailleurs');

        echo json_encode($this->bailleurs->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->bailleurs->code_bailleurs = $args[0];
        $this->bailleurs->get_record();
        echo json_encode($this->bailleurs, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }


  public function delete()
    {
        $args = func_get_args();
        $this->bailleurs->code_bailleurs = $args[0];
        echo json_encode($this->bailleurs->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function archive()
    {
        $args = func_get_args();
        if ($this->bailleurs->get_etat($args[0])[0] == 1)
        {
            $this->bailleurs->code_bailleurs = $args[0];
            $result = $this->bailleurs->fake_delete();
            $result['message'] = 'Archivage effectué';
        }

        else
        {
            $this->bailleurs->code_bailleurs = $args[0];
            $result = $this->bailleurs->restor();
        }
        echo json_encode($result, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

}
